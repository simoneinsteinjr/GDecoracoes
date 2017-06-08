<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Material;
use App\Tipo;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $material = Material::all();
        return view('materiais.index',compact('material'));
    }

    public function create()
    {
        $tipos=Tipo::pluck('designacao','id');
        return view('materiais.create',compact('tipos'));
    }

    public function store(MaterialRequest $rq)
    {
        $material = new Material(array (
            "tipo_id" =>$rq->get("tipo_id"),
            "medida" =>$rq->get("medida"),
            "quantidade" => $rq->get("quantidade"),
            "preco" => $rq->get("preco"),
            "foto"=>$rq->file("foto")->getClientOriginalName(),
            "descricao"=>$rq->get("descricao")
        ));

        $rq->file("foto")->move( base_path() . '/public/img' , $rq->file("foto")->getClientOriginalName());

        $material->save();
        session()->flash('flash_message', 'Adicionado Com Sucesso');
        return redirect('admin');
    }

    public function show($id)
    {
        $material=Material::find($id);
        return view('materiais.show',compact('material'));
    }

    public function edit($id)
    {
        $tipos=Tipo::pluck('designacao','id');
        $material=Material::find($id);
        return view('materiais.edit',compact('material','tipos'));
    }

    public function update(MaterialRequest $rq, $id)
    {
        $material2= array (
            "tipo_id" =>$rq->get("tipo_id"),
            "medida" =>$rq->get("medida"),
            "quantidade" => $rq->get("quantidade"),
            "preco" => $rq->get("preco"),
            "foto" => $rq->get("foto"),
            "descricao"=>$rq->get("descricao")
        );
        $material=Material::find($id);
        $material->update($material2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('materiais');
    }

    public function destroy($id)
    {
        Material::find($id)->delete();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('materiais');
    }
}
