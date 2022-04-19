<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefaultGameLevels extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'game_mode', 'seconds', 'miliseconds', 'max_words_len'];
}
