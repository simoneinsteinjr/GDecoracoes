<?php

namespace App\Http\Controllers;

use App\Material;
use Session;
use App\Carinho;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material = Material::all();

        if(!Session::has('carinho')){
            $carinho = null;
        }
        $carinhoAntigo = Session::get('carinho');
        $carinho = new Carinho($carinhoAntigo);
        $total = $carinho->precoTotal;
        return view('index', compact('material', 'carinho', 'total'));
    }
}
