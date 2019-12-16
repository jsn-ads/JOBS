<?php
    class FuncionarioController extends Controller{

        public function index(){
            
            $viewData = array();

            $itensPagina = 5;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $funcionario = new Funcionario();

            $total = $funcionario->total();

            $total = $total['total'];

            $pagination = ceil($total/$itensPagina);

            $viewData['pagination'] = $pagination;

            $viewData['funcionarios'] = $funcionario->getAll($p, $itensPagina);

            $this->loadTemplate('funcionario_cadastrar',$viewData);

        }

        public function add(){

            $viewData = array(
                'error' => ''
            );

            $banco = new Banco();

            if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['cel']) && !empty($_POST['cel']) && isset($_POST['cel2']) && !empty($_POST['cel2'])){

                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                $cpf = addslashes($_POST['cpf']);
                $cel = addslashes($_POST['cel']);
                $cel2 = addslashes($_POST['cel2']);
                $idBanco = addslashes($_POST['banco']);
                $agencia = addslashes($_POST['agencia']);
                $conta = addslashes($_POST['conta']);
                $obs = addslashes(ucfirst($_POST['obs']));

                $funcionario = new Funcionario();

                if($funcionario->add($nome, $cpf, $cel, $cel2, $idBanco, $agencia, $conta, $obs) == true){
                    
                    header('Location:'.BASE_URL.'funcionario');

                    exit;
                
                }else{

                    $viewData['error'] = 'exist';

                    $viewData['bancos'] = $banco->select();
                    
                    $this->loadTemplate('funcionario_adicionar',$viewData);

                    exit;

                }

            }

            $viewData['bancos'] = $banco->select();
            
            $this->loadTemplate('funcionario_adicionar',$viewData);

        }

        public function edit($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $funcionario = new Funcionario();

                $banco = new Banco();

                if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['cel']) && !empty($_POST['cel']) && isset($_POST['cel2']) && !empty($_POST['cel2'])){
                    
                    $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                    $cel = addslashes($_POST['cel']);
                    $cel2 = addslashes($_POST['cel2']);
                    $idBanco = addslashes($_POST['banco']);
                    $agencia = addslashes($_POST['agencia']);
                    $conta = addslashes($_POST['conta']);
                    $obs = addslashes(ucfirst(utf8_decode($_POST['obs'])));

                    $funcionario->editar($id, $nome, $cel, $cel2, $idBanco, $agencia, $conta, $obs);

                    header('Location:'.BASE_URL.'funcionario');

                    exit;

                }

                $viewData['bancos'] = $banco->select();

                $viewData['funcionario'] = $funcionario->get($id);

                $this->loadTemplate('funcionario_atualizar',$viewData);

                exit;

            }

            header('Location:'.BASE_URL.'funcionario');

        }

        public function del($id){

            if(isset($id) && !empty($id)){

                $funcionario = new Funcionario();

                $funcionario->delete($id);

            }

            header('Location:'.BASE_URL.'funcionario');
        }

    }
?>