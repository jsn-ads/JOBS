<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Cargo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/cargo.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-cargo">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>cargo/add" class="btn btn-outline-dark">Adicionar Cargo</a>
                    </div>
                    <div class="session-top">
                        <div class="th">Descrição</div>
                        <div class="th2">Valor</div>
                        <div class="tha"></div>
                        <div class="tha"></div>
                    </div>
                    <?php foreach($cargos as $cargo): ?>
                    <div class="session">
                        <div class="td">
                            <div class="form-group">
                                <input id="" class="form-control" type="text" name="" value="<?php echo utf8_encode($cargo['descricao']);?>" readonly="true">
                            </div>
                        </div>
                        <div class="td2">
                            <div class="form-group">
                                <input id="" class="form-control t" type="text" name="" value="R$: <?php echo utf8_encode($cargo['valor']);?>" readonly="true">
                            </div>
                        </div>
                        <div class="tda">
                            <a class="btn btn-outline-warning" href="<?php echo BASE_URL; ?>cargo/edit/<?php echo $cargo['id']?>">Editar</a>
                        </div>
                        <div class="tde"> 
                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL; ?>cargo/del/<?php echo $cargo['id']?>">Excluir</a> 
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="session-botton"></div>
                    <div class="botton">
                        <ul class="pagination">
                            <?php for($i = 1; $i<= $total_paginas;$i++): ?>
                                <li class="<?php echo ($p == $i)?'active':'';?> pgitem">
                                    <a href="<?php BASE_URL; ?>cargo?p=<?php echo $i; ?>"><?php echo $i;?></a>
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