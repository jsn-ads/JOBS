<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evento Cliente Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/eventosCliente.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-evento-cliente">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>eventosCliente/add" class="btn btn-outline-dark">Adicionar Eventos Cliente</a>
                    </div>
            
                    <?php foreach($clientes as $cliente): ?>
                    <div class="session">
                        <div id="accordion">
                            <div class="card">

                                <div class="card-header">

                                    <button  class="btn  btn-outline-warning btn-accordion" data-toggle="collapse" data-target="#c<?php echo $cliente['id'];?>" aria-controls="c<?php echo $cliente['id'];?>">
                                        <div class="td">
                                            <div class="campo">
                                                <div class="campo-1">
                                                    <?php echo utf8_encode($cliente['nome']);?>
                                                </div>
                                                <div class="campo-2">
                                                    <?php echo utf8_encode($cliente['cpf']);?>
                                                </div>
                                                <div class="campo-2">
                                                    <?php echo utf8_encode($cliente['cnpj']);?>
                                                </div>
                                            </div>
                                        </div>
                                    </button>

                                </div>
                                <div id="c<?php echo $cliente['id'];?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-acccordion">
                                            <div class="table-head">
                                                <div class="table-th-2">Data</div>
                                                <div class="table-th-1">Evento</div>
                                            </div>
                                            <?php foreach ($eventos as $evento): ?>
                                                <?php if($cliente['id'] == $evento['idcliente']):?>
            
                                                    <div class="table-body">
                                                        <div class="table-td-2"><?php echo $evento['data_evento'];?></div>
                                                        <div class="table-td-1"><?php echo utf8_encode($evento['nome']);?></div>
                                                        <div class="table-tda">
                                                            <a class="btn btn-outline-warning" href="<?php echo BASE_URL;?>eventosCliente/edit/<?php echo $evento['id']?>">Editar</a>
                                                        </div>
                                                        <div class="table-tde">
                                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>eventosCliente/del/<?php echo $evento['id']?>">Excluir</a>
                                                        </div>
                                                    </div>

                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                    <div class="botton">
                        <ul class="pagination">
                            <?php for ($i=1; $i <= $pagination; $i++):?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL;?>eventosCliente?p=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>