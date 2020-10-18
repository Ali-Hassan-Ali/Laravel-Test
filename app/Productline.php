<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productline extends Model
{
    protected $fillable = ['descimText','descimHtml','image'];

    protected $guarded= [];
}//end of model
