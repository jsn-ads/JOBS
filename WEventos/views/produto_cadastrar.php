<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/produto.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-produto">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>produto/add" class="btn btn-outline-dark">Adicionar Produto</a>
                    </div>
                    <div class="session-top">
                        <div class="th">Descrição</div>
                        <div class="th2">Valor</div>
                        <div class="tha"></div>
                        <div class="tha"></div>
                    </div>
                    <?php foreach($produtos as $produto): ?>
                    <div class="session">
                        <div class="td">
                            <div class="form-group">
                                <input id="" class="form-control" type="text" name="" value="<?php echo utf8_encode($produto['descricao']);?>" readonly="true">
                            </div>
                        </div>
                        <div class="td2">
                            <div class="form-group">
                                <input id="" class="form-control t" type="text" name="" value="R$: <?php echo utf8_encode($produto['preco']);?>" readonly="true">
                            </div>
                        </div>
                        <div class="tda">
                            <a class="btn btn-outline-warning" href="<?php echo BASE_URL; ?>produto/edit/<?php echo $produto['id']?>">Editar</a>
                        </div>
                        <div class="tde"> 
                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL; ?>produto/del/<?php echo $produto['id']?>">Excluir</a> 
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="session-botton"></div>
                    <div class="botton">
                        <ul class="pagination">
                            <?php for($i = 1; $i<= $total_paginas;$i++): ?>
                                <li class="<?php echo ($p == $i)?'active':'';?> pgitem">
                                    <a href="<?php BASE_URL; ?>produto?p=<?php echo $i; ?>"><?php echo $i;?></a>
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