<?php

$arrayStocks = array("Cozinha", "Medicamentos", "Produtos de limpeza");

$stock;
$idStock;

if (isset($_GET["idStock"])){
    $idStock = $_GET["idStock"];
}

$stock = $arrayStocks[$idStock];


?>

<?php include "../php/head.php"; ?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include "../php/navbar.php" ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= $stock ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Stocks disponíveis
                        </div>
                        <!-- /.panel-heading -->


                        <div class="panel-body">
                            <?php

                            if ($idStock == 0){
                                echo "
                                <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <th>Denominação</th>
                                        <th>Fornecedor</th>
                                        <th>Referência</th>
                                        <th>Quantidade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Produto 1</td>
                                        <td>Fornecedor 1</td>
                                        <td>123456789</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Produto 2</td>
                                        <td>Fornecedor 2</td>
                                        <td>987654321</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Produto 3</td>
                                        <td>Fornecedor 3</td>
                                        <td>423156978</td>
                                        <td>2</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                                ";
                            } else if ($idStock == 1) {
                                echo "
                                <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <th>Denominação</th>
                                        <th>Fornecedor</th>
                                        <th>Referência</th>
                                        <th>Quantidade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Produto 1</td>
                                        <td>Fornecedor 1</td>
                                        <td>123456789</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Produto 2</td>
                                        <td>Fornecedor 2</td>
                                        <td>987654321</td>
                                        <td>1</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                                ";
                            } else if ($idStock == 2) {
                                echo "
                                <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <th>Denominação</th>
                                        <th>Fornecedor</th>
                                        <th>Referência</th>
                                        <th>Quantidade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Produto 1</td>
                                        <td>Fornecedor 1</td>
                                        <td>123456789</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Produto 2</td>
                                        <td>Fornecedor 2</td>
                                        <td>987654321</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Produto 3</td>
                                        <td>Fornecedor 3</td>
                                        <td>423156978</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Produto 4</td>
                                        <td>Fornecedor 4</td>
                                        <td>423156978</td>
                                        <td>2</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                                ";
                            }

                            ?>

                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabela em <em>Donut</em>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="donut"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">

                </div>
                <!-- /.col-lg-6 -->
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true

        });
    });

    Morris.Donut({
        element: 'donut',
        data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
        ]
    });

    </script>




</body>

</html>
