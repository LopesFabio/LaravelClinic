<?php

namespace App\Http\Controllers\Paciente;

use App\Models\Agendamento;
use http\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Paciente;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class PacienteController extends Controller
{
    private $paciente;

    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    public function index()
    {
        $pacientes = $this->paciente->where('situacao', 'ativo')->paginate(5);
        return view('pacientes.index', compact('pacientes'));
    }

    public function create() //Chama o form de cadastro de paciente
    {
        $botao = 'Cadastrar';
        return view('pacientes.cadastro', compact('botao'));
    }

    public function store(PacienteRequest $request) //Insere os dados no BD
    {
        $dataForm = $request->all();

        DB::table('pacientes')->insert([
            'nome'          => $request->nome,
            'nascimento'    => $request->nascimento,
            'cpf'           => $request->cpf,
            'rg'            => $request->rg,
            'rne'           => $request->rne,
            'estado_civil'  => $request->estadocivil,
            'sexo'          => $request->sexo,
            'nacionalidade' => $request->nacionalidade,
            'endereco'      => $request->endereco,
            'numero'        => $request->numero,
            'bairro'        => $request->bairro,
            'cep'           => $request->cep,
            'cidade'        => $request->cidade,
            'estado'        => $request->estado,
            'telefone1'     => $request->telefone1,
            'email'         => $request->email,
            'telefone2'     => $request->telefone2,
            'situacao'      => $request->situacao,
        ]);

        return redirect()->route('paciente.cadastro');

    }

    public function show($id) //Mostra os Dados
    {
        $paciente = Paciente::where('id', $id)->get()->first();

        $hoje = date('Y-m-d');

        $consultasFeitas = count(Agendamento::where('paciente_id', $id)->where('data', '<', $hoje)->get());
        $consultasAgendadas = count(Agendamento::where('paciente_id', $id)->where('data', '>', $hoje)->get());


        return view('pacientes.detalhes', compact('paciente', 'consultasFeitas', 'consultasAgendadas'));
    }

    public function edit($id) //Mostra os Dados antes de Editar
    {
        $botao = 'Editar';
        $paciente = Paciente::where('id', $id)->get()->first();

        return view('pacientes.cadastro', compact('paciente', 'botao'));
    }

    public function update(PacienteRequest $request, $id) //Edita os dados do BD
    {
        $paciente = $request->all();
        DB::table('pacientes')->where('id', $id)->update([
            'nome'          => $request->nome,
            'nascimento'    => $request->nascimento,
            'cpf'           => $request->cpf,
            'rg'            => $request->rg,
            'rne'           => $request->rne,
            'estado_civil'  => $request->estadocivil,
            'sexo'          => $request->sexo,
            'nacionalidade' => $request->nacionalidade,
            'endereco'      => $request->endereco,
            'numero'        => $request->numero,
            'bairro'        => $request->bairro,
            'cep'           => $request->cep,
            'cidade'        => $request->cidade,
            'estado'        => $request->estado,
            'telefone1'     => $request->telefone1,
            'email'         => $request->email,
            'telefone2'     => $request->telefone2,
            'situacao'      => $request->situacao,
        ]);

        return redirect()->route('paciente.index');
    }

    public function destroy($id) //Apaga os dados no BD
    {
        //
    }

    public function desativados()
    {
        $pacientes = $this->paciente->where('situacao', 'desativado')->paginate(5);

        return view('pacientes.desativados', compact('pacientes'));
    }

    public function pacientesTodos()
    {
        $pacientes = $this->paciente->paginate(5);

        return view('pacientes.TodosPacientes', compact('pacientes'));
    }

    public function consultas($id)
    {
        $paciente = Paciente::where('id', $id)->get()->first();
        $consulta = Agendamento::where('paciente_id', $id)->get();
        return view('pacientes.consultas', compact('paciente', 'consulta'));
    }
}
