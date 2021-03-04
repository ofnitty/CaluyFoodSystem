<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PharIo\Manifest\Email;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('doc')->nullable();
            $table->string('whatsapp')->nullable();

            $table->string('email')->unique();
            $table->string('password');

            $table->string('deliveryName');
            $table->string('phone');
            $table->string('address');
            $table->float('addressNumber');
            $table->string('addressBlock');
            $table->string('addressDoor');
            $table->string('addressAditional');

            $table->string('country');
            $table->string('state');
            $table->string('city');

            $table->boolean('verified');
            $table->boolean('newsletter');
            $table->boolean('twoFactor');
            $table->boolean('active');

            $table->string('role');
            $table->string('mpw');


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
        Schema::dropIfExists('users');
    }
}
