<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Bairro</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bairro.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-bairro">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>bairro/add" class="btn btn-outline-dark">Adicionar Bairro</a>
                    </div>
                    <div class="session-top">
                        <div class="th">Cidade</div>
                        <div class="th">Bairro</div>
                        <div class="tha"></div>
                        <div class="the"></div>
                    </div>
                    <?php foreach($bairros as $bairro) :?>
                    <div class="session">
                        <div class="td">
                            <div class="form-group">
                                <input id="" class="form-control" type="text" name="" value="<?php echo utf8_encode($bairro['cid']);?>" readonly="true">
                            </div>
                        </div>
                        <div class="td">
                            <div class="form-group">
                                <input id="" class="form-control" type="text" name="" value="<?php echo utf8_encode($bairro['nome']);?>" readonly="true">
                            </div>
                        </div>
                        <div class="tda">
                            <a class="btn btn-outline-warning" href="<?php echo BASE_URL; ?>bairro/edit/<?php echo $bairro['id']?>/<?php echo $bairro['idcid']?>">Editar</a>
                        </div>
                        <div class="tde">
                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL; ?>bairro/del/<?php echo $bairro['id']?>">Excluir</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="session-botton"></div>
                    <div class="botton">
                        <ul class="pagination">
                            <?php for ($i=1; $i <= $pagination; $i++): ?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL; ?>bairro?p=<?php echo $i; ?>"><?php echo $i; ?></a>
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