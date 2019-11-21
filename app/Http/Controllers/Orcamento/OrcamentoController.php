<?php

namespace App\Http\Controllers\Orcamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orcamento;
use Illuminate\Support\Facades\DB;
use App\Models\Agendamento;

class OrcamentoController extends Controller
{
    public function index()
    {
        $orcamentos = Orcamento::paginate(5);
        return view('orcamentos.index', compact('orcamentos'));
    }

    public function create()
    {
        $codOrcamento = Orcamento::get()->last();
        return view('orcamentos.create', compact('codOrcamento'));
    }

    public function insert(Request $request)
    {
        $request->all();

        DB::table('orcamentos')->insert([
            'descricao' => $request->descricao,
            'valor'     => $request->valor,
        ]);

        return redirect()->route('relatorio.index');
    }

    public function edit($id)
    {
        $orcamento = Orcamento::where('id', $id)->get()->first();
        return view('orcamentos.create', compact('orcamento'));
    }

    public function update(Request $request, $id)
    {
        $request->all();
        DB::table('orcamentos')->where('id', $id)->update([
            'descricao' => $request->descricao,
            'valor'     => $request->valor,
        ]);

        return redirect()->route('relatorio.index');
    }
}
