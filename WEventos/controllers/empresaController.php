<?php
    class EmpresaController extends Controller{

        public function index(){
            
            $viewData = array();
            
            $empresa = new Empresa();

            $viewData['empresas'] = $empresa->getAll();

            $this->loadTemplate('empresa_cadastrar',$viewData);

        }

        public function add(){

            $viewData = array(
                'error' => ''
            );

            $cidade = new Cidade();

            if(isset($_POST['empresa']) && !empty($_POST['empresa']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['setor']) && !empty($_POST['setor'])  && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['rua']) && !empty($_POST['rua']) && isset($_POST['cnpj']) && !empty($_POST['cnpj'])){

                $empresa = new Empresa();

                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['empresa']))));
                $contato = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                $rg = addslashes(utf8_decode($_POST['rg']));
                $cpf = addslashes(utf8_decode($_POST['cpf']));
                $cnpj = addslashes(utf8_decode($_POST['cnpj']));
                $tel = addslashes(utf8_decode($_POST['tel']));
                $cel = addslashes(utf8_decode($_POST['cel']));
                $cel2 = addslashes(utf8_decode($_POST['cel2']));
                $rua = addslashes(ucwords(strtolower(utf8_decode($_POST['rua']))));
                $numero = addslashes(utf8_decode($_POST['num']));
                $complemento = addslashes(ucwords(strtolower(utf8_decode($_POST['complemento']))));
                $idSetor = addslashes(utf8_decode($_POST['setor']));

                if($empresa->add($nome, $contato, $rg, $cpf, $cnpj, $tel, $cel, $cel2, $rua, $numero, $complemento, $idSetor) == true){
                    
                    header('Location:'.BASE_URL.'empresa');

                }else{

                    $viewData['error'] = 'exist';

                    $viewData['cidades'] = $cidade->select();

                    $this->loadTemplate('empresa_adicionar',$viewData);

                    exit;
                        
                }

            }
            
            $viewData['cidades'] = $cidade->select();

            $this->loadTemplate('empresa_adicionar',$viewData);
        }

        public function edit($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $empresa = new Empresa();

                $cidade = new Cidade();


                if(isset($_POST['empresa']) && !empty($_POST['empresa']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['setor']) && !empty($_POST['setor'])  && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['rua']) && !empty($_POST['rua'])){
                    
                    $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['empresa']))));
                    $contato = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                    $rg = addslashes(utf8_decode($_POST['rg']));
                    $cpf = addslashes(utf8_decode($_POST['cpf']));
                    $tel = addslashes(utf8_decode($_POST['tel']));
                    $cel = addslashes(utf8_decode($_POST['cel']));
                    $cel2 = addslashes(utf8_decode($_POST['cel2']));
                    $rua = addslashes(ucwords(strtolower(utf8_decode($_POST['rua']))));
                    $numero = addslashes(utf8_decode($_POST['num']));
                    $complemento = addslashes(ucwords(strtolower(utf8_decode($_POST['complemento']))));
                    $idSetor = addslashes(utf8_decode($_POST['setor']));

                    $empresa->editar($id, $nome, $contato, $rg, $cpf, $tel, $cel, $cel2, $rua, $numero, $complemento, $idSetor);

                    header('Location:'.BASE_URL.'empresa');

                    exit;

                }

                $viewData['cidades'] = $cidade->select();

                $viewData['empresa'] = $empresa->get($id);

                $this->loadTemplate('empresa_atualizar',$viewData);

                exit;

            }   

            header('Location:'.BASE_URL.'empresa');

        }

        public function del($id){

            if(isset($id) && !empty($id)){

                $empresa = new Empresa();

                $empresa->delete($id);

            }

            header('Location:'.BASE_URL.'empresa');
        }
    }
?>