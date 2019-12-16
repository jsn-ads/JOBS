<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos Cliente Atualizar</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/eventosCliente.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-evento-cliente">
                    <form action="" method="post" id="form-evento-cliente">
                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Atualizar Eventos Clientes</a>
                        </div>
                        <div class="session-add-edit">

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <input id="cliente" class="form-control t" type="text" name="cliente" value="<?php echo utf8_encode($dados['cliente']);?>" readonly="true">
                                    </div>   
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <input id="data" class="form-control t" type="date" name="data" value="<?php echo utf8_encode($dados['data_evento']);?>" >
                                    </div>
                                </div>

                            </div>

                            <div class="row">
    
                                <div class="col">
                                    <div class="form-group">
                                        <input id="nome" class="form-control t" type="text" name="nome" placeholder="Nome Evento" value="<?php echo utf8_encode($dados['nome']);?>">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="botton">
                            <input id="evento-cliente-submit" type="submit" class="btn btn-dark btn1" value="Salvar">
                            <a id="btn2"class="btn btn-dark btn1" href="<?php echo BASE_URL?>eventosCliente">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>