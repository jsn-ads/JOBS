<?php
    class FornecedorController extends controller{

        public function index(){

            $viewData = array();

            $itensPagina = 5;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $fornecedor = new Fornecedor();

            $total = $fornecedor->total();
            $total = $total['total'];
            
            $pagination = ceil($total/$itensPagina);

            $viewData['pagination'] = $pagination;
            
            $viewData['fornecedores'] = $fornecedor->getAll($p, $itensPagina);

            $this->loadTemplate('fornecedor_cadastrar',$viewData);
        }

        public function add(){

            $viewData = array(
                'error' => ''
            );

            if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['contato']) && !empty($_POST['contato']) && isset($_POST['cnpj']) && !empty($_POST['cnpj']) && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['setor']) && !empty($_POST['setor']) && isset($_POST['rua']) && !empty($_POST['rua'])){

                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                $contato = addslashes(ucwords(strtolower(utf8_decode($_POST['contato']))));
                $cnpj = addslashes($_POST['cnpj']);
                $municipal = addslashes($_POST['municipal']);
                $estadual = addslashes($_POST['estadual']);
                $tel = addslashes($_POST['tel']);
                $cel = addslashes($_POST['cel']);
                $cidade = addslashes($_POST['cidade']);
                $setor = addslashes($_POST['setor']);
                $rua = addslashes(ucwords(strtolower(utf8_decode($_POST['rua']))));
                $numero = addslashes($_POST['num']);
                $complemento = addslashes(ucwords(strtolower(utf8_decode($_POST['complemento']))));

                $fornecedor = new Fornecedor();

                if($fornecedor->add($nome, $contato, $cnpj, $municipal, $estadual, $tel, $cel, $cidade, $setor, $rua, $numero, $complemento) == true){
                    header('Location:'.BASE_URL.'fornecedor');
                }else{
                    $cidade = new Cidade();
                    $viewData['cidades'] = $cidade->getClass();
                    $viewData['error'] = 'exist';
                    $this->loadTemplate('fornecedor_adicionar',$viewData);
                    exit;
                }

            }

            $cidade = new Cidade();
            
            $viewData['cidades'] = $cidade->getClass();

            $this->loadTemplate('fornecedor_adicionar',$viewData);
        }

        public function del($id){

            if(isset($id) && !empty($id)){

                $fornecedor = new Fornecedor();

                $fornecedor->delete($id);

                header('Location:'.BASE_URL.'fornecedor');

            }

            header('Location:'.BASE_URL.'fornecedor');

        }

        public function edit($id){
            
            $viewData = array(
                'error' => ''
            );

            if(isset($id) && !empty($id)){

                $fornecedor = new Fornecedor();
                $cidade = new Cidade();

                if(isset($_POST['nome']) && !empty('nome') && isset($_POST['contato']) && !empty('contato') && isset($_POST['cnpj']) && !empty($_POST['cnpj']) && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['setor']) && !empty($_POST['setor']) && isset($_POST['rua']) && !empty($_POST['rua'])){
                    
                    $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                    $contato = addslashes(ucwords(strtolower(utf8_decode($_POST['contato']))));
                    $cnpj = addslashes($_POST['cnpj']);
                    $municipal = addslashes($_POST['municipal']);
                    $estadual = addslashes($_POST['estadual']);
                    $tel = addslashes($_POST['tel']);
                    $cel = addslashes($_POST['cel']);
                    $cidade = addslashes($_POST['cidade']);
                    $setor = addslashes($_POST['setor']);
                    $rua = addslashes(ucwords(strtolower(utf8_decode($_POST['rua']))));
                    $numero = addslashes($_POST['num']);
                    $complemento = addslashes(ucwords(strtolower(utf8_decode($_POST['complemento']))));

                    $fornecedor->editar($id, $nome, $contato, $cnpj, $municipal, $estadual, $tel, $cel, $cidade, $setor, $rua, $numero, $complemento);
                    
                    header('Location:'.BASE_URL.'fornecedor');
                    
                    exit;
                }
                
                $viewData['cidades'] = $cidade->getClass();
                $viewData['fornecedor'] = $fornecedor->get($id);

                $this->loadTemplate('fornecedor_atualizar',$viewData);

            }else{
                header('Location:'.BASE_URL.'fornecedor');
            }
        }


        public function carregar_setor($id){

            if(isset($id) && !empty($id)){               

                $setor = new Bairro();

                $array = $setor->getSetor($id);

                $array = $this->converteArrayParaUtf8($array);
                header('Content-Type: application/json;');
                echo json_encode($array, JSON_UNESCAPED_UNICODE);

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