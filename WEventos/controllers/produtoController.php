<?php
    class ProdutoController extends controller{

        public function index(){

            $viewData = array();

            //define quantidade de produtos na tela
            $itensPagina = 10;
            
            //posicao da paginacao
            $p = 1;
            
            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }
            
            //cria um objeto produto
            $produto = new Produto();
            
            // pega quantidade total de produtos
            $total = $produto->totalProdutos();
            $total = $total['qtd'];

            //divide total de produtos pela quantidade de paginas
            $total_paginas = ceil($total/$itensPagina);

            //faz um select pela quantidade de itens pelo indice da pagina
            $viewData['produtos'] = $produto->getAll($p,$itensPagina);

            //envia a quantidade de paginas do total de produtos para paginação
            $viewData['total_paginas'] = $total_paginas;


            $this->loadTemplate('produto_cadastrar',$viewData);
        }

        public function add(){

            $viewData = array(
                'error' => ''
            );

            if(isset($_POST['descricao']) && !empty($_POST['descricao']) && isset($_POST['valor']) && !empty($_POST['valor'])){
                $descricao = addslashes(ucwords(strtolower(utf8_encode($_POST['descricao']))));
                $valor = addslashes($_POST['valor']);

                $produto = new Produto();
    
                if($produto->add($descricao,$valor)){
                    header("Location: ".BASE_URL."produto");
                }else{
                    header("Location: ".BASE_URL."produto/add?error=exist");
                }
            }

            if(!empty($_GET['error'])){
                $viewData['error'] = $_GET['error'];
            }
          
            $this->loadTemplate('produto_adicionar',$viewData);
        }

        public function del($id){
            if(isset($id) && !empty($id)){
                $produto = new Produto();
                $produto->del($id);

                header('Location:'.BASE_URL.'produto');
            }
        }

        public function edit($id){
            
            $viewData = array(
                'error' => ''
            );

            if(!empty($id)){

                $produto = new Produto();

                if(!empty($_POST['descricao']) && !empty($_POST['valor'])){
                    
                    $descricao = addslashes(ucwords(strtolower(utf8_decode($_POST['descricao']))));
                    
                    $valor = addslashes($_POST['valor']);

                    $produto->editar($id,$descricao,$valor);

                }else{

                    $viewData['info'] = $produto->get($id);

                    if(isset($viewData['info']['id'])){
                        $this->loadTemplate('produto_atualizar',$viewData);
                        exit;
                    }
                }
            }

            header('Location:'.BASE_URL.'produto');
        }

        public function consulta(){
            $viewData = array();
            $this->loadTemplate('produto_consultar',$viewData);
        }
    }
?>