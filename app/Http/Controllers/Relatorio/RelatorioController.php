<?php

namespace App\Http\Controllers\Relatorio;

use App\Models\Agendamento;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Relatorio;

class RelatorioController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::where('dentista_id', auth()->user()->id)->where('data', date('Y-m-d'))->get();

        return view('posconsulta.consultas', compact('agendamentos'));
    }

    public function edit($id)
    {
        $consulta = Agendamento::where('id',$id)->get()->first();
        $paciente = Paciente::where('id', $consulta->paciente_id)->get()->first();
        return view('posconsulta.posconsulta', compact('consulta', 'paciente'));
    }

    public function insert(Request $request)
    {
        $request->all();


        DB::table('relatorios')->insert([
            'relatorio' => $request->relatorio,
            'consulta_id' => $request->consulta,
            'data' => date('Y-m-d'),
        ]);

        return redirect()->route('painel.index');
    }

    public function relatorios()
    {
        $relatorios = Relatorio::where('status', NULL)->get();

        return view('relatorios.relatorios', compact('relatorios'));
    }

    public function show($id)
    {
        $relatorio = Relatorio::where('id',$id)->get()->first();
        $consulta = Agendamento::where('id', $relatorio->consulta_id)->get()->first();
        $paciente = Paciente::where('id', $consulta->paciente_id)->get()->first();
        return view('relatorios.finalizar', compact('relatorio', 'consulta', 'paciente'));
    }
}
