<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code','productlineID','name','scale','vendor','pdtDescription','qtylnstock','Buyprice','msrp','productlines_id'];

    protected $guarded= [];

    public function Productline()
    {
        return $this->belongsTo(Productline::class.'productlines_id');
    }
}
