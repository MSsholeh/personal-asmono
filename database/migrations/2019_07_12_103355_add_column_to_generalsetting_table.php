<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToGeneralsettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generalsetting', function (Blueprint $table) {
           $table->string('facebook',100)->nullable();
           $table->string('instagram',100)->nullable();
           $table->string('twitter',100)->nullable();
           $table->string('phone_number',225)->nullable()->change();
           $table->string('email',225)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('generalsetting', function (Blueprint $table) {
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
            $table->dropColumn('twitter');
            $table->dropColumn('phone_number');
            $table->dropColumn('email');
        });
    }
}
