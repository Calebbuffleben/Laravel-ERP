<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    public $timestamps = false;
    protected $fillable = ['id_company', 'name', 'email', 'phone', 'stars', 'internal_obs', 'address_zipcode', 'address',
        'address_number', 'address2', 'address_neighb', 'address_city', 'address_citycode', 'address_state', 'address_country'];
    public $rules = ['name' => 'required|min:3|max:100', 'phone' => 'required|max:11', 'stars' => 'required',
        'address_zipcode' => 'required|min:8'];

    public function companies() {
        return $this->belongsTo('App\User');
    }

}
