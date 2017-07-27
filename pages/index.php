<?php include "../php/head.php";?>

<?php
$query = "SELECT * from datas";
$result = mysqli_query($connection,$query);
while($fetch = mysqli_fetch_row($result)){
    echo "<p>". $fetch[0] . " - " . $fetch[1] . " - " . "</p>";
}
?>

<div id="wrapper">
        <!-- Navigation -->
        <?php include "../php/navbar.php"?>


    <!-- database -->


        <!-- CONTEÚDO -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- inserir por php o nome da página em que estamos -->

                    <h1 class="page-header">Página inicial</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">

                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-rss fa-fw"></i> Feed de notícias
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Atualizar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="logotipoInterno-02.png" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">João Soares</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins atrás | <i>via <a href="https://www.yammer.com/voluntáriosterço-ipt/" target="_blank">Yammer</a></i>
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>

                                <div id="embedded-feed" style="height:800px;width:400px;"></div>
                                <script type="text/javascript" src="https://s0.assets-yammer.com/assets/platform_embed.js"></script>
                                <script type="text/javascript">
                                    yam.connect.embedFeed({
                                        container: "#embedded-feed",
                                        network: "voluntáriosterço-ipt",
                                        feedType: "group",
                                        feedId: "12280278"
                                    });
                                </script>

                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="logotipoInterno-14.png" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Maria Silva</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins atrás
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="logo_ipt.png" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Instituto Profissional do Terço</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 10:36 | <i>via <a href="https://www.facebook.com/ipterco" target="_blank">Facebook</a></i>
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Escrever nova mensagem geral" />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Enviar
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->



                </div>
                <!-- /.col-lg-8 -->


                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notificações
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> Novo Comentário
                                    <span class="pull-right text-muted small"><em>4 minutos atrás</em>
                                    </span>
                                </a>

                                <a href="account.php?msg=1" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Mensagem enviada
                                    <span class="pull-right text-muted small"><em>10 minutos atrás</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Nova Tarefa
                                    <span class="pull-right text-muted small"><em>09:49</em>
                                    </span>
                                </a>

                            </div>
                            <!-- /.list-group -->
                            <a href="notifications.php" class="btn btn-default btn-block">Ver todas as notificações</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Informações úteis
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="MAILTO: ipt.geral@gmail.com" class="list-group-item">
                                    <i class="fa fa-envelope-o fa-fw"></i> Email geral
                                    <span class="pull-right text-muted small">ipt.geral@gmail.com
                                    </span>
                                </a>

                                <a href="#" class="list-group-item">
                                    <i class="fa fa-phone fa-fw"></i> Telefone
                                    <span class="pull-right text-muted small"> (+351) 225 020 161
                                    </span>
                                </a>


                                <div class="text-center">

                                    <a href="https://www.facebook.com/ipterco" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/oter%C3%A7o/" target="_blank" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
