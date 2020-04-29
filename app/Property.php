<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public function cities() {
        return $this->belongsToMany('App\City');
    }

    public function floors() {
        return $this->belongsToMany('App\Floor');
    }
}
