<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservaRequest;
use App\Material;
use App\Reserva;
use Session;
use App\Carinho;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function index()
    {
        $reserva = Reserva::all()->where('estado', '=', 'PENDENTE');

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
        $est='PENDENTE';

        if(!Session::has('carinho')){
            $carinho = null;
        }
        $carinhoAntigo = Session::get('carinho');
        $carinho = new Carinho($carinhoAntigo);

        $m_id = $rq->material_id;
        $qtd = $rq->quantidade;
        $prc = $rq->preco;

        foreach ($m_id as $index=>$value){
            foreach ($qtd as $qtdP=>$value)
                foreach ($prc as $prcP=>$value)

            $reserva = new Reserva();
            $reserva->quantidade=$qtd[$qtdP];
            $reserva->preco=$prc[$prcP];
            $reserva->dataFim=$rq->dataFim;
            $reserva->estado=$est;
            $reserva->descricao=$rq->descricao;
            $reserva->material_id=$m_id[$index];
            $reserva->user_id=Auth::user()->id;
        }
        $reserva->save();
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
        $reserva2 = Reserva::all();
        $reserva = Reserva::find($id);
        $reserva->update($reserva2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('indexAdmin');
    }

    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->estado='CONFIRMADO';
        $reserva->update();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('admin');
    }

    public function grafico(){

        $jan = 87;
        $jan_confirmados = 50;

        $reservaP=DB::table('reservas')->where('estado', 'PENDENTE')->get();
        $reservaC=DB::table('reservas')->where('estado', 'CONFIRMADO')->get();
        $reservasP = count($reservaP);
        $reservasC = count($reservaC);

        return response()->json([
          'reservaP' =>  $reservasP,
            'textoP' => 'Pendentes',
            'textoC' => 'Confirmados',
            'reservaC' => $reservasC
        ]);

//        return response()->json([
//            'jan' => $jan,
//            'jan_confirmados' =>$jan_confirmados
//        ]);
    }


//    public function cancelarPedido(ReservaRequest $rq, $id)
//    {
//        $reserva = Reserva::find($id);
//        $reserva->estado = 'CANCELADO';
//
//        $reserva->save();
//        return redirect('indexAdmin');
//    }
}
