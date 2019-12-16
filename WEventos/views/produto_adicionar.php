<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/produto.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-produto">
                    <form action="" method="post" id="form-produto">
                        <div class="c1">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Adicionar Produto</a>
                        </div>
                        <div class="c2">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="descricao" class="form-control t" type="text" name="descricao" placeholder="Descrição">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input id="valor" class="form-control t" type="text" name="valor" placeholder="V Revenda: R$0.00">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <?php if($error == 'exist'): ?>
                            <div class="alerta">
                                Produto Já Cadastrado
                            </div>
                        <?php endif; ?>
                        <div class="c3">
                            <div class="botton">
                                <input id="produto-submit" type="submit" class="btn btn-dark btn1" value="Adicionar">
                                <a id="prod-btn2"class="btn btn-dark btn1" href="<?php echo BASE_URL?>produto">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
