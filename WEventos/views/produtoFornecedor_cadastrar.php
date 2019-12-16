<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto Fornecedor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/produtoFornecedor.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-produto-fornecedor">

                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>produtoFornecedor/add" class="btn btn-outline-dark">Adicionar Produto/Fornecedor</a>
                    </div>
        
                    <?php foreach($produtos as $produto): ?>
                    <div class="session">
                        <div id="accordion">
                            <div class="card">

                                <div class="card-header">

                                    <button  class="btn btn-outline-warning btn-accordion" data-toggle="collapse" data-target="#c<?php echo $produto['id'];?>" aria-controls="c<?php echo $produto['id'];?>">
                                        <div class="td">
                                            <div class="campo">
                                                <div class="campo-1">
                                                    <?php echo utf8_encode($produto['descricao']);?>
                                                </div>
                                                <div class="campo-2">
                                                    R$: <?php echo $produto['preco'];?>
                                                </div>
                                            </div>
                                        </div>
                                    </button>

                                </div>
                                <div id="c<?php echo $produto['id'];?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-acccordion">
                                            <div class="table-head">
                                                <div class="table-th-1">Fornecedor</div>
                                                <div class="table-th-2 t">Preço Custo</div>
                                            </div>
                                            <?php foreach ($prodfornecedores as $fornecedor): ?>
                                                <?php if($produto['id'] == $fornecedor['pid']):?>
                                                    <div class="table-body">
                                                        <div class="table-td-1"><?php echo utf8_encode($fornecedor['nome']);?></div>
                                                        <div class="table-td-2 t">R$: <?php echo $fornecedor['valor_custo'];?></div>
                                                        <div class="table-tda">
                                                            <a class="btn btn-outline-warning" href="<?php echo BASE_URL;?>produtoFornecedor/edit/<?php echo $fornecedor['id']?>">Editar</a>
                                                        </div>
                                                        <div class="table-tde">
                                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>produtoFornecedor/del/<?php echo $fornecedor['id']?>">Excluir</a>
                                                        </div>
                                                    </div>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                    <div class="botton">
                        <ul class="pagination">
                            <?php for ($i=1; $i <= $pagination; $i++): ?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL; ?>produtoFornecedor?p=<?php echo $i; ?>"><?php echo $i; ?></a>
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