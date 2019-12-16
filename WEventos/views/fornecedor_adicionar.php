<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Fornecedor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/fornecedor.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-fornecedor">
                    <form action="" method="post" id="form-fornecedor">
                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit" disabled="true">Adicionar Fornecedor</a>
                        </div>
                        <div class="session-add-edit">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="nome" class="form-control t" type="text" name="nome" placeholder="Fornecedor">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="contato" class="form-control t" type="text" name="contato" placeholder="Contato">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cnpj" class="form-control t" type="text" name="cnpj" placeholder="CNPJ: 00.000.000/0000-00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="municipal" class="form-control t" type="text" name="municipal" placeholder="INS⁰ Municipal">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="estadual" class="form-control t" type="text" name="estadual" placeholder="INS⁰ Estadual">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="tel" class="form-control t" type="text" name="tel" placeholder="(00)0000-0000">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="cel" class="form-control t" type="text" name="cel" placeholder="(00)0 0000-0000">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select id="cidade" onchange='carregarBairro(this)' class="form-control" name="cidade">
                                            <option value = "">Cidade</option>
                                            <?php foreach($cidades as $cidade):?>
                                                <option value="<?php echo $cidade['id'];?>"><?php  echo utf8_encode($cidade['nome']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <select id="setor" class="form-control" name="setor">                    
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="rua" class="form-control t" type="text" name="rua" placeholder="Rua">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input id="num" class="form-control t" type="text" name="num" placeholder="N⁰">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="complemento" class="form-control t" type="text" name="complemento" placeholder="Complemento">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php if($error == 'exist'):?>
                            <div class="alerta">
                                Fornecedor já Cadastrado
                            </div>
                        <?php endif;?>
                        <div class="botton">
                            <input id="fornecedor-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a id="prod-btn2"class="btn btn-outline-dark btn1" href="<?php echo BASE_URL?>fornecedor">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

