<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Projectos;
use App\Tarefas;
use App\MembroTarefas;
use App\Membro;

class Membro extends Model
{
    protected $table='membros';
    //public $timestamps=false;
    protected $fillable=['nome', 'idade', 'sexo','departamento','cargo', 'grauAcademico', 'provincia', 'cidade', 'telefone', 'email'];  

public function scopeSearch ($query,$nome)
{

	return $query->where('nome', 'LIKE', "%$nome%");
}

	public function projectos(){

		return $this->hasMany(Projectos::class);
	}


	public function tarefas(){
		return $this->hasMany(Tarefas::class);
	}


	public function membro_tarefas(){
		return $this->belongsTo(MembroTarefas::class);
	}
}
