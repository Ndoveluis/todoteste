<?php

namespace App;
use App\Membro;
use App\MembroTarefas;
use App\Projeto;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
       protected $table='tarefas';
        protected $fillable=['descricao', 'titulo','data_Inscricao', 'data_Entrega','data_real'];    
	   // public $timestamps=false; 

	public function membros(){

		return $this->belongsTo(Membros::class);
	}

	public function membroTarefas(){
		return $this->belongsTo(MembroTarefas::class);
	}

	public function projetos(){
		return $this->belongsTo(Projetos::class);
	}
}

