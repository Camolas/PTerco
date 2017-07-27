<h4>Mensagens</h4>
<div class="panel-body">
    <div class="panel-group" id="accordion">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b>De:</b> Remetente <b> <br><br>Assunto:</b> Lorem ipsum <br><br> Data: 17/07/2017 10:45</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse ">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>

                <div class="panel-body">
                    <button type="button" class="btn btn-outline btn-danger">Apagar</button>
                    <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#modalMensagem">Responder</button>

                </div>


            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b>De:</b> Remetente 2<b> <br><br>Assunto:</b> Lorem ipsum dolor <br><br> Data: 16/07/2017 17:23</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse ">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>

                <div class="panel-body">
                    <button type="button" class="btn btn-outline btn-danger">Apagar</button>
                    <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#modalMensagem">Responder</button>

                </div>


            </div>
        </div>







        <!-- MODAL RESPOSTA -->
        <div class="modal fade" id="modalMensagem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Resposta a "titulo mensagem"</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <textarea class="form-control" id="disabledInput" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." disabled></textarea>

                            <div class="form-group">
                                <br>
                                <label>Resposta:</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
                        </form>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>
</div>

<button type="button" class="btn btn-outline btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNovaMensagem">Compor nova mensagem</button>

<!-- MODAL NOVA MENSAGEM -->
<div class="modal fade" id="modalNovaMensagem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="tituloNovaMensagem">Nova Mensagem</h4>
            </div>
            <div class="modal-body">


                <form role="form" method="post">


                    <div class="form-group">
                        <label for="utilizadores">Destinatário (s)</label>
                        <select multiple class="form-control" name="utilizadores" id="utilizadores">
                            <?php

                            for ($i = 1; $i <= count($numeroUtilizadores); $i++) {
                            ?>

                                <option value="<?= $userid ?> (<?= $userfuncao?>)"><?= $userName ?></option>
                                <option value="user2">João Soares (Director)</option>
                                <option value="user3">Maria Silva (Educadora)</option>

                            <?php
                            }
                            ?>

                        </select>
                        <br>
                        <button id="seleccionarTudo" name="seleccionarTudo" value="Seleccionar todos" type="button" class="btn btn-info">Seleccionar todos</button>


                        <script>

                            $('#seleccionarTudo').click(function() {
                                $('#utilizadores option').prop('selected', true);
                            });

                        </script>


                        <br>
                        <br>

                        <label>Assunto:</label>
                        <input class="form-control" placeholder="Assunto">
                        <br>

                        <label>Mensagem:</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>