<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pago;

class logicController extends Controller
{
    public function index(){    
        $pagos = Pago::orderby('id','desc')->get();
        return view('welcome',[
            'pagos' => $pagos
        ]);
    }

    public function guardar(Request $request){
        $p = new Pago($request->all());
        $p->save();
        return redirect()->back();
    }

    public function getUltimoPago(){ // Para a api
        $p = Pago::orderby('id','desc')->first();
        return response()->json([
            'pagos' => $p
        ],200);
    }
}
