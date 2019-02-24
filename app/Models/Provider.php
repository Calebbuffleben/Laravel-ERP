<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model {

    public $timestamps = false;
    protected $fillable = ['id_company', 'name', 'phone', 'email'];
    public $rules = ['name' => 'required|min:3|max:10', 'phone' => 'required|min:11|max:11'];


    public function companies() {
        return $this->belongsTo('App\User');
    }

}
