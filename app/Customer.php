<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['user_id','name', 'email', 'private_user_name', 'address', 'ssn', 'stripe_scret_key', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;
}
