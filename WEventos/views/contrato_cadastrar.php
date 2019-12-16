<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Contrato</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/contrato.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-contrato">
                    <form action="" method="post" id="form-contrato">

                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit A" disabled="true">Empresa</a>
                        </div>  

                        <div class="session-add-edit A">
                            
                            <div class="row">
                                
                                <div class="col">
                                    <div class="form-group">
                                        <select id="a-nome" onchange="carregarEmpresa(this)" class="form-control" name="a-nome">
                                            <option value="">SELECT EMPRESA</option>
                                            <?php foreach($empresas as $empresa):?>
                                                <option value="<?php echo $empresa['id'];?>"><?php echo utf8_encode($empresa['nome']);?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> 
                                
                                <div class="col">
                                    <div class="form-group" id="aa-contato">
                                        <input id="a-contato" class="form-control t" type="text" name="a-contato" placeholder="Contado" readonly="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col">
                                    <div class="form-group" id="aa-rg">
                                        <input id="a-rg" class="form-control t" type="text" name="a-rg" placeholder="0000000" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="aa-cpf">
                                        <input id="a-cpf" class="form-control t" type="text" name="a-cpf" placeholder="000.000.000-00" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="aa-cnpj">
                                        <input id="a-cnpj" class="form-control t" type="text" name="a-cnpj" placeholder="00.000.000/0000-00" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="aa-tel">
                                        <input id="a-tel" class="form-control t" type="text" name="a-tel" placeholder="(00) 0000-0000" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="aa-cel">
                                        <input id="a-cel" class="form-control t" type="text" name="a-cel" placeholder="(00) 0 0000-0000" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="aa-cel2">
                                        <input id="a-cel2" class="form-control t" type="text" name="a-cel2" placeholder="(00) 0 0000-0000" readonly="true">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col">
                                    <div class="form-group" id="aa-rua">
                                        <input id="a-rua" class="form-control t" type="text" name="a-rua" placeholder="Rua" readonly="true">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group" id="aa-num">
                                        <input id="a-num" class="form-control t" type="text" name="a-num" placeholder="N⁰" readonly="true">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group" id="aa-com">
                                        <input id="a-com" class="form-control t" type="text" name="a-com" placeholder="Complemento" readonly="true">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group" id="aa-setor">
                                        <input id="a-setor" class="form-control t" type="text" name="a-setor" placeholder="Setor" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="aa-cidade">
                                        <input id="a-cidade" class="form-control t" type="text" name="a-cidade" placeholder="Cidade" readonly="true">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit B" disabled="true">Cliente</a>
                        </div>

                        <div class="session-add-edit B">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select id="b-nome" onchange="carregarCliente(this); carregarEvento(this);" class="form-control" name="b-nome">
                                            <option value="" >SELECT CLIENTE</option>
                                            <?php foreach($clientes as $cliente):?>
                                                <option value="<?php echo $cliente['id'];?>"><?php echo utf8_encode($cliente['nome']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group" id="bb-cpf">
                                        <input id="b-cpf" class="form-control t" type="text" name="b-cpf" placeholder="000.000.000-00" readonly="true">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group" id="bb-cnpj">
                                        <input id="b-cnpj" class="form-control t" type="text" name="b-cnpj" placeholder="00.000.000/0000-00" readonly="true">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                
                                <div class="col">
                                    <div class="form-group" id="bb-email">
                                        <input id="b-email" class="form-control t" type="text" name="b-email" placeholder="E-mail" readonly="true"> 
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="bb-instagran">
                                        <input id="b-instagran" class="form-control t" type="text" name="b-instagran" placeholder="Instragran" readonly="true"> 
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col">
                                    <div class="form-group" id="bb-rua">
                                        <input id="b-rua" class="form-control t" type="text" name="b-rua" placeholder="Rua" readonly="true">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group" id="bb-num">
                                        <input id="b-num" class="form-control t" type="text" name="b-num" placeholder="N⁰" readonly="true">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group" id="bb-com">
                                        <input id="b-com" class="form-control t" type="text" name="b-com" placeholder="Complemento" readonly="true">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group" id="bb-setor">
                                        <input id="b-setor" class="form-control t" type="text" name="b-setor" placeholder="Setor" readonly="true">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="bb-cidade">
                                        <input id="b-cidade" class="form-control t" type="text" name="b-cidade" placeholder="Cidade" readonly="true">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit C" disabled="true">Evento</a>
                        </div>

                        <div class="session-add-edit C">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <select id="c-data" onchange="getEvento(this);" class="form-control" name="c-data">
                                            <option>SELECT DATA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group" id="cc-nome">
                                        <input id="c-nome" class="form-control t" type="text" name="c-nome" placeholder="Evento..." readonly="true">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <input id="c-data2" class="form-control t" type="date" name="c-data2">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input id="c-hora" class="form-control t" type="time" name="c-hora" placeholder="Hora">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="c-com" class="form-control t" type="data" name="c-com" placeholder="Complemento">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select id="c-cidade" onchange='carregarBairro(this)' class="form-control" name="c-cidade">
                                            <option value = "">Cidade</option>
                                            <?php foreach($cidades as $cidade):?>
                                                <option value="<?php echo $cidade['id'];?>"><?php  echo utf8_encode($cidade['nome']);?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <select id="setor" class="form-control" name="c-setor">                    
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit D" disabled="true">Equipe</a>
                        </div>
                        <form action="get" id="form-empregado">      
                            <div class="session-add-edit D">

                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <select id="d-fun" onchange="getCargo(this);" class="form-control" name="d-fun">
                                                <option value="">SELECT FUNCIONARIO</option>
                                                <?php foreach($funcionarios as $funcionario):?>
                                                    <option value="<?php echo $funcionario['id']?>"><?php echo utf8_encode($funcionario['nome']);?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <select id="d-cargo" class="form-control" name="d-cargo">
                                                <option>SELECT CARGO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <button id="addFunc" class="btn  btn-outline-dark btn-func-cargo">Adicionar</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="addfuncionario">
                                    
                                </div>
                            </div>
                        </form>
                            <div class="top">
                                <a href="" class="btn btn-dark btn-lg btn-add-edit E" disabled="true">Produto</a>
                            </div>

                            <div class="session-add-edit E">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select id="e-prod" onchange="getFornecedor(this);" class="form-control" name="e-prod">
                                                <option>SELECT PRODUTO</option>
                                                <?php foreach($produtos as $produto):?>
                                                    <option value="<?php echo $produto['id'];?>"><?php echo utf8_encode($produto['descricao']);?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <select id="e-forn" onchange="getProduto(this);" class="form-control" name="e-forn">
                                                <option>SELECT FORNECEDOR</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="form-group" id="ee-custo">
                                            <input id="e-custo" class="form-control t" type="text" name="e-custo" placeholder="Custo R$ 0.00" readonly="true">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group" id="ee-venda">
                                            <input id="e-venda" class="form-control t" type="text" name="e-venda" placeholder="Venda R$ 0.00" readonly="true">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <input id="e-qtd" class="form-control t" type="text" name="e-qtd" placeholder="Qtd:">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <button id="addProd" class="btn  btn-outline-dark btn-func-cargo">Adicionar</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="addproduto">
                                    
                                </div>
                            </div>
                        </form>
                        <div class="top">
                            <a href="" class="btn btn-dark btn-lg btn-add-edit F" disabled="true">Total</a>
                        </div>

                        <div class="session-add-edit F">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="total" class="form-control t" type="text" name="total" placeholder="R$ 0.00" readonly="true">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="botton">
                            <button id="carregar-submit" class="btn btn-outline-dark btn1">Carregar</button>
                            <input id="contrato-submit" type="submit" class="btn btn-outline-dark btn1" value="Adicionar">
                            <a id="prod-btn2"class="btn btn-outline-dark btn1" href="<?php echo BASE_URL?>home">Cancelar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>