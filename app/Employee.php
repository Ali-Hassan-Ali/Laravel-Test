<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['officecode','reportsto','lastname','firdtname','extension','email','jobtitle','coustomer_id'];

    protected $guarded= [];
}
