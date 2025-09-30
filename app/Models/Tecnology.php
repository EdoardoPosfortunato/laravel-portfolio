<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{
        public function portfolios(){

        return $this->belongsToMany(Portfolio::class);

    }
}
