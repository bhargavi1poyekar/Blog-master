<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
        schema::table('users',function($table){
            $table->string('username')->nullable();
            $table->string('profile_pic')->default('default_profile.png');
            $table->integer('contact_number')->unsigned()->nullable();
            $table->string('bio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('profile_pic');
            $table->dropColumn('contact_number');
            $table->dropColumn('bio');
        
        });
    }
}
