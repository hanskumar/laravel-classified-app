<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            
            $table->text('user_data')->comment('json data')->after('remember_token');
            $table->text('avatar')->default('https://addes-data.s3.ap-south-1.amazonaws.com/web-data/user-images/img_avatar.png')->after('city');

            $table->text('address')->after('password');
            $table->string('zip_code')->after('city');
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
            //
            $table->text('user_data')->comment('json data')->after('remember_token');

            $table->text('avatar')->default('https://addes-data.s3.ap-south-1.amazonaws.com/web-data/user-images/img_avatar.png')->after('city');

            $table->text('address')->after('password');
            $table->string('zip_code')->after('city');
        });
    }
}
