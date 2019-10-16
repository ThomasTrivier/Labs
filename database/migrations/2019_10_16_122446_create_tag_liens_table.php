<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagLiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_liens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('article')->unsigned();
            $table->bigInteger('tag')->unsigned();
            $table->foreign('article')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('tag')->references('id')->on('tags')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_liens');
    }
}
