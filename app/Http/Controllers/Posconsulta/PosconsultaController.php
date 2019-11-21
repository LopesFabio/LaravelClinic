<?php

namespace App\Http\Controllers\Posconsulta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use Illuminate\Support\Facades\DB;
use App\Models\Paciente;
use App\Models\Dentista;

class PosconsultaController extends Controller
{
    public function index()
    {
        return view('posconsulta.index');
    }

    public function registrar($id)
    {
        $consulta = Agendamento::where('id', $id)->get()->first();
        dd($consulta);

        //return view('posconsulta.posconsulta', compact('consulta'));
    }

    public function insert(Request $request)
    {
        $request->all();

        DB::table('pos_consultas')->insert([
            'relatorio' => $request->relatorio,
            'consulta_id' => $request->consulta,
        ]);

        return redirect()->route('pos.index');
    }

    public function relatorio()
    {
        $hoje = date('Y-m-d');
        $pacientes = Paciente::where('situacao', 'ativo')->get();
        $consulta = Agendamento::where('data', $hoje)->get();

        return view('posconsulta.relatorioFinal', compact('pacientes', 'consulta'));
    }

    public function receita()
    {
        $pacientes = Paciente::where('situacao', 'ativo')->get();
        $dentistas = Dentista::get();

        return view('posconsulta.receita', compact('pacientes', 'dentistas'));
    }

    public function receitaImprimir(Request $request)
    {
        $request->all();

        $paciente = Paciente::where('id', $request->paciente)->get()->first();
        $dentista = Dentista::where('id', $request->dentista)->get()->first();
        $prescricao = $request->prescricao;

        return view('posconsulta.impressoes.receita', compact('paciente', 'dentista', 'prescricao'));
    }

    public function atestado()
    {
        $pacientes = Paciente::where('situacao', 'ativo')->get();
        $dentistas = Dentista::get();

        return view('posconsulta.atestado', compact('pacientes', 'dentistas'));
    }

    public function atestadoImprimir(Request $request)
    {
        $request->all();
        $paciente = Paciente::where('id', $request->paciente)->get()->first();
        $descricao = $request->descricao;
        $dentista = Dentista::where('id', $request->dentista)->get()->first();

        return view('posconsulta.impressoes.atestado', compact('paciente', 'descricao', 'dentista'));
    }
}
