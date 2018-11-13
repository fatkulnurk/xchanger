<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = ['user_id','amount','amount_get','message','user_bank_id','type_transaction_id','status_transaction_id'];
}
