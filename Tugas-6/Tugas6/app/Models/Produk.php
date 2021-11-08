<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
