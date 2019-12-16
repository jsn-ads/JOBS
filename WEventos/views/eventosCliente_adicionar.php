<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos Cliente Adicionar</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/eventosCliente.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-evento-cliente">
                    <form action="" method="post" id="form-evento-cliente">
                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Adicionar Eventos Clientes</a>
                        </div>
                        <div class="session-add-edit">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select id="cliente" class="form-control" name="cliente">
                                            <option value="">Cliente SELECT</option>
                                            <?php foreach($clientes as $cliente):?>
                                                <option value="<?php echo ($cliente['id']);?>"><?php echo utf8_decode($cliente['nome']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-3">
                                    <div class="form-group">
                                        <input id="data" class="form-control" type="date" name="data">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="nome" class="form-control t" type="text" name="nome" placeholder="Nome Evento">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="botton">
                            <input id="evento-cliente-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a id="btn2"class="btn btn-outline-dark btn1" href="<?php echo BASE_URL?>eventosCliente">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>