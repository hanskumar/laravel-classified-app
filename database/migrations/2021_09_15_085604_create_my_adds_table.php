<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_adds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('category_name');
            $table->string('title');
            $table->text('description');
            $table->string('ad_type');
            $table->string('price');
            $table->text('images');
            $table->string('negotiate')->comment('Yes,No')->default('No');
            $table->string('phone');
            $table->string('hide_phone')->comment('Yes,No')->default('No');
            $table->string('city');
            $table->text('address');
            $table->text('tags');
            $table->string('ad_visibility_type');
            $table->string('expire_date');
            $table->string('date');
            $table->string('status')->default('Active');
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
        Schema::dropIfExists('my_adds');
    }
}
