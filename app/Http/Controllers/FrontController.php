<?php

namespace App\Http\Controllers;

use App\Carinho;
use Illuminate\Http\Request;
use Session;
use App\Material;

class FrontController extends Controller
{
    public function index(){
        $material = Material::all();

        if(!Session::has('carinho')){
            $carinho = null;
        }
        $carinhoAntigo = Session::get('carinho');
        $carinho = new Carinho($carinhoAntigo);
        $total = $carinho->precoTotal;
        return view('index',compact('material', 'carinho', 'total'));
    }

    public function adicionarAoCarinho(Request $request, $id){
        $material = Material::find($id);
        $carinhoAntigo = Session::has('carinho') ? Session::get('carinho') : null;
        $carinho = new Carinho($carinhoAntigo);
        $carinho->adicionar($material, $material->id);

        $request->session()->put('carinho', $carinho);
        return redirect('/');
    }
}
