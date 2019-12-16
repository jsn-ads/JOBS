<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Fornecedor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/fornecedor.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-fornecedor">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>fornecedor/add" class="btn btn-outline-dark btnadd">Adicionar Fornecedor</a>    
                    </div>

                    <?php foreach($fornecedores as $fornecedor): ?>
                    <div class="session">
                        <div id="accordion">
                            <div class="card">

                                <div class="card-header">

                                    <button  class="btn btn-outline-warning btn-accordion" data-toggle="collapse" data-target="#c<?php echo $fornecedor['id'];?>" aria-controls="c<?php echo $fornecedor['id'];?>">
                                        <div class="td">
                                            <div class="campo">
                                                <div class="campo-1">
                                                    <?php echo utf8_encode($fornecedor['nome']);?>
                                                </div>
                                                <div class="campo-2">
                                                    <?php echo $fornecedor['cnpj'];?>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="tda">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>fornecedor/edit/<?php echo $fornecedor['id'];?>">Editar</a>
                                        </div>
                                        <div class="tde">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>fornecedor/del/<?php echo $fornecedor['id'];?>">Excluir</a>
                                        </div>
                                    </button>

                                </div>
                                
                                <div id="c<?php echo $fornecedor['id'];?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-accordion">
                                            <div class="table-head">
                                                <div class="table-th-1">Contato</div>
                                                <div class="table-th-2">Telefone</div>
                                                <div class="table-th-2">Celular</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($fornecedor['contato']);?></div>
                                                <div class="table-td-2"><?php echo utf8_encode($fornecedor['tel']);?></div>
                                                <div class="table-td-2"><?php echo utf8_encode($fornecedor['cel']);?></div>
                                            </div>

                                            <div class="table-head">
                                                <div class="table-th-1">Rua</div>
                                                <div class="table-th-2">N⁰</div>
                                                <div class="table-th-2">Complemento</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($fornecedor['rua']);?></div>
                                                <div class="table-td-2"><?php echo utf8_encode($fornecedor['numero']);?></div>
                                                <div class="table-td-2"><?php echo utf8_encode($fornecedor['complemento']);?></div>
                                            </div>

                                            <div class="table-head">
                                                <div class="table-th-1">Setor</div>
                                                <div class="table-th-3">Cidade</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($fornecedor['setor']);?></div>
                                                <div class="table-td-3"><?php echo utf8_encode($fornecedor['cidade']);?></div>
                                            </div>

                                            <div class="table-head">
                                                <div class="table-th-1">INS⁰ Municipal</div>
                                                <div class="table-th-3">INS⁰ Estadual</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($fornecedor['municipal']);?></div>
                                                <div class="table-td-3"><?php echo utf8_encode($fornecedor['estadual']);?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                    <div class="botton">
                        <ul class="pagination">
                            <?php for ($i=1; $i <= $pagination; $i++):?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL;?>fornecedor?p=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
