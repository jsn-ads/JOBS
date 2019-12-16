<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Cargo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/cargo.css">
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-cargo">
                    <form action="" method="post" id="form-cargo">
                        <div class="c1">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Atualizar Cargo</a>
                        </div>
                        <div class="c2">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="nome" class="form-control t" type="text" name="nome" placeholder="Cargo" value="<?php echo utf8_encode($cargo['descricao']);?>" readonly="true">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input id="valor" class="form-control t" type="text" name="valor" placeholder="Valor R$:" value="<?php echo $cargo['valor'];?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="c3">
                            <input id="cargo-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a href="<?php echo BASE_URL; ?>cargo" class="btn btn-outline-dark btn1">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>