<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/assets/css/cliente.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-cliente">
                    <form action="" method="post" id="form-cliente">
                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Atualizar Cliente</a>
                        </div>
                        <div class="session-add-edit">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="nome" class="form-control t" type="text" name="nome" placeholder="Cliente Nome" value="<?php echo utf8_encode($cliente['nome']);?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cpf" class="form-control t" type="text" name="cpf" placeholder="CPF: 000.000.000-00" value="<?php echo($cliente['cpf']);?>" readonly=“true”>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <input id="cnpj" class="form-control t" type="text" name="cnpj" placeholder="CNPJ: 00.000.000/0000-00" value="<?php echo($cliente['cnpj']);?>" readonly=“true”>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="email" class="form-control t" type="email" name="email" placeholder="Email" value="<?php echo utf8_decode($cliente['email']);?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="instagran" class="form-control t" type="text" name="instagran" placeholder="Instagran" value="<?php echo utf8_decode($cliente['instagran']);?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="tel" class="form-control t" type="text" name="tel" placeholder="TEL: (00)0000-0000" value="<?php echo $cliente['tel'];?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cel" class="form-control t" type="text" name="cel" placeholder="CEL: (00)0 0000-0000" value="<?php echo $cliente['cel'];?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cel2" class="form-control t" type="text" name="cel2" placeholder="CEL2: (00)0 0000-0000" value="<?php echo $cliente['cel2'];?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select id="cidade" onchange='carregarBairro(this)' class="form-control" name="cidade">
                                            <option value="<?php echo $cliente['idCidade'];?>"><?php  echo utf8_encode($cliente['cidade']);?></option>
                                            <?php foreach($cidades as $cidade):?>
                                                <option value="<?php echo $cidade['id'];?>"><?php  echo utf8_encode($cidade['nome']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <select id="setor" class="form-control" name="setor">                    
                                            <option value="<?php echo $cliente['idSetor'];?>"><?php  echo utf8_encode($cliente['setor']);?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="rua" class="form-control t" type="text" name="rua" placeholder="Rua" value="<?php echo $cliente['rua'];?>">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input id="num" class="form-control t" type="text" name="num" placeholder="N⁰" value="<?php echo $cliente['numero'];?>">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="complemento" class="form-control t" type="text" name="complemento" placeholder="Complemento" value="<?php echo $cliente['complemento'];?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea id="observacao" class="form-control" name="observacao" rows="3" placeholder="observação..."><?php echo utf8_encode($cliente['obs']);?></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="botton">
                            <input id="cliente-submit" type="submit" class="btn btn-outline-dark btn1" value="Salvar">
                            <a id="btn2"class="btn btn-outline-dark btn1" href="<?php echo BASE_URL?>cliente">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>