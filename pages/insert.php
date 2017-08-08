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
            if (!document.getElementById('obrigatorio').value.trim().length) { // caso o tamanho seja zero , lança o alert
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




                            Formulário de inserção??
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
                                        <a href="http://www.iptjovens.com/NovoJovem.php">Página antiga</a> <br>
                                        <div class="form-group">
                                            <label>Numero de processo interno:</label>
                                            <input class="form-control" placeholder="Introduzir número do processo" id="id"
                                                   name="id">
                                        </div>

                                        <div class="form-group">
                                            <label>Nome completo</label>
                                            <input class="form-control" placeholder="Introduzir nome" id="nome"
                                                   name="nome">
                                        </div>

                                        <div class="form-group">

                                            <label>Data de nascimento</label>
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


                                            <label>Grupo</label>
                                        <select>
                                            <option value="saab">Creche do Gi</option>
                                            <option value="volvo">Casa Poente</option>
                                            <option value="mercedes">Casa Nascente</option>
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
                                            <input class="form-control" placeholder="Introduzir ano" id="ano"
                                                   name="ano">
                                            <input class="form-control" placeholder="Introduzir escola" id="escola"
                                                   name="escola">
                                        </div>

                                        <button type="submit" class="btn btn-primary onclick="verify()">Guardar</button>
                                        <button type="reset" class="btn btn-danger">RESET</button>

                                    </form>
                                    <!--for-->


                                    </TEXTAREA>


                                </div>
                                <?php
                                } else if ($idinserir == 1) { ?>
                                    <div class="form-group">
                                        <p> <a href="http://www.iptjovens.com/NovoUtilizador.php">Página antiga     </a> </p>
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
                                } else if ($idinserir == 2) {?>
                                    <a href="http://www.iptjovens.com/AniversariosEventos.php">Página antiga</a>
                                    <?php
                                    echo "";
                                } else if ($idinserir == 3) {?>
                                    <a href="http://www.iptjovens.com/adicionarContato.php">Página antiga</a>
                                    <?php
                                    echo "";
                                } else if ($idinserir == 4) {?>
                                    <p>Ainda não existe página para a comunicação interna</p>
                                    <!--<a href="./">Ainda não existe página para a comunicação interna</a>-->
                                    <?php
                                    echo "";
                                } else if ($idinserir == 5) {?>
                                    <a href="http://www.iptjovens.com/registoSOS.php">Página registoSOS</a> <br>
                                    <a href="http://www.iptjovens.com/registoAgressoes.php">Página registoAgressoes</a> <br>
                                    <a href="http://www.iptjovens.com/registoSuspensoes.php">Página registpSuspensoes</a> <br>
                                    <a href="http://www.iptjovens.com/registoConsumos.php">Página registoConsumos</a> <br>
                                    <a href="http://www.iptjovens.com/registoDinamica.php">Página registoDinamica</a> <br>
                                    <a href="http://www.iptjovens.com/registoDinamicaGrupo.php">Página registoDinamicaGrupo</a> <br>
                                    <a href="http://www.iptjovens.com/Registo_Fugas.php?Btn=Editar">Página registoFugas</a> <br>
                                    <a href="http://www.iptjovens.com/Registos_noite_fim_de_semana.php">Página registoNoiteFdSemana</a> <br>
                                    <?php
                                    echo "<div class=\"form-group\">
                                                <label>Enviar ficheiro</label>
                                                <input type=\"file\"></div>";

                                } else if ($idinserir == 6) {?>
                                    <a href="http://localhost/teste_recuperacaoBD/listafornecedores.php">Fornecedores</a>
                                    <a href="http://www.iptjovens.com/listafornecedores.php">Lista de Fornecedores</a>
                                    <?php
                                    echo "";
                                } else if ($idinserir == 7) {?>



                                    <?php
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
