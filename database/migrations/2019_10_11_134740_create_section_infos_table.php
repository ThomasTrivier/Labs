<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('testimonial_title');
            $table->string('service_title_left');
            $table->string('service_span');
            $table->string('service_title_right');
            $table->string('button_text');
            $table->string('team_title_left');
            $table->string('team_span');
            $table->string('team_title_right');
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
        Schema::dropIfExists('section_infos');
    }
}
