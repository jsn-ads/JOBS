<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Bairro</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bairro.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-bairro">
                    <form action="" method="post" id="form-bairro">
                        <div class="c1">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Atualizar Bairro</a>
                        </div>
                        <div class="c2">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cidade" class="form-control t" type="text" name="cidade" value="<?php echo utf8_encode($dados['cid']);?>" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <input id="nome" class="form-control t" type="text" name="nome" placeholder="bairro" value="<?php echo utf8_encode($dados['nome']);?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if($error == 'exist'): ?>
                            <div class="alerta">
                                Bairro já Cadastrado
                            </div>
                        <?php endif; ?>

                        <div class="c3">
                            <input id="bairro-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a href="<?php echo BASE_URL; ?>bairro" class="btn btn-outline-dark btn1">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>