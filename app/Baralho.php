<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baralho extends Model
{
    protected $table = 'baralho';
    protected $fillable = ['nome', 'descricao'];
}
