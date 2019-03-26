<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reception extends Model
{
    //
    public function service()
    {
        return $this->belongsTo('App\service');
    }
    public  function patient()
    {
        return $this->belongsTo('App\patient','codemelli','codemelli');
    }
}
