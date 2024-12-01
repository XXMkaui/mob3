<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarvelCharacter extends Migration {
    public function up() {
        Schema::create('marvel_characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('modified');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('marvel_character');
    }
}
