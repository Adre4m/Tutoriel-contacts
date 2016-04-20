<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStationsTable extends Migration
{

    public function up() {
        Schema::create('station', function(Blueprint $table) {
            $table->increments('code');
            $table->string('name');
            $table->integer('x');
            $table->integer('y');
        });
    }
}