<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Banco</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/banco.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-banco">
                    <form action="" method="post" id="form-banco">
                        <div class='c1'>
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Atualizar Banco</a>
                        </div>
                        <div class='c2'>
                            <div class="form-group">
                                <input id="nome" class="form-control t" type="text" name="nome" placeholder="Banco" value="<?php echo utf8_encode($banco['nome']);?>">
                            </div>
                        </div>
                        <?php if($error=='exist'):?>
                            <div class="alerta">
                                Banco já Cadastrado
                            </div>
                        <?php endif; ?>
                        <div class='c3'>
                            <input id="banco-submit" type="submit" class="btn btn-outline-dark btn1" value="Salvar">
                            <a href="<?php echo BASE_URL; ?>banco" class="btn btn-outline-dark btn1">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>