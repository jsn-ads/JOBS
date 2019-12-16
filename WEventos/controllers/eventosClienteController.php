<?php
    class EventosClienteController extends Controller{

        public function index(){
            
            $viewData = array();

            $itensPagina = 5;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $eventosCliente = new EventosCliente();
            $cliente = new Cliente();

            $total = $cliente->total();
            $total = $total['total'];
            $pagination = ceil($total/$itensPagina);

            $viewData['pagination'] = $pagination;
            $viewData['clientes'] = $cliente->getAll($p, $itensPagina);
            $viewData['eventos'] = $eventosCliente->getAll();
            
            $this->loadTemplate('eventosCliente_cadastrar',$viewData);
        }

        public function add(){

            $viewData = array();

            $cliente = new Cliente();
            $eventosCliente = new EventosCliente();

            if(isset($_POST['cliente']) && !empty($_POST['cliente']) && isset($_POST['data']) && !empty($_POST['data']) && isset($_POST['nome']) && !empty($_POST['nome'])){

                $cliente = addslashes($_POST['cliente']);
                $data = addslashes($_POST['data']);
                $nome = addslashes(ucfirst(strtolower(utf8_decode($_POST['nome']))));

                $eventosCliente->add($cliente, $data, $nome);

                header('Location: '.BASE_URL.'eventosCliente');

                exit;
            }
            
            $viewData['clientes'] = $cliente->select();
            
            $this->loadTemplate('eventosCliente_adicionar',$viewData);

        }

        public function del($id){

            if(isset($id) && !empty($id)){

                $eventosCliente = new EventosCliente();

                $eventosCliente->delete($id);
            }

            header('Location:'.BASE_URL.'eventosCliente');
        }

        public function edit($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $eventosCliente = new EventosCliente();

                if(isset($_POST['data']) && !empty($_POST['data']) && isset($_POST['nome']) && !empty($_POST['nome'])){

                    $data = addslashes($_POST['data']);
                    $evento = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));

                    $eventosCliente->editar($id, $data, $evento);

                    header('Location:'.BASE_URL.'eventosCliente');

                    exit;

                }

                $viewData['dados'] = $eventosCliente->get($id);

                $this->loadTemplate('eventosCliente_atualizar',$viewData);

                exit;
            }   

            header('Location:'.BASE_URL.'eventosCliente');

        }

    }
?>