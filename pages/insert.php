<?php

$arrayInserir = array("novo jovem", "novo utilizador", "novo evento", "novo contacto", "nova comunicação interna", "novo registo/relatório", "novo fornecedor", "nova entidade parceira", "novo prestador de serviços", "nova formação anual", "novo medicamento", "novo produto");

$inserirNovo;
$idinserir;

if (isset($_GET["idinserir"])) {
    $idinserir = $_GET["idinserir"];
}

$inserirNovo = $arrayInserir[$idinserir];


?>


<?php include "../php/head.php"; ?>

    <script>
        function verify() {
            if (!document.getElementByname('obrigatorio').value.trim().length) { // caso o tamanho seja zero , lança o alert
                alert("Please enter the remarks");
            }
        }
    </script>


<div id="wrapper">
    <!-- Navigation -->
    <?php include "../php/navbar.php" ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inserir <?= $inserirNovo ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulário de inserção
                        </div>


                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post"
                                          action="UserServer.php">
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


                                        <?php

                                        if ($idinserir == 0) { ?>




                                        <div class="form-group">
                                            <label>Numero de processo interno</label>
                                            <input class="form-control" placeholder="Introduzir número do processo" id="id"
                                                   name="id">
                                        </div>

                                        <div class="form-group">
                                            <label>Nome completo</label>
                                            <input class="form-control" placeholder="Introduzir nome" id="nome"
                                                   name="obrigatorio">
                                        </div>

                                        <div class="form-group">

                                            <label>Data de nascimento: </label>
                                            <input type="date" placeholder="Introduzir data" id="dataN"
                                                   name="obrigatorio">
                                        </div>

                                        <div>
                                            <label>Enviar ficheiro</label>
                                            <input type="file">
                                            <br>
                                        </div>

                                        <div class="form-group">
                                            <label>Progenitor</label>
                                            <input class="form-control" placeholder="Introduzir pai biológico" id="pai"
                                                   name="pai">
                                        </div>

                                        <div class="form-group">
                                            <label>Progenitora</label>
                                            <input class="form-control" placeholder="Introduzir mãe biológica" id="mãe"
                                                   name="mãe">
                                        </div>

                                        <div class="form-group">
                                            <label>Irmãos</label>
                                            <input class="form-control" placeholder="Introduzir irmãos" id="irmão1"
                                                   name="irmão1">
                                            <br>
                                            <input class="form-control" placeholder="Introduzir irmãos" id="irmão2"
                                                   name="irmão2">
                                            <br>
                                            <input class="form-control" placeholder="Introduzir irmãos" id="irmão3"
                                                   name="irmão3">
                                            <br>
                                            <input class="form-control" placeholder="Introduzir irmãos" id="irmão4"
                                                   name="irmão4">
                                        </div>

                                        <div class="form-group">
                                            <label>Grupo: </label>
                                        <select>
                                            <option value="gi">Creche do Gi</option>
                                            <option value="poente">Casa Poente</option>
                                            <option value="nascente">Casa Nascente</option>
                                            <option value="raiz">Casa Raiz</option>
                                            <option value="cessacaoAcolhimento">Cessação Acolhimento</option>
                                            <option value="preAdmissao">Pré-Admissão</option>
                                            <option value="apartamentoTrasicao">Apartamento de Transição</option>
                                            <option value="apartDelfimLima">Apartamento Delfim de Lima</option>
                                        </select>
                                            <br>
                                            <br>

                                        <div class="form-group">
                                            <label>Estabelicimento Ensino</label>
                                            <br>
                                            <input class="form-control" placeholder="Introduzir ano" id="ano"
                                                   name="ano">
                                            <input class="form-control" placeholder="Introduzir escola" id="escola"
                                                   name="escola">
                                        </div>

                                        <button type="submit" class="btn btn-primary value="Save" onclick="verify()">Guardar</button>
                                        <button type="reset" class="btn btn-danger">RESET</button>

                                    </form>

                                    <form class="form" method="post" action="travel.php">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="reason">Reason for Visit</label>
                                            <input type="text" name="reason" class="form-control" id="reason">
                                        </div>
                                    </form>


                                    <FORM NAME="myform" ACTION="" METHOD="GET">
                                        Enter something in the box: <BR>
                                        <INPUT TYPE="text" NAME="inputbox" VALUE="">
                                        <P>
                                            <INPUT TYPE="button" NAME="button" Value="Click"
                                                   onClick="testResults(this.form)">
                                    </FORM>


                                    <!--for-->


                                    </TEXTAREA>


                                </div>
                                <?php
                                } else if ($idinserir == 1) { ?>
                                    <div class="form-group">
                                        <label>Nome completo</label>
                                        <input class="form-control" placeholder="Introduzir nome" id="nome" name="nome">
                                    </div>

                                    <div class="form-group">
                                        <label>Função</label>
                                        <input class="form-control" placeholder="Introduzir função do novo utilizador"
                                               id="funcao" name="funcao">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" placeholder="email@exemplo.com" id="email"
                                               name="email" type="email"
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" placeholder="Password" id="password" name="password"
                                               type="password"
                                               pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                    </div>

                                    <div class="form-group">
                                        <label>Repetir password</label>
                                        <input class="form-control" placeholder="Repetir password" id="repetir"
                                               name="repetir" type="password"
                                               pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                    </div>
                                    <?php
                                } else if ($idinserir == 2) {
                                    echo "";
                                } else if ($idinserir == 3) {
                                    echo "";
                                } else if ($idinserir == 4) {
                                    echo "";
                                } else if ($idinserir == 5) {

                                    echo "<div class=\"form-group\">
                                                <label>Enviar ficheiro</label>
                                                <input type=\"file\"></div>";

                                } else if ($idinserir == 6) {
                                    echo "";
                                } else if ($idinserir == 7) {
                                    echo "";
                                } else if ($idinserir == 8) {
                                    echo "";
                                } else if ($idinserir == 9) {
                                    echo "";
                                } else if ($idinserir == 10) {
                                    echo "";
                                } else if ($idinserir == 11) {
                                    echo "";
                                } else {
                                    echo "<script language=\"javascript\">
    window.location.href = \"../pages/404.php\"
</script>";
                                }

                                ?>

                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>


                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

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
