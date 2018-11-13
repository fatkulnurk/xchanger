<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeTransaction extends Model
{
    protected $table = 'type_transaction';
    protected $fillable = ['name','description'];
}
