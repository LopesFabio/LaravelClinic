<?php

namespace App\Http\Controllers\Agendamento;

use App\Models\Agendamento;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Models\Orcamento;
use App\Models\Convenio;
use App\Http\Requests\AgendamentoRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Vencimento;

class AgendamentoController extends Controller
{
    private $paciente;
    private $orcamento;
    private $convenio;

    public function __construct(Paciente $paciente, Orcamento $orcamento, Convenio $convenio)
    {
        $this->paciente = $paciente;
        $this->orcamento = $orcamento;
        $this->convenio = $convenio;
    }

    public function index()
    {
        $agendamentos = Agendamento::paginate(7);
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function agendar()
    {
        $pacientes = Paciente::where('situacao', 'ativo')->get();
        $orcamentos = Orcamento::get();
        $convenios = Convenio::where('status', 'ativo')->get();
        $dentista = User::where('acl', 'dentista')->get();

        return view('agendamentos.agendar', compact('pacientes', 'orcamentos', 'convenios', 'dentista'));
    }

    public function insert(AgendamentoRequest $request)
    {
        $request->all();

        DB::table('agendamentos')->insert([
            'paciente_id'  => $request->paciente,
            'data'         => $request->data,
            'hora'         => $request->hora,
            'orcamento_id' => $request->orcamento,
            'convenio_id'  => $request->convenio,
            'dentista_id'  => $request->dentista,
            'descricao'    => $request->descricao,
        ]);

        return redirect()->route('agendamento.index');
    }

    public function edit($id)
    {
        $pacientes = Paciente::get();
        $orcamentos = Orcamento::get();
        $convenios = Convenio::get();

        $agendamento = Agendamento::where('id', $id)->get()->first();
        $dentistas = User::where('acl', 'dentista')->get();

        return view('agendamentos.agendar', compact('agendamento', 'pacientes', 'orcamentos', 'convenios', 'dentistas'));
    }

    public function update(AgendamentoRequest $request, $id)
    {
        $request->all();

        DB::table('agendamentos')->where('id', $id)->update([
            'paciente_id'  => $request->paciente,
            'data'         => $request->data,
            'hora'         => $request->hora,
            'orcamento_id' => $request->orcamento,
            'convenio_id'  => $request->convenio,
            'descricao'    => $request->descricao,
        ]);

        return redirect()->route('agendamento.index');
    }

    public function show($id)
    {
        $agendamento = Agendamento::where('id', $id)->get()->first();

        $paciente =  $agendamento->paciente;
        $orcamento = $agendamento->orcamento;
        $convenio =  $agendamento->convenio;
        $dentista = User::where('id', $agendamento->dentista_id)->get()->first();

        if($orcamento)
        {
            if($convenio)
            {
                if($convenio->tipo == 'dinheiro')
                {
                    $valorTotal = $orcamento->valor - $convenio->desconto;
                }
                else
                {
                    $desconto1 = $convenio->desconto/100;
                    $desconto2 = $orcamento->valor * $desconto1;
                    $valorTotal = $orcamento->valor - $desconto2;
                }
            }
            else
            {
                $valorTotal = $orcamento->valor;
            }
        }
        else
        {
            $valorTotal = 0;
        }

        return view('agendamentos.details', compact('agendamento', 'paciente', 'orcamento', 'convenio', 'valorTotal', 'dentista'));
    }

    public function teste()
    {
        $pagos = Vencimento::where('status', 'Vencido')->get();

        $total = $pagos->map(function ($pagos){
            return $pagos->valor;
        })->sum();

        echo "R$ $total";
    }

    public function hoje()
    {
        $hoje = Agendamento::where('data', date('Y-m-d'))->get();

        return view('agendamentos.hoje', compact('hoje'));
    }
}
