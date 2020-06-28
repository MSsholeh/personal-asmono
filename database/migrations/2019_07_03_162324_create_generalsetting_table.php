<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalsetting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('about_name',50)->nullable();
            $table->string('about_caption',225)->nullable();
            $table->string('about_photo',225)->nullable();

            $table->string('about_title',225)->nullable();
            $table->text('about_description')->nullable();
            $table->string('about_image',225)->nullable();

            $table->string('email',50)->nullable();
            $table->string('phone_number',15)->nullable();
            $table->string('address',225)->nullable();

            $table->string('website_name',50)->nullable();
            $table->string('website_logo',225)->nullable();
            $table->string('website_favicon',225)->nullable();
            $table->text('keyword')->nullable();
            $table->text('metatext')->nullable();

            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('linkedin',100)->nullable();
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
        Schema::dropIfExists('generalsetting');
    }
}
