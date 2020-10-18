<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['code','city','phone','address1','address2','state','country','postalcode','temitory'];

    protected $guarded= [];
}
