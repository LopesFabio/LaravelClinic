<?php

namespace App\Http\Controllers\Convenio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ConvenioRequest;
use App\Models\Convenio;

class ConvenioController extends Controller
{
    public function index()
    {
        $convenios = Convenio::where('status', 'ativo')->paginate(5);

        return view('convenios.index', compact('convenios'));
    }

    public function create(Request $request)
    {

        $botao = 'Cadastrar';

        return view('convenios.cadastro', compact( 'botao'));
    }

    public function insert(ConvenioRequest $request)
    {
        $request->all();
        DB::table('convenios')->insert([
            'nome'     => $request->nome,
            'desconto' => $request->desconto,
            'tipo'     => $request->tipo,
            'status'   => 'ativo',
        ]);

        return redirect()->route('convenio.cadastro');
    }

    public function edit($id)
    {
        $convenios = Convenio::where('id', $id)->get()->first();
        $botao = 'Editar';

        return view('convenios.cadastro', compact('convenios', 'botao'));
    }

    public function update(ConvenioRequest $request, $id)
    {
        $request->all();

        DB::table('convenios')->where('id', $id)->update([
            'nome'     => $request->nome,
            'desconto' => $request->desconto,
            'tipo'     => $request->tipo,
            'status'   => $request->status,
        ]);

        return redirect()->route('convenio.index');
    }

    public function todos()
    {
        $convenios = Convenio::paginate(5);

        return view('convenios.todos', compact('convenios'));
    }
}
