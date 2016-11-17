<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

class MembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $membros=Membro::all();
        return view('membro.index',compact('membros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
          $membro = new Membro(array (
            "nome" =>$rq->get("nome"),
            "idade"=>$rq->get("idade"),
            "sexo"=>$rq->get("sexo"),
            "departamento"=>$rq->get("departamento"),
            "cargo"=>$rq->get("cargo"),
            "grauAcademico"=>$rq->get("grauAcademico"),
            "provincia"=>$rq->get("provincia"),
            "cidade"=>$rq->get("cidade"),
            "telefone"=>$rq->get("telefone"),
            "email"=>$rq->get("email"),
        ));

        $membro->save();
          return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $membros=Membro::where('id',$id)->first();
          return view('membro.edit',compact('membros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $membros=new Membro;
        $data = array('nome' =>$request->input('nome'),
            'idade'=>$request->input('idade'),
       'sexo'=>$request ->input('sexo'),
            'departamento'=>$$request->input('departamento'),
            'cargo'=>$request->input('cargo'),
           'grauAcademico'=>$request->input('grauAcademico'),
            'provincia'=>$request->input('provincia'),
            'cidade'=>$request->input('cidade'),
            'telefone'=>$request->input('telefone'),
            'Email'=>$request->input('email'));
        $membros->where('id',$request->input('id'))->update($data);
        return Redirect('membro/');
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Membro::find($id)->delete();
         session()->flash('flash_message', 'Removido Com Sucesso');
         return redirect('membro');
    }
}
