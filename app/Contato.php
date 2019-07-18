<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contato extends Model
{
    public function listaContato()
    {
        return (object) ['nome'=>'Maria', 'tel'=>'43512658'];     
    }
}
