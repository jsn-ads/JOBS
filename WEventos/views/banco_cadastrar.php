<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Banco</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/cidade.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-cidade">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>banco/add" class="btn btn-outline-dark">Adicionar Banco</a>
                    </div>
                    <div class="session-top">
                        <div class="th">Bancos</div>
                    </div>
                    <?php foreach($bancos as $banco):?>
                    <div class="session">
                        <div class="td">
                            <div class="form-group">
                                <input id="nome" class="form-control" type="text" name="nome" value="<?php echo utf8_encode($banco['nome']);?>" readonly="true">
                            </div>
                        </div>
                        
                        <div class="tda">
                            <a class="btn btn-outline-warning" href="<?php echo BASE_URL; ?>banco/edit/<?php echo $banco['id']?>">Editar</a>
                        </div>
                        <div class="tde">
                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL; ?>banco/del/<?php echo $banco['id']?>">Excluir</a>
                        </div>
                    </div>   
                    <?php endforeach; ?>
                    <div class="session-botton"></div>
                    <div class="botton">
                        <ul class="pagination">
                            <?php for ($i=1; $i <= $pagination; $i++): ?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL; ?>banco?p=<?php echo $i; ?>"><?php echo $i; ?></a>
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