<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Apartament extends Model
{
    public function categories() {
        return $this->belongsTo(Type::class, 'id_tip', 'id');
    }
}
