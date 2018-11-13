<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->float('amount','80','2');
            $table->float('amount_get','80','2');
            $table->text('message')->nullable();
            $table->unsignedInteger('currency_id');
            $table->foreign('currency_id')
                ->references('id')
                ->on('currency');
            $table->unsignedInteger('user_bank_id');
            $table->foreign('user_bank_id')
                ->references('id')
                ->on('user_bank');
            $table->unsignedInteger('type_transaction_id');
            $table->foreign('type_transaction_id')
                ->references('id')
                ->on('type_transaction');
            $table->unsignedInteger('status_transaction_id');
            $table->foreign('status_transaction_id')
                ->references('id')
                ->on('status_transaction');
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
        Schema::dropIfExists('transaction');
    }
}
