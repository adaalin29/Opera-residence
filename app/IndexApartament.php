<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class IndexApartament extends Model
{
    public function categories() {
        return $this->belongsTo(Type::class, 'id_category', 'id');
    }
}
