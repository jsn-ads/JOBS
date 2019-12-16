<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Funcionario Cargo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/funcionarioCargo.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-funcionario-cargo">
                    <form action="" method="post" id="form-funcionario-cargo">
                        <div class="top">
                        <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Adicionar Funcionario/Cargo</a>
                        </div>
                        <div class="session-add-edit">
                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <select id="funcionario" class="form-control" name="funcionario">
                                            <option value="">SELECT FUNCIONARIO</option>
                                            <?php foreach($funcionarios as $funcionario): ?>
                                                <option value="<?php echo $funcionario['id'];?>"><?php echo utf8_encode($funcionario['nome']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <select id="cargo" class="form-control" name="cargo">
                                            <option  value="">SELECT CARGO</option>
                                            <?php foreach($cargos as $cargo): ?>
                                                <option value="<?php echo $cargo['id'];?>"><?php echo utf8_encode($cargo['descricao']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if($error == 'exist'):?>
                            <div class="alerta">
                                Cargo Já adicionado no Funcionario
                            </div>
                        <?php endif;?>

                        <div class="botton">
                            <input id="funcionario-cargo-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a id="btn2"class="btn btn-outline-dark btn1" href="<?php echo BASE_URL?>funcionarioCargo">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>