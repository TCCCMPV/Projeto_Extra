<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = [
        'valor', 'nome', 'user_id', 'description', 'foto',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
