<div x-data="startForm({
    categories: @entangle('categories'),
    payload: @entangle('payload'),
    interests: @entangle('user.interests'),
    knowledge: @entangle('user.knowledge'),
    typeResource: @entangle('user.typeResource'),
})">
<template x-for="category in categories">
<div class="shadow overflow-hidden rounded-md">
    <div class="px-4 py-5 bg-white">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 ">

                <label for="category" class="block text-sm font-medium text-gray-700" x-text="category.name"></label>
                    <select
                            :disable="!category.skills.length"
                            id="category"
                            name="category"
                            autocomplete="category"
                            class="mt-1 mb-4 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            x-on:change = "changeSkill(category.name, $event)">
                        <option value="">Selecione</option>
                        <template x-for="skill in category.skills">
                            <option :key ="skill.id" :value = "skill.id" x-text = "skill.name"></option>
                        </template>
                    </select>

                <div class="space-y-1">

                        <template x-for="(skill, index) in payload">
                            <template x-if="skill.category_id === category.id">
                            <div :key="'skill-${index}'" class=" flex flex-col p-y-4">

                                <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                                    <li class="col-span-1 md:flex rounded-md shadow-sm">
                                        <div class="flex-shrink-0 flex items-center justify-center md:w-24 w-auto md:rounded-l-md md:rounded-tr-none rounded-t-md bg-pink-600 text-white text-sm font-medium rounded-l-md text-center" x-text="skill.name"></div>
                                            <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                                    <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Qual seu nível de conhecimento?</a>
                                                    <div class="flex flex-row space-x-2">
                                                        <template x-for="i in 5">
                                                            <button x-on:click.prevent="skill.level = i" class="transform duration-150 active:scale-95">
                                                                    <svg class="h-6 w-6" :class="skill.level < i ? 'text-gray-50' : 'text-primary-100'"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                    </svg>
                                                            </button>
                                                        </template>
                                                    </div>
                                                </div>

                                                <div class="flex-shrink-0 pr-2 flex flex-col items-center">
                                                    <button x-on:click.prevent="removeSkill(index, skill.category_id)" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                    </button>
                                                </div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                            </template>
                        </template>

                </div>
            </div>
        </div>
    </div>
</div>
</template>
</div>
