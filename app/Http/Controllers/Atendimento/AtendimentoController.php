<?php

namespace App\Http\Controllers\Atendimento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use App\Models\Paciente;

class AtendimentoController extends Controller
{
    public function index()
    {
        $hoje = date('Y-m-d');
        $totalConsultas = count(Agendamento::where('data', $hoje)->get());

        return view('atendimentos.index', compact('totalConsultas'));
    }

    public function hoje()
    {
        $hoje = date('Y-m-d');

        $consultaDiaria = Agendamento::where('data', $hoje)->get();

        return view('atendimentos.hoje', compact('consultaDiaria'));
    }

    public function mensal()
    {
        $hoje = date('Y-m-');
        $mes =date('-m-d', strtotime($hoje));
        $totalMes = count(Agendamento::where('data', 'LIKE', "%$hoje%")->get());

        $consultaDiaria = Agendamento::where('data', 'LIKE', "%$hoje%")->paginate(10);

        return view('atendimentos.mes', compact('consultaDiaria', 'hoje', 'totalMes'));
    }

    public function buscar()
    {
        $pacientes = Paciente::get();
        return view ('atendimentos.buscar', compact('pacientes'));
    }

    public function buscaCodigo(Request $request)
    {
        $request->all();
        $id = $request->codigo;
        $buscaCodigo = Agendamento::where('id', $id)->get()->first();

        return view('atendimentos.resultado', compact('buscaCodigo'));
    }

    public function buscaPaciente(Request $request)
    {
        $request->all();
        $paciente = $request->paciente;
        $buscaPaciente = Agendamento::where('paciente_id', $paciente)->get();

        return view('atendimentos.resultado', compact('buscaPaciente'));
    }

    public function buscaMes(Request $request)
    {
        $request->all();
        $mes = "$request->ano-$request->mes";
        $buscaMes = Agendamento::where('data', 'LIKE', "%$mes%")->get();

        return view('atendimentos.resultado', compact('buscaMes'));
    }

    public function buscaDia(Request $request)
    {
        $request->all();
        $data = $request->data;
        $buscaDia = Agendamento::where('data', $data)->get();

        return view('atendimentos.resultado', compact('buscaDia'));
    }
}
