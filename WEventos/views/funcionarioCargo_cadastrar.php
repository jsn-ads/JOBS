<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cadastrar Funcionario Cargo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/funcionarioCargo.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-funcionario-cargo">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>funcionarioCargo/add" class="btn btn-outline-dark btnadd">Adicionar Funcionario/Cargo</a>    
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
                                                <div class="campo-1">
                                                    <?php echo utf8_encode($funcionario['cpf']);?>
                                                </div>
                                            </div>
                                        </div>
                                    </button>

                                </div>
                                
                                <div id="c<?php echo $funcionario['id'];?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-accordion">

                                            <div class="table-head">
                                                <div class="table-th">Cargos</div>
                                            </div>

                                            <?php foreach($funcionarioCargos as $fc): ?>

                                                <?php if($funcionario['id'] == $fc['id_funcionario_cargo']): ?>

                                                    <div class="table-body">
                                                        <div class="table-td"><?php echo utf8_encode($fc['descricao']);?></div>
                                                        <div class="table-td"><?php echo utf8_encode($fc['valor']);?></div>
                                                        <div class="table-tde">
                                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>funcionarioCargo/del/<?php echo $fc['id'];?>">Excluir</a>
                                                        </div>
                                                    </div>  
                                                <?php endif; ?>  

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
                            <?php for ($i=1; $i <= $pagination; $i++): ?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL; ?>funcionarioCargo?p=<?php echo $i; ?>"><?php echo $i; ?></a>
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