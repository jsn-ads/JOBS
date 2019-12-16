<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Funcionario</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/funcionario.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-funcionario">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>funcionario/add" class="btn btn-outline-dark btnadd">Adicionar Funcionario</a>    
                    </div>

                    <?php foreach($funcionarios as $funcionario): ?>
                    <div class="session">
                        <div id="accordion">
                            <div class="card">

                                <div class="card-header">

                                    <button  class="btn btn-outline-warning btn-accordion" data-toggle="collapse" data-target="#c<?php echo $funcionario['id'];?>" aria-controls="c<?php echo $funcionario['id'];?>">
                                        <div class="td">
                                            <div class="campo">
                                                <div class="campo-1">
                                                    <?php echo utf8_encode($funcionario['nome']);?>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="tda">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>funcionario/edit/<?php echo $funcionario['id'];?>">Editar</a>
                                        </div>
                                        <div class="tde">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>funcionario/del/<?php echo $funcionario['id'];?>">Excluir</a>
                                        </div>
                                    </button>

                                </div>
                                
                                <div id="c<?php echo $funcionario['id'];?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-accordion">

                                            <div class="table-head">
                                                <div class="table-th">CPF</div>
                                                <div class="table-th">CEL</div>
                                                <div class="table-th">CEL(2)</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td"><?php echo utf8_encode($funcionario['cpf']);?></div>
                                                <div class="table-td"><?php echo utf8_encode($funcionario['cel']);?></div>
                                                <div class="table-td"><?php echo utf8_encode($funcionario['cel2']);?></div>
                                            </div>

                                            <div class="table-head">
                                                <div class="table-th">Banco</div>
                                                <div class="table-th">Agencia</div>
                                                <div class="table-th">Conta</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td"><?php echo utf8_encode($funcionario['banco']);?></div>
                                                <div class="table-td"><?php echo utf8_encode($funcionario['agencia']);?></div>
                                                <div class="table-td"><?php echo utf8_encode($funcionario['conta']);?></div>
                                            </div>

                                            <div class="table-head">
                                                <div class="table-th-4">Obervações</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td-4"><?php echo utf8_encode($funcionario['obs']);?></div>
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
                            <?php for ($i=1; $i <= $pagination; $i++): ?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL; ?>funcionario?p=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>