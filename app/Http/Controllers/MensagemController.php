<?php

namespace App\Http\Controllers;

use App\mensagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMensagens = Mensagem::all();
        return view('mensagem.list',['mensagens' => $listaMensagens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'mensagem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //faço as validações dos campos

        //vetor com as mensagens de erro
        $messages = array(
            'titulo.required' => 'É obrigatório um título para a atividade',
            'texto.required' => 'É obrigatório o texto para a atividade',
            'autor.required' => 'É obrigatório o autor da atividade',
        );

            //vetor com as especificações de validações
            $regras = array(
                'titulo' => 'required|string|max:255',
                'texto' => 'required',
                'autor' => 'required|string',
            );

            //cria o objeto com as regras de validação
            $validador = Validator::make($request->all(), $regras, $messages);

            //executa as validações
            if ($validador->fails()) {
                return redirect('mensagens/create')
                ->withErrors($validador)
                ->withInput($request->all);
            }

            //se passou pelas validações, processa e salva no banco...
            $obj_Mensagens = new Mensagem();
            $obj_Mensagens ->titulo    = $request['titulo'];
            $obj_Mensagens ->texto     = $request['texto'];
            $obj_Mensagens ->autor     = $request['autor'];
            $obj_Mensagens ->save();

            return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagem = mensagem::find($id);
        return view('mensagem.show',['mensagem' => $mensagem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function edit(mensagens $mensagens)
    {
        $obj_mensagem = mensagens::find($id);
        return view('mensagem.edit',['mensagem' => $obj_mensagem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            //faço as validações dos campos
   
           //vetor com as mensagens de erro
           $messages = array(
               'titulo.required' => 'É obrigatório um título para a mensagem',
               'texto.required' => 'É obrigatória um texto para a mensagem',
               'autor.required' => 'É obrigatório um autor para a mensagem',
           );
   
               //vetor com as especificações de validações
               $regras = array(
                   'titulo' => 'required|string|max:255',
                   'texto' => 'required',
                   'autor' => 'required|string',
               );
   
               //cria o objeto com as regras de validação
               $validador = Validator::make($request->all(), $regras, $messages);
   
               //executa as validações
               if ($validador->fails()) {
                   return redirect("mensagens/creat$id/creat")
                   ->withErrors($validador)
                   ->withInput($request->all);
               }
   
               //se passou pelas validações, processa e salva no banco...
               $obj_Mensagens = mensagem::findOrFail($id);
               $obj_Mensagens->title =       $request['titulo'];
               $obj_Mensagens->description = $request['texto'];
               $obj_Mensagens->scheduledto = $request['autor'];
               $obj_Mensagens->save();
   
               return redirect('/mensagens')->with('success', 'Mensagem alterada com sucesso!!');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_Mensagens= Mensagem::findOrFail($id);
        $obj_Mensagens->delete($id);
        return redirect('/mensagens')->with('sucess', 'Mensagem excluída com Sucesso');
    }

    /**
     * Do really Remove the specified resource from storage.?
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $obj_Mensagens= mensagem::find($id);
        return view('mensagem.delete',['mensagem'=> $obj_Mensagens]);
    }
}
