<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProdcte extends Model
{
    protected $fillable = ['prodctescode','qty','priceeach','order_id'];

    protected $guarded= [];

    public function order()
    {
        return $this->belongsTo(Order::class.'order_id');
    }
}
