<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutinesTable extends Migration
{
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('details');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
