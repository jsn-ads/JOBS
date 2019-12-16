<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Cidade</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/cidade.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-cidade">
                    <form action="" method="post" id="form-cidade">
                        <div class='c1'>
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Adicionar Cidade</a>
                        </div>
                        <div class='c2'>
                            <div class="form-group">
                                <input id="nome" class="form-control t" type="text" name="nome" placeholder="cidade">
                            </div>
                        </div>
                        <?php if($error=='exist'):?>
                            <div class="alerta">
                                Cidade já Cadastrado
                            </div>
                        <?php endif; ?>
                        <div class='c3'>
                            <input id="cidade-submit" type="submit" class="btn btn-outline-dark btn1" value="Salvar">
                            <a href="<?php echo BASE_URL; ?>cidade" class="btn btn-outline-dark btn1">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>