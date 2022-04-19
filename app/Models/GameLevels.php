<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameLevels extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'game_mode', 'seconds', 'miliseconds', 'max_words_len'];
}
