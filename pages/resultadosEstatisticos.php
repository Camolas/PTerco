

<?php include "../php/head.php";?>


<div id="wrapper">
    <!-- Navigation -->
    <?php include "../php/navbar.php"?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Resultados Estatísticos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Exemplo gráfico de barras
                        </div>

                        <div class="panel-body">
                            <div id="bar-example"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Exemplo gráfico de linhas
                        </div>
                        <div class="panel-body">
                            <div id="line-example"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>

    Morris.Bar({
        element: 'bar-example',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B']
    });


    Morris.Line({
        element: 'line-example',
        data: [
            { ano: '2008', valor: 20 },
            { ano: '2009', valor: 25 },
            { ano: '2010', valor: 23 },
            { ano: '2011', valor: 19 },
            { ano: '2012', valor: 21 },
            { ano: '2013', valor: 30 }
        ],
        xkey: 'ano',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['valor'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Valor']
    });

</script>

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
