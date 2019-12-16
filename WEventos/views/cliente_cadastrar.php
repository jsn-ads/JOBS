<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/cliente.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-cliente">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>cliente/add" class="btn btn-outline-dark">Adicionar Cliente</a>
                    </div>
    
                    <?php foreach($clientes as $cliente): ?>
                    <div class="session">
                        <div id="accordion">
                            <div class="card">

                                <div class="card-header">

                                    <button  class="btn btn-outline-warning btn-accordion" data-toggle="collapse" data-target="#c<?php echo $cliente['id'];?>" aria-controls="c<?php echo $cliente['id'];?>">
                                        <div class="td">
                                            <div class="campo">
                                                <div class="campo-1">
                                                    <?php echo  utf8_encode($cliente['nome']);?>
                                                </div>
                                                <div class="campo-2">
                                                    <?php echo $cliente['cpf']?>
                                                </div>
                                                <div class="campo-2">
                                                    <?php echo $cliente['cnpj']?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tda">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>cliente/edit/<?php echo $cliente['id']?>">Editar</a>
                                        </div>
                                        <div class="tde">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>cliente/del/<?php echo $cliente['id']?>">Excluir</a>
                                        </div>
                                    </button>

                                </div>
                                <div id="c<?php echo $cliente['id'];?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-acccordion">
                                            <div class="table-head">
                                                <div class="table-th-1">E-Mail</div>
                                                <div class="table-th-3">Instagran</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($cliente['email']);?></div>
                                                <div class="table-td-3"><?php echo utf8_encode($cliente['instagran']);?></div>
                                            </div>
                                            <div class="table-head">
                                                <div class="table-th">Telefone</div>
                                                <div class="table-th">Celular</div>
                                                <div class="table-th">Celular(2)</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td"><?php echo $cliente['tel'];?></div>
                                                <div class="table-td"><?php echo $cliente['cel'];?></div>
                                                <div class="table-td"><?php echo $cliente['cel2'];?></div>
                                            </div>
                                            <div class="table-head">
                                                <div class="table-th-1">Rua</div>
                                                <div class="table-th-2">N⁰</div>
                                                <div class="table-th-2">Complemento</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($cliente['rua']);?></div>
                                                <div class="table-td-2"><?php echo utf8_encode($cliente['numero']);?></div>
                                                <div class="table-td-2"><?php echo utf8_encode($cliente['complemento']);?></div>
                                            </div>
                                            <div class="table-head">
                                                <div class="table-th-1">Setor</div>
                                                <div class="table-th-3">Cidade</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($cliente['setor']);?></div>
                                                <div class="table-td-3"><?php echo utf8_encode($cliente['cidade']);?></div>
                                            </div>
                                            <div class="table-head">
                                                <div class="table-th-4">Observações</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td-4"><?php echo utf8_decode($cliente['obs']);?></div>
                                            </div>
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
                                    <a href="<?php BASE_URL;?>cliente?p=<?php echo $i; ?>"><?php echo $i; ?></a>
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