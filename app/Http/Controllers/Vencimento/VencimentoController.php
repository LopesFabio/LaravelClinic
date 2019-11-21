<?php

namespace App\Http\Controllers\Vencimento;

use App\Models\Agendamento;
use App\Models\Convenio;
use App\Models\Dentista;
use App\Models\Orcamento;
use App\Models\Paciente;
use App\Models\Vencimento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use function foo\func;

class VencimentoController extends Controller
{
    private $paciente;
    private $orcamento;
    private $convenio;
    private $dentista;

    public function __construct(Paciente $paciente, Orcamento $orcamento, Convenio $convenio, Dentista $dentista)
    {
        $this->paciente = $paciente;
        $this->orcamento = $orcamento;
        $this->convenio = $convenio;
        $this->dentista = $dentista;
    }

    public function index()
    {
        $vencimentos = Vencimento::where('status', 'LIKE', "%enc%")->where('valor', '>', 0)->paginate(10);

        //contador para as contas
        $pagos = count(Vencimento::where('status', 'pago')->get());
        $avencer = count(Vencimento::where('status', 'À Vencer')->get());
        $vencidos = count(Vencimento::where('status', 'Vencido')->get());
        $totalVencimentos = count(Vencimento::where('status', 'LIKE', "%enc%")->get());

        $valorPago = Vencimento::where('status', 'pago')->get();
        $valorApagar = Vencimento::where('status', 'À Vencer')->get();
        $valorVencido = Vencimento::where('status', 'Vencido')->get();

        //SUM de Cada status de vencimento
        $totalPagos = $valorPago->map(function ($valorPago){
            return $valorPago->valor;
        })->sum();

        $totalAvencer = $valorApagar->map(function ($valorApagar){
            return $valorApagar->valor;
        })->sum();

        $totalVencidos =$valorVencido->map(function ($valorVencido){
            return $valorVencido->valor;
        })->sum();

        $totalReceber = $vencimentos->map(function ($vencimentos){
            return $vencimentos->valor;
        })->sum();

        return view('vencimentos.index', compact('vencimentos', 'pagos', 'avencer', 'vencidos', 'totalPagos', 'totalAvencer', 'totalVencidos', 'totalReceber', 'totalVencimentos'));
    }

    public function busca()
    {
        $pacientes = Paciente::where('situacao', 'ativo')->get();
        return view('vencimentos.busca', compact('pacientes'));
    }

    public function atrasos()
    {
        $atrasados = Vencimento::where('status', 'Vencido')->where('valor', '>', 0)->paginate(10);

        return view('vencimentos.status.atrasos', compact('atrasados'));
    }

    public function registro()
    {
        $consultas = Agendamento::get();
        return view('vencimentos.registro', compact('consultas'));
    }

    public function pagos()
    {
        $pagos = Vencimento::where('status', 'pago')->paginate(10);

        return view('vencimentos.status.pagos', compact('pagos'));
    }

    public function avencer()
    {
        $avencer = Vencimento::where('status', 'À Vencer')->where('valor', '>', 0)->get();
        return view('vencimentos.status.avencer', compact('avencer'));
    }

    public function registroInsert(Request $request)
    {
        $request->all();

        $agendamento = Agendamento::where('id', $request->consulta)->get()->first();

        $paciente =  $agendamento->paciente;
        $dentista =  $agendamento->dentista;
        $orcamento = $agendamento->orcamento;
        $convenio =  $agendamento->convenio;

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

        if($valorTotal > 0)
        {
            $valorFinal = $valorTotal/$request->parcelas;
        }
        else
        {
            $valorFinal = 0;
        }


        if($request->valor > 0)
        {
            if ($request->data >= date('Y-m-d'))
            {
                $status = 'À Vencer';
            }
            else
            {
                $status = 'Vencido';
            }
        }
        else
        {
            $status = 'pago';
        }

        if($valorFinal <= 0)
        {
            $dataPago = $request->data;
        }
        else
        {
            $dataPago = NULL;
        }

        for($i = 1; $i <= $request->parcelas; $i++)
        {
            $data = date("Y-m-d ",strtotime(date("Y-m-d", strtotime($request->data)) . " +$i month"));
            DB::table('vencimentos')->insert([
                'agendamento_id'  => $request->consulta,
                'data_vencimento' => $data,
                'valor'           => $valorFinal,
                'status'          => $status,
                'data_pagamento'  => $dataPago,
            ]);
        }

        return redirect()->route('vencimento.index');
    }

}
