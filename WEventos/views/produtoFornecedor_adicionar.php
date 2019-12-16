<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto Fornecedor Adicionar</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/produtoFornecedor.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-produto-fornecedor-add-edit">
                    <form action="" method="post" id="form-produto-fornecedor">
                        <div class="top">
                        <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Adicionar Produto/Fonecedor</a>
                        </div>
                        <div class="session-add-edit">
                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <select id="fornecedor" class="form-control" name="fornecedor">
                                            <option value="">SELECT FORNECEDOR</option>
                                            <?php foreach($fornecedores as $fornecedor): ?>
                                                <option value="<?php echo $fornecedor['id'];?>"><?php echo utf8_encode($fornecedor['nome']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <select id="produto" class="form-control" name="produto">
                                            <option  value="">SELECT PRODUTO</option>
                                            <?php foreach($produtos as $produto): ?>
                                                <option value="<?php echo $produto['id'];?>"><?php echo utf8_encode($produto['descricao']).' R$: '.$produto['preco'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <input id="valor" class="form-control t" type="text" name="valor" placeholder="R$ 0.00">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="botton">
                            <input id="produto-fornecedor-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a id="btn2"class="btn btn-outline-dark btn1" href="<?php echo BASE_URL?>produtoFornecedor">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>