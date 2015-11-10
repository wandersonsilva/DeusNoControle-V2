<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    protected $fillable = [
        'id',
        'nome',
        'categoria_id'
    ];

}
