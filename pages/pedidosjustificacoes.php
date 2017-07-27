<?php

$arrayPedidosJustificacoes = array("Pedido de dias", "Justificação de faltas", "Marcação de férias", "Relatórios de estragos", "Comunicações/Pedidos urgentes");

$pedidoJustificacao;
$idPedido;

if (isset($_GET["idPedido"])){
    $idPedido = $_GET["idPedido"];
}

$pedidoJustificacao = $arrayPedidosJustificacoes[$idPedido];


?>


<?php include "../php/head.php";?>


<div id="wrapper">
    <!-- Navigation -->
    <?php include "../php/navbar.php"?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?= $pedidoJustificacao?></h1>
                    </div>


                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                    <!--
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            Aviso que tudo correu bem. <a href="#" class="alert-link">Hiperligação (se necessário)</a>.
                                        </div>

                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            Aviso que falta algo mas que foi submetido. <a href="#" class="alert-link">Hiperligação (se necessário)</a>.
                                        </div>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            Aviso que algo correu mal e nada foi submetido. <a href="#" class="alert-link">Hiperligação (se necessário)</a>.
                                        </div>
                                        -->


                                    <button type="submit" class="btn btn-primary">ENVIAR </button>
                                    <button type="reset" class="btn btn-danger">RESET</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>




                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
