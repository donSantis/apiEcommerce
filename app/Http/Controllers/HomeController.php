<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


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
        return view('home');
    }

    public function index2()
    {
        $products =  DB::table('product')->get();


        $contenido = 'index';
        $titulo = 'Inicio';

        return view('index', [
            'products' => $products,
            'contenido' => $contenido,
            'titulo' => $titulo,
        ]);
    }
    public function blanco()
    {
        return view('layouts.blanco');
    }

}
