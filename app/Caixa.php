<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
      protected $table='caixas';
    //public $timestamps=false;
    protected $fillable=['email', 'assunto', 'mensagem'];  

            
}
