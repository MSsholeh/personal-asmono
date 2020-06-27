<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image',255)->nullable();
            $table->string('title',255)->nullable();
            $table->string('year',255)->nullable();
            $table->string('location',255)->nullable();
            $table->text('desc')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->enum('status', ['on going', 'finished'])->default('on going');
            $table->foreign('category_id')->references('id')->on('portfoliocategory')->onDelete('cascade');
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
        Schema::dropIfExists('portfolio');
    }
}
