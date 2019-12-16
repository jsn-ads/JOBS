<?php
    class BancoController extends Controller{

        public function index(){

            $viewData = array();

            $itensPagina = 10;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $banco = new Banco();

            $total = $banco->total();
            $total = $total['qtd'];

            $pagination = ceil($total/$itensPagina);

            $viewData['pagination'] = $pagination;

            $viewData['bancos'] = $banco->getAll($p, $itensPagina);

            $this->loadTemplate('banco_cadastrar',$viewData);
        }

        public function add(){

            $viewData = array(
                'error' => ''
            );

            if(isset($_POST['nome']) && !empty($_POST['nome'])){

                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));

                $banco = new Banco();

                if($banco->add($nome) == true){

                    header('Location:'.BASE_URL.'banco');

                }else{

                    $viewData['error'] = 'exist';

                    $this->loadTemplate('banco_adicionar',$viewData);

                    exit;
                }

            }

            $this->loadTemplate('banco_adicionar',$viewData);

        }

        public function edit($id){

            if(isset($id) && !empty($id)){

                $viewData = array(
                    'error' => ''
                );

                $banco = new Banco();

                if(isset($_POST['nome']) && !empty($_POST['nome'])){

                    $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));

                    if($banco->editar($id, $nome) == true){

                        header('Location:'.BASE_URL.'banco');

                    }else{

                        $viewData['error'] = 'exist';
                        $viewData['banco'] = $banco->get($id);

                        $this->loadTemplate('banco_atualizar',$viewData);

                        exit;
                    }
                }

                $viewData['banco'] = $banco->get($id);

                $this->loadTemplate('banco_atualizar',$viewData);

                exit;
            }

            header('Location:'.BASE_URL.'banco');
        }

        public function del($id){

            if(isset($id) && !empty($id)){

                $banco = new Banco();

                $banco->delete($id);
            }

            header('Location:'.BASE_URL.'banco');
        }

    }
?>