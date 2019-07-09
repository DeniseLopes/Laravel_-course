<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContatoController extends Controller
{
    public function index()
    //["nome"=>"Pedro", "tel"=>"43517777"]
    {
        $contato = [
            (object) ["nome"=>"Maria", "tel"=>"43512658"],
            (object) ["nome"=>"Pedro", "tel"=>"43517777"]
                    
        ];
        return view('contato.index', compact('contato'));
    } 

    public function criar(Request $req)
    {
        dd($req->all());
        return "esse vai ser o medoto criar da classe ContatoController";
    } 

    public function editar()
    {
        return "esse vai ser o medoto editar da classe ContatoController";
    } 
}
