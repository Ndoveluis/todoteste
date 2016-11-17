<?php

namespace App;
use App\Membro;
use App\Tarefa;

use Illuminate\Database\Eloquent\Model;

class MembroTarefas extends Model
{
     protected $table='membro_tarefas';
    protected $fillable=['membro_id','tarefa_id'];    
	//public $timestamps=false; 

	public function membros(){
		return $this->hasMany(Membros::class);
	}

	public function tarefas(){
			return $this->hasMany(Tarefas::class);
		}
}
