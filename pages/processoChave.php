<?php

$arrayProcessoChave = array("[PC01/02/03/04] Creche do Gi","[PC05/06/07] Nascente", "[PC05/06/07] Poente", "[PC05/06/07] Raíz", "[PC05/06/07] Apartamento de Autonomização", "[PC05/06/07] Grupo cessação de Acolhimento", "[PC08] Organização e Gestão das Atividades");

$processoChave;
$idPC;

if (isset($_GET["idPC"])){
    $idPC = $_GET["idPC"];
}

$processoChave = $arrayProcessoChave[$idPC];


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
                        <h1 class="page-header"><?php echo $processoChave?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
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
