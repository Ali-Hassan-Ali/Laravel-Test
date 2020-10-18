<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['prodctescode','qty','priceeach','order_id'];

    protected $guarded= [];
}
