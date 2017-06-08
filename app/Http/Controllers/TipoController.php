<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoRequest;
use App\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        $tipo = Tipo::all();
        return view('tipos.index',compact('tipo'));
    }

    public function create()
    {
        return view('tipos.create');
    }

    public function store(TipoRequest $rq)
    {
        $tipo = new Tipo(array (
            "designacao" =>$rq->get("designacao"),
            "descricao"=>$rq->get("descricao")
        ));

        $tipo->save();
        session()->flash('flash_message', 'Adicionado Com Sucesso');
        return redirect('admin');
    }

    public function show($id)
    {
        $tipo = Tipo::find($id);
        return view('tipos.show',compact('tipo'));
    }

    public function edit($id)
    {
        $tipo = Tipo::find($id);
        return view('tipos.edit',compact('tipo'));
    }

    public function update(TipoRequest $rq, $id)
    {
        $tipo2= array (
            "designacao" =>$rq->get("designacao"),
            "descricao"=>$rq->get("descricao")
        );
        $tipo=Tipo::find($id);
        $tipo->update($tipo2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('tipos');
    }

    public function destroy($id)
    {
        Tipo::find($id)->delete();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('tipos');
    }
}
