<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    public $timestamps = false;
    
    public function companies() {
        return $this->belongsTo('App\User');
    }
}
