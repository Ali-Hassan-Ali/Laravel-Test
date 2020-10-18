<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coustomer extends Model
{
    protected $fillable = ['salesRepEmployeeNum', 'name', 'lastname', 'firstname', 'phone', 'address1', 'address2', 'address2', 'city', 'stale', 'country', 'CreditLimit', 'PostalCode'];

    protected $guarded= [];
}
