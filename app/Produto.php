<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'valor', 'nome', 'created_at', 'updated_at', 'user_id', 'description',
    ];
}
