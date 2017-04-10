<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $fillable = [
    	'order', 'title'
    ];

    public function machines()
    {
    	return $this->belongsToMany(Machine::class, 'machine_problem');
    }
}
