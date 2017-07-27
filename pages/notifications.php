<?php include "../php/head.php";?>


<div id="wrapper">
    <!-- Navigation -->
    <?php include "../php/navbar.php"?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Notificações</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a href="#">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Novo comentário
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            4 minutos atrás
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Mensagem enviada
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            10 minutos atrás
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Nova tarefa
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            17/07/2017 09:45
                        </div>
                    </div>
                    </a>
                </div>
                <!-- /.col-lg-4 -->
            </div>
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

    <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>

</body>

</html>
