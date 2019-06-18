<?php

namespace App\Models;

class Useinfo extends Model
{
    protected $fillable = ['user_name', 'user_gender', 'user_age', 'photo', 'token', 'password'];
}
