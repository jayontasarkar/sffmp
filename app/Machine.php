<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
    	'code', 'customer_id', 'remaining_feed', 'temperature', 'last_feeding_time',
    	'last_feeding_qty', 'last_updated', 'active', 'customer_id'
    ];

    protected $dates = [
    	'last_updated'
    ];

    public function problems()
    {
    	return $this->belongsToMany(Machine::class, 'machine_problem');
    }

    public function feeds()
    {
    	return $this->hasMany(Feed::class);
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }
}
