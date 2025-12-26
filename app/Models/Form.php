<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'username',
        'password',
        'firstName',
        'lastName',
        'middleName',
        'dateOfBirth',
        'color',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
