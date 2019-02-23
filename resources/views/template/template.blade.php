<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel - <?php echo 'Nome da empresa'; ?></title>        
        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet" />

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="top col-12" style="position: initial;">
                    <div class="top_right"><a href="">Sair</a></div>
                    <div class="top_right">Nome do usuario</div>    			
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="top" style="float: left;">s
                    <div class="top_right"><a href="">Sair</a></div>
                    <div class="top_right">Nome do usuario</div>    
                </div>
                <div class="col-2 leftmenu">
                    <div class="company_name">
                        <?php echo 'Nome da empresa'; ?>
                    </div>

                    <div class="menuarea">
                        <ul>
                            <li><a href="{{ URL('/home')}}">Home</a></li>
                            <li><a href="{{ URL('/permissions')}}">Permissões</a></li>
                            <li><a href="{{ URL('/users')}}">Usuários</a></li>
                            <li><a href="{{ URL('/clients')}}">Clientes</a></li>
                            <li><a href="{{ URL('/providers')}}">Fornecedores</a></li>
                            <li><a href="{{ URL('/inventory')}}">Estoque</a></li>
                            <li><a href="{{ URL('/sales')}}">Vendas</a></li>
                            <li><a href="{{ URL('/purchases')}}">Compras</a></li>
                            <li><a href="{{ URL('/report')}}">Relatórios</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-11 center">

                    <div class="area">
                        @yield('conteudo')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
