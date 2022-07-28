<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneBookDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_book_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 50);
            $table->string('phone_number_one', 50);
            $table->string('phone_number_two', 50);
            $table->string('name', 50);
            $table->string('email', 50);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_book_details');
    }
}
