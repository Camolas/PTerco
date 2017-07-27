<?php

$arrayInserir = array("novo jovem","novo utilizador", "novo evento", "novo contacto", "nova comunicação interna", "novo registo/relatório", "novo fornecedor", "nova entidade parceira", "novo prestador de serviços", "nova formação anual", "novo medicamento", "novo produto");

$arrayProcessoChave = array("[PC01/02/03/04] Creche do Gi","[PC05/06/07] Nascente", "[PC05/06/07] Poente", "[PC05/06/07] Raíz", "[PC05/06/07] Apartamento de Autonomização", "[PC05/06/07] Grupo cessação de Acolhimento", "[PC08] Organização e Gestão das Atividades");

$arrayPedidosJustificacoes = array("Pedido de dias", "Justificação de faltas", "Marcação de férias", "Relatórios de estragos", "Comunicações/Pedidos urgentes");

$arrayPS01 = array("PS01_IMP01 - Formulário de Admissão do Colaborador","PS01_IMP02 – Ação Pontual de Formação", "PS01_IMP03 – Plano de Formação", "PS01_IMP04 – Questionário de Avaliação dos Colaboradores", "PS01_IMP05 - Avaliação de Desempenho", "PS01_IMP06 - Declaração de Confidencialidade", "PS01_IMP07 - Avaliação e Auto avaliação dos Voluntários", "PS01_IMP08 - Termo de Adesão", "PS01_IMP09 - Requisição de Material", "PS01_IMP010 - Registo de Receção de Produtos", "PS01_IMP11 - Devolução e Reclamações a fornecedores", "PS01_IMP12 - Avaliação de Fornecedores", "PS01_IMP13 - Avaliação dos Prestadores de Serviços", "PS01_IMP14 - Plano de Manutenção", "PS01_IMP15 - Registo de intervenção em equipamentos e infraestruturas", "PS01_IMP16 - Registo de Formação Individual", "NA - Lista de Fornecedores");

$inserir;
$PC;
$pedidosJustificacoes;
$processoSuporte01;

?>


<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    <!-- navbar-header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Instituto Profissional do Terço</a>
    </div>
    <!-- /.navbar-header -->


    <!-- navbar-topo -->
    <ul class="nav navbar-top-links navbar-right">

        <!-- dropdown-messages -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>João Soares</strong>
                            <span class="pull-right text-muted">
                                        <em>Hoje</em>
                                    </span>
                        </div>
                        <div>Mensagem...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>Maria Silva</strong>
                            <span class="pull-right text-muted">
                                        <em>Ontem</em>
                                    </span>
                        </div>
                        <div>Mensagem...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="account.php?msg=1">
                        <strong>Ler todas as mensagens</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <!-- /.dropdown-messages -->

        <!-- dropdown-notificacoes -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> Novo Comentário
                            <span class="pull-right text-muted small">4 minutos atrás</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>

                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Mensagem enviada
                            <span class="pull-right text-muted small">10 minutos atrás</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> Nova Tarefa
                            <span class="pull-right text-muted small">09:49</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>

                <li>
                    <a class="text-center" href="notifications.php">
                        <strong>Ver todas as notificações</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <!-- /.dropdown-notificacoes -->

        <!-- /.dropdown-user -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="account.php"><i class="fa fa-user fa-fw"></i> Área pessoal</a>
                </li>
                <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Definições</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>

        </li>
        <!-- /.dropdown-user -->

    </ul>
    <!-- ./ navbar-topo -->



    <!-- MENU PRINCIPAL -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <!-- MENU -->
            <ul class="nav" id="side-menu">

                <!-- PESQUISAR -->
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Pesquisar">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                        </span>
                    </div>
                </li>
                <!-- ./ PESQUISAR -->

                <!-- HOME -->
                <li>
                    <a href="index.php"><i class="fa fa-home fa-fw"></i> Página inicial</a>
                </li>
                <!-- ./ HOME -->

                <!-- PROCESSOS CHAVE -->
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> PC - Processos Chave<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <?php for ($x=0; $x<count($arrayProcessoChave); $x++){

                            $PC = $arrayProcessoChave[$x];

                            ?>

                            <li>
                                <a href="processoChave.php?idPC=<?= $x?>"><?= $PC?></a>
                            </li>

                            <?php
                        }
                        ?>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <!-- ./ PROCESSOS CHAVE-->

                <!-- PROCESSOS DE SUPORTE -->
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> PS - Processos de Suporte<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="#">[PS01] Gestão de Recursos e Aprovisionamentos <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">

                                <?php for ($z=0; $z<count($arrayPS01); $z++){

                                    $processoSuporte01 = $arrayPS01[$z];

                                    ?>

                                    <li>
                                        <a href="processoSuporte.php?idPS=<?= $z?>"><?= $processoSuporte01?></a>
                                    </li>

                                    <?php
                                }
                                ?>


                            </ul>
                            <!-- /.nav-third-level -->
                        </li>

                        <li>
                            <a href="processoSuporte.php?idPS=17">[PS02] Nutrição e Alimentação</a>
                        </li>
                        <li>
                            <a href="processoSuporte.php?idPS=18">[PS03] Higiene e Segurança</a>
                        </li>
                        <li>
                            <a href="processoSuporte.php?idPS=19">[PS04] Gestão do SGQ</a>
                        </li>

                        <li>
                            <a href="#">[NA] Protocolos <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="processoSuporte.php?idPS=20">Lista de Entidades Parceiras</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="#">[NA] Colaboradores/Estagiários e Voluntários <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="processoSuporte.php?idPS=21">Processo individual dos Colaboradores/Estagiários e Voluntários</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <!-- ./ PROCESSOS DE SUPORTE -->

                <!-- INSERIR NOVO X -->
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Inserir<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">

                        <?php for ($i=0; $i<count($arrayInserir); $i++){

                            $inserir = $arrayInserir[$i];

                        ?>

                            <li>
                                <a href="insert.php?idinserir=<?= $i?>"><?= $inserir?></a>
                            </li>

                        <?php
                        }
                        ?>

                    </ul>
                </li>
                <!-- .( INSERIR NOVO -->

                <!-- STOCKS -->
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Stocks<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../pages/stocks.php?idStock=0">Cozinha</a>
                        </li>
                        <li>
                            <a href="../pages/stocks.php?idStock=1">Medicamentos</a>
                        </li>
                        <li>
                            <a href="../pages/stocks.php?idStock=2">Produtos de limpeza</a>
                        </li>
                    </ul>
                </li>
                <!-- ./ STOCKS -->

                <!-- PEDIDOS E JUSTIFICAÇÕES -->
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i>Pedidos e Justificações<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">

                        <?php for ($y=0; $y<count($arrayPedidosJustificacoes); $y++){

                            $pedidosJustificacoes = $arrayPedidosJustificacoes[$y];

                            ?>

                            <li>
                                <a href="pedidosjustificacoes.php?idPedido=<?= $y?>"><?= $pedidosJustificacoes?></a>
                            </li>

                            <?php
                        }
                        ?>

                    </ul>
                </li>
                <!-- ./ PEDIDOS E JUSTIFICAÇÕES -->

                <!-- GERAL -->
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Geral<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="settings.php">Definições</a>
                        </li>
                        <li>
                            <a href="dadosJovem.php">Consulta de dados do Jovem</a>
                        </li>
                        <li>
                            <a href="resultadosEstatisticos.php">Resultados estatísticos</a>
                        </li>
                    </ul>
                </li>
                <!-- ./ GERAL -->


            </ul>
            <!-- ./ MENU -->
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- ./ MENU PRINCIPAL -->

</nav>