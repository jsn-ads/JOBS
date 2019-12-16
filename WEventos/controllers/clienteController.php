<?php
    class ClienteController extends Controller{

        public function index(){

            $viewData = array();

            $itensPagina = 5;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $cliente = new Cliente();

            $total = $cliente->total();

            $total = $total['total'];
            
            $pagination = ceil($total/$itensPagina);

            $viewData['pagination'] = $pagination;
            $viewData['clientes'] = $cliente->getAll($p, $itensPagina);

            $this->loadTemplate('cliente_cadastrar',$viewData);
        }

        public function add(){

            $viewData = array(
                'error' => ''
            );

            $cidade = new Cidade();

            if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['setor']) && !empty($_POST['setor']) && isset($_POST['rua']) && !empty($_POST['rua'])){
                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                $cpf = addslashes($_POST['cpf']);
                $cnpj = addslashes($_POST['cnpj']);
                $email = addslashes(strtolower(utf8_decode($_POST['email'])));
                $instagran = addslashes(strtolower(utf8_decode($_POST['instagran'])));
                $tel = addslashes($_POST['tel']);
                $cel = addslashes($_POST['cel']);
                $cel2 = addslashes($_POST['cel2']);
                $idcid = addslashes($_POST['cidade']);
                $idsetor = addslashes($_POST['setor']);
                $rua = addslashes(ucwords(strtolower(utf8_decode($_POST['rua']))));
                $numero = addslashes($_POST['num']);
                $complemento = addslashes(ucwords(strtolower(utf8_decode($_POST['complemento']))));
                $observacao = addslashes(ucfirst(strtolower(utf8_decode($_POST['observacao']))));

                $cliente = new Cliente();

                if($cliente->add($nome, $cpf, $cnpj, $email, $instagran, $tel, $cel, $cel2, $idcid, $idsetor, $rua, $numero, $complemento, $observacao) == true){
                    header('Location: '.BASE_URL.'cliente');
                    exit;
                }else{
                    $viewData['cidades'] = $cidade->getClass();
                    $viewData['error'] = 'exist';
                    $this->loadTemplate('cliente_adicionar',$viewData);
                    exit;
                }
            }

            $viewData['cidades'] = $cidade->getClass();

            $this->loadTemplate('cliente_adicionar',$viewData);
        }

        public function del($id){
            
            if(isset($id) && !empty($id)){

                $cliente = new Cliente();

                $cliente->delete($id);

                header('Location: '.BASE_URL.'cliente');

                exit;
            }

            header('Location: '.BASE_URL.'cliente');

        }

        public function edit($id){

            $viewData = array(
                'error' => ''
            );

            $cliente = new Cliente();
            $local = new Cidade();

            if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['setor']) && !empty($_POST['setor']) && isset($_POST['rua']) && !empty($_POST['rua'])){
                
                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));
                $cpf = addslashes($_POST['cpf']);
                $cnpj = addslashes($_POST['cnpj']);
                $email = addslashes(strtolower((utf8_decode($_POST['cli-email']))));
                $instagran = addslashes(strtolower(utf8_decode($_POST['cli-instagran'])));
                $tel = addslashes($_POST['tel']);
                $cel = addslashes($_POST['cel']);
                $cel2 = addslashes($_POST['cel2']);
                $idcid = addslashes($_POST['cidade']);
                $idsetor = addslashes($_POST['setor']);
                $rua = addslashes(ucwords(strtolower(utf8_decode($_POST['rua']))));
                $numero = addslashes($_POST['num']);
                $complemento = addslashes(ucwords(strtolower(utf8_decode($_POST['complemento']))));
                $observacao = addslashes(ucfirst(strtolower(utf8_decode($_POST['observacao']))));

                $cliente->editar($id,$nome, $cpf, $cnpj, $email, $instagran, $tel, $cel, $cel2, $idcid, $idsetor, $rua, $numero, $complemento, $observacao);
                header('Location: '.BASE_URL.'cliente');  
            }

            
            $viewData['cidades'] = $local->getClass(); 
            $viewData['cliente'] = $cliente->get($id);

            $this->loadTemplate('cliente_atualizar',$viewData);
        }
    }
?>