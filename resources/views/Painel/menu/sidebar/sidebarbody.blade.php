<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <p style="color: white"><i class="fa fa-user"></i></p>
        </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
            <a href="#" class="d-block">{{auth()->user()->acl}}</a>
        </div>
    </div>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="{{route('painel.index')}}" class="nav-link active">
                <i class="nav-icon fa fa-home"></i>
                <p>Início</p>
            </a>
        </li>
        @if(auth()->user()->acl == 'recepcao' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
        <!-- Pacientes -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-plus"></i>
                <p>
                    Pacientes
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('paciente.cadastro')}}" class="nav-link">
                        <p>Cadastrar Pacientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('paciente.index')}}" class="nav-link">
                        <p>Pacientes Cadastrados</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- /Pacientes -->
        @endif
        @if(auth()->user()->acl == 'rh' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
        <!-- convenios -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-percentage"></i>
                <p>
                    Convênios
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('convenio.cadastro')}}" class="nav-link">
                        <p>Cadastrar Convênios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('convenio.index')}}" class="nav-link">
                        <p>Convênios Ativos</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- /convenios -->
        @endif

        <!--###########3 Recepção #################-->

    @if(auth()->user()->acl == 'recepcao' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
        <!-- agendamento -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-calendar"></i>
                <p>
                    Agendamento
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('agendamento.agendar')}}" class="nav-link">
                        <p>Agendar Consulta</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('agendamento.index')}}" class="nav-link">
                        <p>Consultas</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- \agendamento -->
        @endif

    @if(auth()->user()->acl == 'recepcao' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
        <!-- atendimento -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-desktop"></i>
                <p>
                    Atendimento
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('atendimento.index')}}" class="nav-link">
                        <p>Página Principal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('atendimento.hoje')}}" class="nav-link">
                        <p>Atendimento Diário</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('atendimento.buscar')}}" class="nav-link">
                        <p>Buscar Consulta</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- atendimento -->
        <!-- /recepção -->
        @endif

        @if(auth()->user()->acl == 'rh' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
        <!-- Financeiro -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-dollar-sign"></i>
                <p>
                    Vencimentos
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('vencimento.registrar')}}" class="nav-link">
                        <p>Registrar Vencimento</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('vencimento.index')}}" class="nav-link">
                        <p>Consultar Vencimentos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('vencimento.busca')}}" class="nav-link">
                        <p>Buscar Vencimentos</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- /financeiro -->
        @endif

        @if(auth()->user()->acl == 'dentista' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
            <!-- Dentista -->
        <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class="fa fa-file"></i>
                <p>
                    Orçamentos
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('orcamento.create')}}" class="nav-link">
                        <p>Fazer Orçamentos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('orcamento.index')}}" class="nav-link">
                        <p>Consultar Orçamentos</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-file"></i>
                <p>
                    Pós-Consulta
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('pos.index')}}" class="nav-link">
                        <p>Consultar Relatórios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pos.receita')}}" class="nav-link">
                        <p>Emitir Receita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pos.atestado')}}" class="nav-link">
                        <p>Emitir Atestado</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- /Dentista -->
        @endif
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>