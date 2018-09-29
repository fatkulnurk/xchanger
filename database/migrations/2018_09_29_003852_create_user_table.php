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
//        Schema::defaultStringLength(250);

        Schema::defaultStringLength(200);
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email','255');
            $table->unique('email');
            $table->string('phone_number','255')->unique()->nullable();
            $table->string('password');
            $table->dateTime('birthday');
            $table->text('address');
            $table->string('country');
            $table->string('pin','10');
            $table->string('verified')->nullable();
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
