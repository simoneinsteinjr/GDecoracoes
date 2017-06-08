<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservaRequest;
use App\Material;
use App\Reserva;
use Session;
use App\Carinho;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reserva = Reserva::all();

        if(!Session::has('carinho')){
            $carinho = null;
        }
        $carinhoAntigo = Session::get('carinho');
        $carinho = new Carinho($carinhoAntigo);
        $total = $carinho->precoTotal;
        return view('reservas.index',compact('reserva', 'carinho', 'total'));
    }

    public function create(){

        if(!Session::has('carinho')){
            $carinho = null;
        }
        $carinhoAntigo = Session::get('carinho');
        $carinho = new Carinho($carinhoAntigo);
        $total = $carinho->precoTotal;
        return view('reservas.create',compact('reserva', 'carinho', 'total'));
    }

    public function store(ReservaRequest $rq)
    {
        $est='Pendente';

        if(!Session::has('carinho')){
            $carinho = null;
        }
        $carinhoAntigo = Session::get('carinho');
        $carinho = new Carinho($carinhoAntigo);

        $m_id = $rq->material_id;
        $qtd = $rq->quantidade;
//        $precoP = $rq->precoTotal;

        foreach ($m_id as $index=>$value){
            foreach ($qtd as $qtdP=>$value)

            $reserva = new Reserva();
            $reserva->user_id=Auth::user()->id;
            $reserva->quantidade=$qtd[$qtdP];
            $reserva->precoTotal=$carinho->precoTotal;
            $reserva->dataFim=$rq->dataFim;
            $reserva->estado=$est;
            $reserva->material_id=$m_id[$index];
            $reserva->save();
        }

//        $reserva = new Reserva(array (
//            "user_id"=>$user->id,
//            "material_id"=>$rq->material_id,
//            "quantidade" =>$carinho->quantidadeTotal,
//            "precoTotal"=>("$carinho->precoTotal"),
////            "dataInicio" =>$rq->get("dataInicio"),
//            "dataFim"=>$rq->get("dataFim"),
//            "estado"=>$est
//        ));
//
//        $reserva->save();
        session()->flash('flash_message', 'Enviado Com Sucesso');
        return redirect('/');
    }

    public function edit($id)
    {
        $reserva = Reserva::find($id);
        return view('reservas.edit',compact('reserva'));
    }

    public function update(ReservaRequest $rq, $id)
    {
        $reserva2= array (
            "quantidade" =>$rq->get("quantidade"),
            "preco"=>$rq->get("preco"),
            "precoTotal"=>$rq->get("precoTotal"),
            "dataInicio"=>$rq->get("dataInicio"),
            "dataFim"=>$rq->get("dataFim"),
        );
        $reserva = Reserva::find($id);
        $reserva->update($reserva2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('indexAdmin');
    }

    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->estado='Diferido';
        $reserva->update();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('indexAdmin');
    }
}
