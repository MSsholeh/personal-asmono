<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('message');
            $table->bigInteger('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('commentable_id');
            $table->string('commentable_type');
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->nestedSet();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
