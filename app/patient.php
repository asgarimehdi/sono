<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //protected $table = 'patient';

    public function receptions()
    {
        return $this->hasMany('App\reception','codemelli','codemelli');
    }
}
