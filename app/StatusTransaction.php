<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusTransaction extends Model
{
    protected $table = 'status_transaction';
    protected $fillable = ['name','description'];
}
