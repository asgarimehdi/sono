<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //
    public function receptions()
    {
        return $this->hasMany('App\reception');
    }
}
