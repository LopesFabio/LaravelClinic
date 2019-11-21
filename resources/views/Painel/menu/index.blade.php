<!DOCTYPE html>
<html>
@include('Painel.menu.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('painel.menu.navbartop')
@include('painel.menu.sidebar.sidebarheader')
@include('painel.menu.sidebar.sidebarbody')
<!-- Conteudo -->
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
</div>
{{--/conteudo--}}
@include('painel.menu.footer')
@include('Painel.menu.script')
</body>
</html>
