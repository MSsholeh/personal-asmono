<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image',255)->nullable();
            $table->string('title',255)->nullable();
            $table->string('year',255)->nullable();
            $table->string('location',255)->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('gallerycategory')->onDelete('cascade');
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
        Schema::dropIfExists('gallery');
    }
}
