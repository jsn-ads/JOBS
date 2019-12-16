<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Funcionario</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/funcionario.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-funcionario">
                    <form action="" method="post" id="form-funcionario">

                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Atualizar Funcionario</a>
                        </div>

                        <div class="session-add-edit">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="nome" class="form-control t" type="text" name="nome" placeholder="Funcionario" value="<?php echo utf8_encode($funcionario['nome']);?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cpf" class="form-control t" type="text" name="cpf" placeholder="CPF: 000.000.000-00" value="<?php echo utf8_encode($funcionario['cpf']);?>" readonly="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cel" class="form-control t" type="text" name="cel" placeholder="(00)0 0000-0000" value="<?php echo utf8_encode($funcionario['cel']);?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cel2" class="form-control t" type="text" name="cel2" placeholder="(00)0 0000-0000" value="<?php echo utf8_encode($funcionario['cel2']);?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select id="banco" class="form-control" name="banco">
                                            <option value="<?php echo $funcionario['id_banco'];?>"><?php echo utf8_encode($funcionario['banco']);?></option>
                                            <?php foreach($bancos as $banco): ?>
                                                <option value="<?php echo $banco['id'];?>"><?php echo utf8_encode($banco['nome']);?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <input id="agencia" class="form-control t" type="text" name="agencia" placeholder="Agencia:" value="<?php echo utf8_encode($funcionario['agencia']);?>" maxlength="8">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input id="conta" class="form-control t" type="text" name="conta" placeholder="Conta:" value="<?php echo utf8_encode($funcionario['conta']);?>" maxlength="13">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                     <textarea name="obs" id="obs" cols="112" rows="2" placeholder="Observações..."><?php echo utf8_encode($funcionario['obs']);?></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="botton">
                            <input id="funcionario-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a id="prod-btn2"class="btn btn-outline-dark btn1" href="<?php echo BASE_URL?>funcionario">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>