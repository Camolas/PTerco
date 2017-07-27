<?php include "../php/head.php";?>


<div id="wrapper">
    <!-- Navigation -->
    <?php include "../php/navbar.php"?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Definições</h1>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Alterar Dados
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">

                                            <div class="form-group">
                                                <label>Nome </label>
                                                <input class="form-control" placeholder="Nome Apelido">
                                            </div>

                                            <fieldset disabled>
                                                <div class="form-group">
                                                    <label for="disabledInput">Email</label>
                                                    <input class="form-control" id="disabledInput" type="text" placeholder="email@email.com" disabled>
                                                </div>
                                            </fieldset>

                                            <div class="form-group">

                                                <label>Fotografia</label>

                                                <img src="logo_ipt.png" alt="User Avatar" class="img-circle" />
                                                <input type="file">
                                            </div>

                                            <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Submeter</button>

                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Alterar Password
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">

                                            <div class="form-group">
                                                <label>Password Atual </label>
                                                <input class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Nova Password </label>
                                                <input class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Repita a nova Password </label>
                                                <input class="form-control">
                                            </div>


                                            <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Submeter</button>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
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
