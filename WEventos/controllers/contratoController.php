<?php
    class ContratoController extends Controller{

        public function index(){

            $viewData = array();

            $empresa = new Empresa();

            $cliente = new Cliente();

            $evento = new EventosCliente();

            $funcionario = new Funcionario();

            $produto = new Produto();

            $cidade = new Cidade();

            $viewData['cidades'] = $cidade->getClass();

            $viewData['funcionarios'] = $funcionario->select();

            $viewData['clientes'] = $cliente->select();

            $viewData['empresas'] = $empresa->select();

            $viewData['produtos'] = $produto->select();

            $this->loadTemplate('contrato_cadastrar',$viewData);
        }

        public function carregarCliente($id){

            if(isset($id) && !empty($id)){
                
                $viewData = array();

                $cliente = new Cliente();

                $viewData['cliente'] = $cliente->get($id);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit;
            }

        }

        public function carregarEmpresa($id){

            if(isset($id) && !empty($id)){
                
                $viewData = array();
                
                $empresa = new Empresa();

                $viewData['empresa'] = $empresa->get($id);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit;

            }

        }

        public function carregarEvento($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $evento = new EventosCliente();

                $viewData = $evento->select($id);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit;

            }

        }

        public function getEvento($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $evento = new EventosCliente();

                $viewData['evento'] = $evento->get($id);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit;

            }

        }

        public function getCargo($id){

            if(isset($id) && !empty($id)){

                $cargo = new Cargo();

                $viewData = array();

                $viewData = $cargo->getCargos($id);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit;

            }

        }

        public function getFornecedor($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $produtoFornecedor = new ProdutoFornecedor();

                $viewData = $produtoFornecedor->getFornecedor($id);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit;

            }

        }

        public function getProduto($idpro, $idfor){

            if(isset($idpro) && !empty($idpro) && isset($idfor) && !empty($idfor)){

                $viewData = array();

                $produtoFornecedor = new ProdutoFornecedor();

                $viewData['produtos'] = $produtoFornecedor->getProduto($idpro, $idfor);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit; 

            }

        }

        public function addFuncionario($idfun , $idcargo){
        
            if(isset($idfun) && !empty($idfun) && isset($idcargo) && !empty($idcargo)){

                $viewData = array();

                $funcionarioCargo = new FuncionarioCargo();

                $viewData['funcionario'] = $funcionarioCargo->addFuncionario($idfun, $idcargo);

                $viewData = $this->converteArrayParaUtf8($viewData);
                header('Content-Type: application/json;');
                echo json_encode($viewData, JSON_UNESCAPED_UNICODE);

                exit;

            }

        }



        private function converteArrayParaUtf8($result){
            array_walk_recursive($result, function(&$item,$key){
                 if (!mb_detect_encoding($item, 'utf-8', true)) {
                        $item = utf8_encode($item);
                    }
            });
            return $result;
        }

    }
?>