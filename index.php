<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/custom.css"/>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/custom.js"></script>

    <title>TCD - Compiladores</title>
</head>
<body>
<div class="container-fluid">
    <label class="navbar-brand" href="#">TCD - Construção de Compiladores / Projeto B - Compiladores</label>
</div>
<div class="row">
    <div class="col-sm-12 program-title text-center">
        Alex da Costa Oliveira - Pedro Luiz Salgado - Raphael Ramos de Lima
    </div>
</div>
<div class="container-fluid main-container">

    <div class="row">

        <form data-form="code" action="app/request.php" method="post" role="form">
            <div class="col-sm-12" id="resize">
                <div data-panel="editor" class="panel panel-default panel-editor">
                    <div class="panel-heading">
                        <h3 class="panel-title">LPS1 (Linguagem de Programação Simples 1)</h3>
                    </div>
                    <div class="panel-body">
                            <textarea id="code" title="Editor" name="code" data-panel-textarea="editor"
                                      class="box-sizing-border"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="compile-button"></label>
        <div class="col-md-4 text-center">
            <button id="compile" name="compile-button" class="btn btn-primary btn-lg btn-block">Compilar</button>
        </div>
    </div>
    <div class="row" style="margin-top: 100px">
        <!-- Console-->
        <div class="col-sm-12" id="resize">
            <div data-panel="console" class="panel panel-default panel-console">
                <div class="panel-heading">
                    <h3 class="panel-title">Console</h3>
                </div>
                <div data-panel-body="console" class="panel-body">
                    >
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>