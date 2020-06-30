<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',225)->nullable();
            $table->string('image',225)->nullable();
            $table->longText('description')->nullable();
            $table->integer('status')->default(0); //0=draf,1=publish
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('article_category')->onDelete('cascade');
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
        Schema::dropIfExists('article');
    }
}
