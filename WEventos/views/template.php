<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WFESTA</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css">
</head
>
<body>
        <div>
            <img class="img topo"width="100%" height="70px"; src="<?php echo BASE_URL; ?>assets/img/topo.jpeg">
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="<?php echo BASE_URL;?>">
                <img class="img-menu" src="<?php echo BASE_URL;?>assets/img/home.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <img class="img-menu" src="<?php echo BASE_URL;?>assets/img/cadastro.png">
                            <strong>Cadastro</strong>
                        </a>
                        <div class="dropdown-menu menu-item-color" aria-labelledby="navbarDropdownMenuLink">
                            
                            <a class="dropdown-item" href="<?php echo BASE_URL;?>empresa">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/company.png">
                                <strong>Empresa</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>cliente">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/client.png">
                                <strong>Cliente</strong>
                            </a>
                            
                            <a class="dropdown-item" href="<?php echo BASE_URL;?>eventosCliente">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/aniversario.png">
                                <strong>Cliente Eventos</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>fornecedor">
                                <img class="img-menu-item" src="<?php echo BASE_URL; ?>assets/img/fornecedor.png">
                                <strong>Fornecedor</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>produto">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/product.png">
                                <strong>Produto</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>produtoFornecedor">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/fornecedor.png">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/product.png">
                                <strong>Prod/Fornercedor</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>funcionarioCargo">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/funcionario.png">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/cargo.png">
                                <strong>Funcionario/Cargo</strong>
                            </a>
                            
                            <a class="dropdown-item" href="<?php echo BASE_URL;?>funcionario">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/funcionario.png">
                                <strong>Funcionario</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>cargo">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/cargo.png">
                                <strong>Cargo</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>banco">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/banco.png">
                                <strong>Banco</strong>
                            </a>
                            
                            <a class="dropdown-item" href="<?php echo BASE_URL;?>bairro">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/bairro.png">
                                <strong>Bairro</strong>
                            </a>

                            <a class="dropdown-item" href="<?php echo BASE_URL;?>cidade">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/cidade.png">
                                <strong>Cidade</strong>
                            </a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <img class="img-menu" src="<?php echo BASE_URL;?>assets/img/lupa.png">
                            <strong>Consulta</strong>
                        </a>
                        <div class="dropdown-menu menu-item-color" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/client.png">
                                <strong>Cliente</strong>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/aniversario.png">
                                <strong>Cliente Eventos</strong>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/fornecedor.png">
                                <strong>Fornecedor</strong>
                            </a>
                            <a class="dropdown-item" href="<?php echo BASE_URL;?>produto/consulta">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/product.png">
                                <strong>Produto</strong>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/funcionario.png">
                                <strong>Funcionario</strong>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/cargo.png">
                                <strong>Cargo</strong>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/bairro.png">
                                <strong>Bairro</strong>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/cidade.png">
                                <strong>Cidade</strong>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-menu" src="<?php echo BASE_URL;?>assets/img/contract.png">
                            <strong>Contratos</strong>
                        </a>
                        <div class="dropdown-menu menu-item-color" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo BASE_URL;?>contrato">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/cadastro.png">
                                <strong>Cadastrar</strong>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="img-menu-item" src="<?php echo BASE_URL;?>assets/img/lupa.png">
                                <strong>Consultar</strong>
                            </a>
                        </div>
                    </li>
                  </ul>
            </div>
        </nav>
        
        <?php 
            $this->loadViewInTemplate($viewName, $viewData);
        ?>
    <!-- Template Carrega pagina e dados pagina com função loadViewInTamplate em do controller -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>