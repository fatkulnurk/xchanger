<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * success, fraud, waiting, cancel, failed
     */
    public function up()
    {
        Schema::create('status_transaction', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name',150)->unique();
            $table->text('description');
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
        Schema::dropIfExists('status_transaction');
    }
}
