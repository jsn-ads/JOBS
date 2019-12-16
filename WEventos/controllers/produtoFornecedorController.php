<?php
    class ProdutoFornecedorController extends Controller{

        public function index(){

            $viewData = array();

            $itensPagina = 5;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $produtos = new Produto();

            $produtoFornecedor = new ProdutoFornecedor();

            $total = $produtos->totalProdutos();

            $total = $total['qtd'];
            
            $total_paginas = ceil($total/$itensPagina);

            $viewData['produtos'] = $produtos->getAll($p,$itensPagina);
            $viewData['pagination'] = $total_paginas;
            $viewData['prodfornecedores'] = $produtoFornecedor->getAll();

            $this->loadTemplate('produtoFornecedor_cadastrar',$viewData);    

        }

        public function add(){

            $viewData = array();

            $produto = new Produto();

            $fornecedor = new Fornecedor();

            if(isset($_POST['produto']) && !empty($_POST['produto']) && isset($_POST['valor']) && !empty($_POST['valor']) && isset($_POST['fornecedor']) && !empty($_POST['fornecedor'])){

                $idProduto = addslashes($_POST['produto']);
                $idFornecedor = addslashes($_POST['fornecedor']);
                $valor = addslashes($_POST['valor']);

                $produtoFornecedor = new ProdutoFornecedor();

                $produtoFornecedor->add($idProduto,$idFornecedor,$valor);

                header('Location:'.BASE_URL.'produtoFornecedor');

                exit;
            }

            $viewData['produtos'] = $produto->select();

            $viewData['fornecedores'] = $fornecedor->select();

            $this->loadTemplate('produtoFornecedor_adicionar',$viewData);

        }

        public function edit($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $produtoFornecedor = new ProdutoFornecedor();

                if(isset($_POST['valor']) && !empty($_POST['valor'])){

                    $valor = addslashes($_POST['valor']);

                    $produtoFornecedor->editar($id, $valor);

                    header('Location:'.BASE_URL."produtoFornecedor");

                    exit;

                }

                $viewData['produtoFornecedor'] = $produtoFornecedor->get($id);

                $this->loadTemplate('produtoFornecedor_atualizar',$viewData);

                exit;

            }

            header('Location:'.BASE_URL.'produtoFornecedor');

        }

        public function del($id){

            if(isset($id) && !empty($id)){
                
                $produtoFornecedor = new ProdutoFornecedor();

                $produtoFornecedor->delete($id);

            }

            header('Location:'.BASE_URL.'produtoFornecedor');
        }

    }
?>