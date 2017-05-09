<?php

namespace App\Http\Controllers;

use App\Http\Requests\MesaRequest;
use App\Mesa;
use App\Tipo;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index',compact('mesas'));
    }

    public function create()
    {
        $tipos=Tipo::pluck('designacao','id');
        return view('mesas.create',compact('tipos'));
    }

    public function store(MesaRequest $rq)
    {
        $mesa = new Mesa(array (
            "nome" =>$rq->get("nome"),
            "tipo_id" =>$rq->get("tipo_id"),
            "medida" =>$rq->get("medida"),
            "quantidade" => $rq->get("quantidade"),
            "preco" => $rq->get("preco"),
            "foto"=>$rq->file("foto")->getClientOriginalName(),
        ));

        $rq->file("foto")->move( base_path() . '/public/f_mesas' , $rq->file("foto")->getClientOriginalName());

        $mesa->save();
        session()->flash('flash_message', 'Adicionado Com Sucesso');
        return redirect('admin');
    }

    public function show($id)
    {
        $mesa=Mesa::find($id);
        return view('mesas.show',compact('mesa'));
    }

    public function edit($id)
    {
        $mesa=Mesa::find($id);
        return view('mesas.edit',compact('mesa'));
    }

    public function update(MesaRequest $rq, $id)
    {
        $mesa2= array (
            "nome" =>$rq->get("nome"),
            "tipo_id" =>$rq->get("tipo_id"),
            "medida" =>$rq->get("medida"),
            "quantidade" => $rq->get("quantidade"),
            "preco" => $rq->get("preco"),
            "foto" => $rq->get("foto")
        );
        $mesa=Mesa::find($id);
        $mesa->update($mesa2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('mesas');
    }

    public function destroy($id)
    {
        Mesa::find($id)->delete();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('mesas');
    }
}
