<?php

$arrayProcessoSuporte = array("PS01_IMP01 - Formulário de Admissão do Colaborador","PS01_IMP02 – Ação Pontual de Formação", "PS01_IMP03 – Plano de Formação", "PS01_IMP04 – Questionário de Avaliação dos Colaboradores", "PS01_IMP05 - Avaliação de Desempenho", "PS01_IMP06 - Declaração de Confidencialidade", "PS01_IMP07 - Avaliação e Auto avaliação dos Voluntários", "PS01_IMP08 - Termo de Adesão", "PS01_IMP09 - Requisição de Material", "PS01_IMP010 - Registo de Receção de Produtos", "PS01_IMP11 - Devolução e Reclamações a fornecedores", "PS01_IMP12 - Avaliação de Fornecedores", "PS01_IMP13 - Avaliação dos Prestadores de Serviços", "PS01_IMP14 - Plano de Manutenção", "PS01_IMP15 - Registo de intervenção em equipamentos e infraestruturas", "PS01_IMP16 - Registo de Formação Individual", "NA - Lista de Fornecedores", "PS02 - Nutrição e Alimentação", "PS03 - Higiene e Segurança", "PS04 - Gestão do SGQ", "NA - Lista de Entidades Parceiras", "NA - Processo individual dos Colaboradores/Estagiários e Voluntários");

$processoSuporte;
$idPS;

if (isset($_GET["idPS"])){
    $idPS = $_GET["idPS"];
}

$processoSuporte = $arrayProcessoSuporte[$idPS];


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
                        <h1 class="page-header"><?php echo $processoSuporte?></h1>
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
