<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'name', 'phone', 'address'
    ];

    public function machines()
    {
    	return $this->hasMany(Machine::class);
    }
}
