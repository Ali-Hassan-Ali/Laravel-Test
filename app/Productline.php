<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productline extends Model
{
    protected $fillable = ['descimText','descimHtml','image'];

    protected $guarded= [];

    public function Product()
    {
        return $this->hasMany(Product::class.'productlines_id');
    }
}//end of model
