<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $fillable = [
     'from_user_id',
     'to_user_id',
     'name',
     'expiration_at'

    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class,'from_user_id','id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class,'to_user_id','id');
    }
}
