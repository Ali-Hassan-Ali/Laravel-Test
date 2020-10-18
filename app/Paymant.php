<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymant extends Model
{
    protected $fillable = ['chechknum','paymantsdata','amount','coustomer_id'];

    protected $guarded= [];
}
