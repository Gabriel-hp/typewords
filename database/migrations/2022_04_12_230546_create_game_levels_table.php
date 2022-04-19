<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->enum('game_mode', ['randomwords', 'randomletters']);
            $table->unsignedInteger('seconds');
            $table->unsignedInteger('miliseconds');
            $table->unsignedInteger('max_words_len');
            $table->timestamps();
        });

        Schema::rename('game_settings', 'game_levels');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_levels');
    }
};
