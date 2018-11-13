<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender');
            $table->string('email','150')->unique();
            $table->string('phone_number','20')->unique()->nullable();
            $table->string('password');
            $table->dateTime('birthday');
            $table->text('address')->nullable();
            $table->string('country');
            $table->string('pin','7');
            $table->string('status')->nullable();
            $table->string('verified')->nullable();
            $table->string('remember_token')->nullable();
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('user_role');
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
        Schema::dropIfExists('user');
    }
}
