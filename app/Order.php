<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['CustomerID','Orderdata','requireddata','shippeddata','status','Comments','coustomer_id'];

    protected $guarded= [];

    public function Coustmer()
    {
        return $this->belongsTo(Coustomer::class.'coustomer_id');
    }

    public function OrderProdcte()
    {
        return $this->hasMany(OrderProdcte::class.'order_id');
    }
}
