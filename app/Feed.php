<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = [
    	'machine_id', 'time', 'duration'
    ];

    public function machine()
    {
    	return $this->belongsTo(Machine::class);
    }
}
