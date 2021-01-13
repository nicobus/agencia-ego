<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('model');
            $table->integer('year');
            $table->double('price');
            $table->string('list_image');
            $table->string('title');
            $table->string('general_description');
            $table->string('image_carrousel_01');
            $table->string('title_image_carrousel_01');
            $table->string('description_image_carrousel_01');
            $table->string('image_carrousel_02');
            $table->string('title_image_carrousel_02');
            $table->string('description_image_carrousel_02');
            $table->string('image_carrousel_03');
            $table->string('title_image_carrousel_03');
            $table->string('description_image_carrousel_03');
            $table->string('image_carrousel_04');
            $table->string('title_image_carrousel_04');
            $table->string('description_image_carrousel_04');
            $table->string('subtitle_01');
            $table->string('description_subtitle_01');
            $table->string('image_subtitle_01');
            $table->string('subtitle_02');
            $table->string('description_subtitle_02');
            $table->string('image_subtitle_02');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
