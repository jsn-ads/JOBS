<?php
    class BairroController extends Controller{

        public function index(){

            $viewData = array();

            $itensPagina = 10;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $bairro = new Bairro();

            $total = $bairro->total();
            $total = $total['qtd'];

            $pagination = ceil($total/$itensPagina);

            $viewData['bairros'] = $bairro->getAll($p,$itensPagina);

            $viewData['pagination'] = $pagination;

            $this->loadTemplate('bairro_cadastrar',$viewData);

            
        }

        public function add(){

            $viewData = array(
                'error'=>''
            );

            $cidade = new cidade();

            $viewData['cidades'] = $cidade->select();

            if(isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['nome']) && !empty($_POST['nome'])){

                $id = addslashes($_POST['cidade']);
                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                
                $bairro = new Bairro();

                if($bairro->add($nome,$id) == true){
                    header('Location:'.BASE_URL.'bairro');
                }else{
                    $viewData['error'] = 'exist';
                    $this->loadTemplate('bairro_adicionar',$viewData);
                    exit;
                }
            }

            $this->loadTemplate('bairro_adicionar',$viewData);
        }

        public function del($id){

            if(isset($id) && !empty($id)){
                $bairro = new Bairro();
                $bairro->del($id);
                header('Location:'.BASE_URL.'bairro');
            }else{
                header('Location:'.BASE_URL.'bairro');
            }
        }

        public function edit($id, $idcid){

            $viewData = array(
                'error' => ''
            );

            if(isset($id) && !empty($id)){

                $bairro = new Bairro();

                if(isset($_POST['nome']) && !empty($_POST['nome'])){

                    $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));

                    if($bairro->editar($id, $nome, $idcid) == true){
                        header('Location:'.BASE_URL.'bairro');
                    }else{
                        $viewData['error'] = 'exist'; 
                        $viewData['dados'] = $bairro->get($id);
                        $this->loadTemplate('bairro_atualizar',$viewData);
                        exit; 
                    }
                }

                $viewData['dados'] = $bairro->get($id);

                $this->loadTemplate('bairro_atualizar',$viewData);

            }else{

                header('Location:'.BASE_URL.'bairro');

            }
        }
    }
?>