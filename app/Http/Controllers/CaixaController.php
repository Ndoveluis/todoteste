<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Caixa;

class CaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caixas=Caixa::all();
        return view('Caixa.index',compact('caixas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Caixa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
          $caixas = new Caixa(array (
            "email" =>$rq->get("email"),
            "assunto"=>$rq->get("assunto"),
            "mensagem"=>$rq->get("mensagem"),
           
        ));

        $caixas->save();
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
        $caixas=Caixa::where('id',$id)->first();
          return view('Caixa.edit',compact('caixas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updated(Request $request, $id)
    {
         $caixas = new Caixa;
        $data = array('email' =>$request->input('email'),
            'assunto'=>$request->input('assunto'),
       'mensagem'=>$request ->input('mensagem'));
        $caixas->where('id',$request->input('id'))->update($data);
        return Redirect('caixa');
    }


    public function destroy($id)
    {
         Caixa::find($id)->delete();
         session()->flash('flash_message', 'Removido Com Sucesso');
         return redirect('caixa');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    

