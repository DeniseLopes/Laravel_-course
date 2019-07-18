<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contato;


class ContatoController extends Controller
{
    public function index()
    
    {
        $contato = [
            
            (object) ['nome'=>'Maria', 'tel'=>'43512658'],
            (object) ['nome'=>'Pedro', 'tel'=>'43517777']
                    
        ];
        
        $contatoModel = new Contato();
        
        $con = $contatoModel->listaContato();
        dd($con->nome);

        return view('contato.index', compact('contato'));
    }
    
    

    public function criar(Request $req)
    {
       // dd($req->all());
        return "esse vai ser o medoto criar da classe ContatoController";
    } 

    public function editar()
    {
        return "esse vai ser o medoto editar da classe ContatoController";
    } 
}
