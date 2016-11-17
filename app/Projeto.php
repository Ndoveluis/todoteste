<?php

namespace App;
use App\Tarefa;
use App\Membro;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
     protected $table='projetos';
    protected $fillable=['nome', 'member_id'];    
	//public $timestamps=false; 

	

	public function tarefas(){
			return $this->hasMany(Tarefas::class);
		}


	

	public function membros(){

		return $this->belongsTo(Membro::class);
	}

}
