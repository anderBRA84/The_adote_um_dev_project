<?php

use App\Models\User;
use App\Http\Livewire\Components\KnowledgeScreen;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

it('checks if knowledge url is working', function () {
    $user = User::firstWhere('email', 'beerandcode@adoteum.dev');

    actingAs($user->load('profile'))
        ->get(route('app.knowledge'))
        ->assertOk();
})->only();

it('checks if knowledge list was loaded', function () {
    $user = User::firstWhere('email', 'beerandcode@adoteum.dev');

    actingAs($user->load('profile'))
        ->get(route('app.knowledge'))
        ->assertSee("Assembly");
});

it('stores knowledge form', function () {
    $payload = [
        ['id' => 1, 'level' => 3, 'category_id' => 1],
        ['id' => 2, 'level' => 4, 'category_id' => 1],
        ['id' => 3, 'level' => 1, 'category_id' => 1],
        ['id' => 4, 'level' => 5, 'category_id' => 1],
    ];

    $user = User::firstWhere('email', 'beerandcode@adoteum.dev');

    $this->assertDatabaseMissing('knowledge', ['user_id' => $user->id]);

    actingAs($user->load('profile'));

    livewire(KnowledgeScreen::class)
        ->set('payload', $payload)
        ->call('save')
        ->assertRedirect(route('app.developers'));

    $this->assertDatabaseHas('knowledge', ['user_id' => $user->id]);
});
