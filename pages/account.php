<?php

    if (isset($_GET["msg"])){
        $msg = $_GET["msg"];
        $prf = 0;
    } else {
        $msg = 0;
        $prf = 1;
    }

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
                    <h1 class="page-header">Área Pessoal</h1>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">


                                    <li <?php if ($prf == 1){ echo "class='active'";}?>><a href="#profile" data-toggle="tab">Perfil</a>
                                    </li>
                                    <li <?php if ($msg == 1){ echo "class='active'"; }?>><a href="#messages" data-toggle="tab">Mensagens</a>
                                    </li>
                                    <li><a href="settings.php" >Definições</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">



                                    <div class="tab-pane fade <?php if ($prf == 1){ echo "in active";}?>" id="profile">

                                        <?php include "../php/perfil.php" ?>

                                    </div>


                                    <div class="tab-pane fade <?php if ($msg == 1){ echo "in active";}?>" id="messages">
                                        <?php include "../php/mensagens.php"?>

                                    </div>

                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
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
