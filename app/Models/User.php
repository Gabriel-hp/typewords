<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class User extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = ['username', 'email', 'password', 'birth_date'];
}
