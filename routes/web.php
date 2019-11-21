<?php
//Todos os controllers precisam da rota resource para puxar o ID
/*
 * Rota de Mensagens
 */
Route::get('mensagens', 'Mensagens\MensagensController@index')->name('mensagem.index')->middleware('auth');
Route::resource('mensagem', 'Mensagens\MensagensController');

/*
 * Rotas para Relatórios
 */
Route::get('/relatorios/finalizar', 'Relatorio\RelatorioController@show')->name('relatorio.show')->middleware('auth');
Route::get('/relatorios/hoje', 'Relatorio\RelatorioController@relatorios')->name('relatorio.hoje')->middleware('auth');
Route::post('/consultas/hoje/dentista/salvar', 'Relatorio\RelatorioController@insert')->name('relatorio.insert')->middleware('auth');
Route::get('/consultas/hoje/dentista', 'Relatorio\RelatorioController@index')->name('orcamento.consultas')->middleware('auth');
Route::get('/relatorio/emitir', 'Relatorio\RelatorioController@edit')->name('relatorio.edit')->middleware('auth');
Route::resource('relatorio', 'Relatorio\RelatorioController');

/*
 * Rotas para Relatorios de pos consulta
 */
Route::post('/posconsulta/atestado/imprimir', 'Posconsulta\PosconsultaController@atestadoImprimir')->name('pos.atestado.imprimir')->middleware('auth');
Route::post('/posconsulta/receitas/imprimir', 'Posconsulta\PosconsultaController@receitaImprimir')->name('pos.receita.imprimir')->middleware('auth');
Route::get('/posconsulta/atestado', 'Posconsulta\PosconsultaController@atestado')->name('pos.atestado')->middleware('auth');
Route::get('/posconsulta/receitas', 'Posconsulta\PosconsultaController@receita')->name('pos.receita')->middleware('auth');
Route::post('/posconsulta/relatorios/finalizar/imprimir', 'Posconsulta\PosconsultaController@imprimirRelatorio')->name('pos.imprimir')->middleware('auth');
Route::get('/posconsulta/relatorios/finalizar', 'Posconsulta\PosconsultaController@relatorio')->name('dentista.relatorio')->middleware('auth');
Route::post('/posconsulta/relatorios/registrar/salvar', 'Posconsulta\PosconsultaController@insert')->name('pos.insert')->middleware('auth');
Route::get('/posconsulta/relatorios', 'Posconsulta\PosconsultaController@index')->name('pos.index')->middleware('auth');
Route::resource('posconsulta', 'Posconsulta\PosconsultaController');

/*
 * Rotas para vencimentos
 */
Route::get('/vencimento/status/pagos', 'Vencimento\VencimentoController@pagos')->name('vencimento.pagos')->middleware('auth');
Route::get('/vencimento/status/avencer', 'Vencimento\VencimentoController@avencer')->name('vencimento.avencer')->middleware('auth');
Route::post('/vencimento/registrar/salvar', 'Vencimento\VencimentoController@registroInsert')->name('vencimento.insert')->middleware('auth');
Route::get('/vencimento/registrar', 'Vencimento\VencimentoController@registro')->name('vencimento.registrar')->middleware('auth');
Route::get('/vencimento/atrasos', 'Vencimento\VencimentoController@atrasos')->name('vencimento.atrasos')->middleware('auth');
Route::get('/vencimento/busca', 'Vencimento\VencimentoController@busca')->name('vencimento.busca')->middleware('auth');
Route::get('/vencimento', 'Vencimento\VencimentoController@index')->name('vencimento.index')->middleware('auth');

/*
 * Rotas do resultado da busca por consulta
 */
Route::post('/consultas/busca/resultado/dia', 'Atendimento\AtendimentoController@buscaDia')->name('busca.dia')->middleware('auth');
Route::post('/consultas/busca/resultado/mes', 'Atendimento\AtendimentoController@buscaMes')->name('busca.mes')->middleware('auth');
Route::post('/consultas/busca/resultado/paciente', 'Atendimento\AtendimentoController@buscaPaciente')->name('busca.paciente')->middleware('auth');
Route::post('/consultas/busca/resultado/dentista', 'Atendimento\AtendimentoController@buscaDentista')->name('busca.dentista')->middleware('auth');
Route::post('/consultas/busca/resultado/codigo', 'Atendimento\AtendimentoController@buscaCodigo')->name('busca.codigo')->middleware('auth');

/*
 * Routas de Atendimento
 */
Route::get('/atendimentos/buscar', 'Atendimento\AtendimentoController@buscar')->name('atendimento.buscar')->middleware('auth');
Route::get('/atendimentos/mensal', 'Atendimento\AtendimentoController@mensal')->name('atendimento.mensal')->middleware('auth');
Route::get('/atendimentos/hoje', 'Atendimento\AtendimentoController@hoje')->name('atendimento.hoje')->middleware('auth');
Route::get('/atendimentos', 'Atendimento\AtendimentoController@index')->name('atendimento.index')->middleware('auth');
Route::resource('atendimento', 'Atendimento\AtendimentoController');
/*
 * Rotas de Orçamento
 */
Route::post('/orcamento/editar/salvar', 'Orcamento\OrcamentoController@update')->name('orcamento.update')->middleware('auth');
Route::get('/orcamento/editar', 'Orcamento\OrcamentoController@edit')->name('orcamento.edit')->middleware('auth');
Route::post('/orcamento/salvar', 'Orcamento\OrcamentoController@insert')->name('orcamento.insert')->middleware('auth');
Route::get('/orcamento', 'Orcamento\OrcamentoController@create')->name('orcamento.create')->middleware('auth');
Route::get('/orcamentos', 'Orcamento\OrcamentoController@index')->name('orcamento.index')->middleware('auth');
Route::resource('orcamento', 'Orcamento\OrcamentoController');

/*
 * Rotas de Agendamento
 */
Route::get('/agentamento/hoje', 'Agendamento\AgendamentoController@hoje')->name('agendamento.hoje')->middleware('auth');
Route::post('/agentamento/editar/salvar', 'Agendamento\AgendamentoController@update')->name('agendamento.update')->middleware('auth');
Route::get('/agentamento/editar', 'Agendamento\AgendamentoController@edit')->name('agendamento.edit')->middleware('auth');
Route::get('/agentamento/detalhes', 'Agendamento\AgendamentoController@show')->name('agendamento.show')->middleware('auth');
Route::post('/agendar/salvar', 'Agendamento\AgendamentoController@insert')->name('agendamento.insert')->middleware('auth');
Route::get('/agendar', 'Agendamento\AgendamentoController@agendar')->name('agendamento.agendar')->middleware('auth');
Route::get('/agendamentos', 'Agendamento\AgendamentoController@index')->name('agendamento.index')->middleware('auth');
Route::resource('agendamento', 'Agendamento\AgendamentoController');


/*
 * Rotas de Convenio
 */
Route::get('/convenio/todos', 'Convenio\ConvenioController@todos')->name('convenio.todos')->middleware('auth');
Route::post('/convenio/editar/salvar', 'Convenio\ConvenioController@update')->name('convenio.update')->middleware('auth');
Route::get('/convenio/editar', 'Convenio\ConvenioController@edit')->name('convenio.edit')->middleware('auth');
Route::post('/convenio/cadastro/salvar', 'Convenio\ConvenioController@insert')->name('convenio.insert')->middleware('auth');
Route::get('/convenio/cadastro', 'Convenio\ConvenioController@create')->name('convenio.cadastro')->middleware('auth');
Route::get('/convenio', 'Convenio\ConvenioController@index')->name('convenio.index')->middleware('auth');
Route::resource('convenio', 'Convenio\ConvenioController');

/*
 * Rotas do menu Pacientes
 */
Route::get('/paciente/Consulta', 'Paciente\PacienteController@consultas')->name('paciente.consultas')->middleware('auth');
Route::get('/pacientes/todos', 'Paciente\PacienteController@pacientesTodos')->name('paciente.todos')->middleware('auth');
Route::get('/pacientes/desativados', 'Paciente\PacienteController@desativados')->name('paciente.desativados')->middleware('auth');
Route::post('/pacientes/update', 'Paciente\PacienteController@update')->name('paciente.update')->middleware('auth');
Route::get('/pacientes/editar', 'Paciente\PacienteController@edit')->name('paciente.editar')->middleware('auth');
Route::get('pacientes/detalhes', 'Paciente\PacienteController@show')->name('paciente.show')->middleware('auth');
Route::post('/pacientes/confirm', 'Paciente\PacienteController@store')->name('paciente.confirm')->middleware('auth');
Route::get('/pacientes', 'Paciente\PacienteController@index')->name('paciente.index')->middleware('auth');
Route::get('/pacientes/cadastro', 'Paciente\PacienteController@create')->name('paciente.cadastro')->middleware('auth');
Route::resource('paciente', 'Paciente\PacienteController');

/*
 * view de teste
 */
Route::get('/teste', 'Agendamento\AgendamentoController@teste');

/*
 * Rotas do Painel
 */
Route::get('/painel', 'Painel\PainelController@index')->name('painel.index')->middleware('auth');

Auth::routes();

Route::get('/', 'Painel\PainelController@index')->name('home.index')->middleware('auth');
