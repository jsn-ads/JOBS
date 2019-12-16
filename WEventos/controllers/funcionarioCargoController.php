<?php
    class FuncionarioCargoController extends Controller{

        public function index(){

            $viewData = array();

            $itensPagina = 5;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $funcionario = new Funcionario();

            $funcionarioCargo = new FuncionarioCargo();

            $total = $funcionario->total();

            $total = $total['total'];

            $pagination = ceil($total/$itensPagina);

            $viewData['pagination'] = $pagination;

            $viewData['funcionarios'] = $funcionario->getAll($p, $itensPagina); 

            $viewData['funcionarioCargos'] = $funcionarioCargo->getAll();

            $this->loadTemplate('funcionarioCargo_cadastrar',$viewData);
        }

        public function add(){

            $viewData = array(
                'error' => ''
            );

            $funcionario = new Funcionario();

            $cargo = new Cargo();

            if(isset($_POST['funcionario']) && !empty($_POST['funcionario'])  && isset($_POST['cargo']) && !empty($_POST['cargo'])){

                $idFuncionario = addslashes($_POST['funcionario']);
                $idCargo = addslashes($_POST['cargo']);

                $funcionarioCargo = new FuncionarioCargo();

                if($funcionarioCargo->add($idFuncionario, $idCargo) == true){
                    
                    header('Location:'.BASE_URL.'funcionarioCargo');

                }else{
                    
                    $viewData['error'] = 'exist';
                    $viewData['funcionarios'] = $funcionario->select();
                    $viewData['cargos'] = $cargo->select();
                    
                    $this->loadTemplate('funcionarioCargo_adicionar',$viewData);
                }

                exit;

            }

            $viewData['funcionarios'] = $funcionario->select();

            $viewData['cargos'] = $cargo->select();

            $this->loadTemplate('funcionarioCargo_adicionar',$viewData);
        }

        public function del($id){

            if(isset($id) && !empty($id)){

                $funcionarioCargo = new FuncionarioCargo();

                $funcionarioCargo->delete($id);

            }

            header('Location:'.BASE_URL.'funcionarioCargo');
        
        }
    }
?>