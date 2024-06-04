<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->char('character', 1)->unique();
            $table->string('braille');
            $table->timestamps();
        });
        
        Schema::create('translationsBrailleEsp', function (Blueprint $table) {
            $table->id();
            $table->string('braille', 1);
            $table->string('character');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('translations');
        Schema::dropIfExists('translationsBrailleEsp');
    }
}

