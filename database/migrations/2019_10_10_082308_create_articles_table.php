<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('article_photo');
            $table->string('article_title');
            $table->text('article_content');
            $table->boolean('published')->default(false);
            $table->bigInteger('author')->unsigned();
            $table->bigInteger('categorie')->unsigned();
            $table->foreign('author')->references('id')->on('users');
            $table->foreign('categorie')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('articles');
    }
}
