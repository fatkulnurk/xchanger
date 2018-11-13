<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBank extends Model
{

    protected $table = 'user_bank';
    protected $fillable = ['user_id','payment_title','description','bank_name','account_holder','account_number','currency'];
}
