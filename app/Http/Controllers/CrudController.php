<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TablaDeLibros;

class CrudController extends Controller
{
    public function MostrarLibros(){
        // $dato = User::all();
        // $dato = DB::select(" select * from  ");
        // return view("Crud1")->with("dato", $dato);
        $datos = TablaDeLibros::all();
        return view('Crud1', ['datos' => $datos]);
    }
}
