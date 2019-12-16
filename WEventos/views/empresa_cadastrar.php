<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Empresa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/empresa.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-empresa">
                    <div class="top">
                        <a href="<?php echo BASE_URL; ?>empresa/add" class="btn btn-outline-dark">Adicionar Empresa</a>
                    </div>
    
                    <?php foreach($empresas as $empresa): ?>
                    <div class="session">
                        <div id="accordion">
                            <div class="card">

                                <div class="card-header">

                                    <button  class="btn btn-outline-warning btn-accordion" data-toggle="collapse" data-target="#c<?php echo $empresa['id'];?>" aria-controls="c<?php echo $empresa['id'];?>">
                                        <div class="td">
                                            <div class="campo">
                                                <div class="campo-1">
                                                    <?php echo  utf8_encode($empresa['nome']);?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tda">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>empresa/edit/<?php echo $empresa['id']?>">Editar</a>
                                        </div>
                                        <div class="tde">
                                            <a class="btn btn-outline-dark" href="<?php echo BASE_URL;?>empresa/del/<?php echo $empresa['id']?>">Excluir</a>
                                        </div>
                                    </button>

                                </div>
                                <div id="c<?php echo $empresa['id'];?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-acccordion">

                                            <div class="table-head">
                                                <div class="table-th-4">Contato</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td-4"><?php echo utf8_encode($empresa['contato']);?></div>
                                            </div>

                                            <div class="table-head">
                                                <div class="table-th">RG</div>
                                                <div class="table-th">CPF</div>
                                                <div class="table-th">CNPJ</div>
                                            </div>

                                            <div class="table-body">
                                                <div class="table-td"><?php echo utf8_encode($empresa['rg']);?></div>
                                                <div class="table-td"><?php echo utf8_encode($empresa['cpf']);?></div>
                                                <div class="table-td"><?php echo utf8_encode($empresa['cnpj']);?></div>
                                            </div>

                                            <div class="table-head">
                                                <div class="table-th">Telefone</div>
                                                <div class="table-th">Celular</div>
                                                <div class="table-th">Celular(2)</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td"><?php echo $empresa['tel'];?></div>
                                                <div class="table-td"><?php echo $empresa['cel'];?></div>
                                                <div class="table-td"><?php echo $empresa['cel2'];?></div>
                                            </div>
                                            <div class="table-head">
                                                <div class="table-th-1">Rua</div>
                                                <div class="table-th-5">N⁰</div>
                                                <div class="table-th-6">Complemento</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($empresa['rua']);?></div>
                                                <div class="table-td-5"><?php echo utf8_encode($empresa['numero']);?></div>
                                                <div class="table-td-6"><?php echo utf8_encode($empresa['complemento']);?></div>
                                            </div>
                                            <div class="table-head">
                                                <div class="table-th-1">Setor</div>
                                                <div class="table-th-3">Cidade</div>
                                            </div>
                                            <div class="table-body">
                                                <div class="table-td-1"><?php echo utf8_encode($empresa['setor']);?></div>
                                                <div class="table-td-3"><?php echo utf8_encode($empresa['cidade']);?></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                    <div class="botton">
                        <!-- <ul class="pagination">
                            <?php for ($i=1; $i <= $pagination; $i++):?>
                                <li class="<?php echo($p == $i)?'active':''; ?> pgitem">
                                    <a href="<?php BASE_URL;?>cliente?p=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor;?>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>