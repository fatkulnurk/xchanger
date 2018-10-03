<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    protected $table = 'currency';
    protected $fillable = ['currency_name','payment_name','stock','price'];
}
