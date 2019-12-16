<?php
    class CargoController extends Controller{

        public function index(){

            $viewData = array();

            $itensPagina = 10;

            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $cargo = new Cargo();

            $total = $cargo->total();

            $total = $total['qtd'];

            $pagination = ceil($total/$itensPagina);

            $viewData['cargos'] = $cargo->getAll($p, $itensPagina);

            $viewData['total_paginas'] = $pagination;

            $this->loadTemplate('cargo_cadastrar',$viewData);
        }

        public function add(){
            
            $viewData = array(
                'error' => ''
            );

            if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['valor']) && !empty($_POST['valor'])){

                $nome = addslashes(ucfirst(strtolower(utf8_decode($_POST['nome']))));
                $valor = addslashes($_POST['valor']);

                $cargo = new Cargo();

                if($cargo->add($nome, $valor) == true){
                    header('Location:'.BASE_URL.'cargo');
                    exit;
                }else{

                    $viewData['error'] = 'exist';
                    
                }

            }

            $this->loadTemplate('cargo_adicionar',$viewData);
        }

        public function edit($id){

            if(isset($id) && !empty($id)){

                $viewData = array();

                $cargo = new Cargo();

                if(isset($_POST['valor']) && !empty($_POST['valor'])){

                    $valor = addslashes($_POST['valor']);

                    $cargo->editar($id, $valor);

                    header('Location:'.BASE_URL.'cargo');

                    exit;
                }

                $viewData['cargo'] = $cargo->get($id);

                $this->loadTemplate('cargo_atualizar',$viewData);

                exit;
            
            }

            header('Location:'.BASE_URL.'cargo');
        }

        public function del($id){

            if(isset($id) && !empty($id)){

                $cargo = new Cargo();

                $cargo->delete($id);
            }

            header('Location:'.BASE_URL.'cargo');

        }
    }
?>