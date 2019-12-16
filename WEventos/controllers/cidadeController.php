<?php
    class CidadeController extends controller{

        public function index(){

            $viewData = array();

            //define quantidade de produtos na tela
            $itensPagina = 10;

            //posicao da paginacao
            $p = 1;

            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
            }

            $cidade = new Cidade();

            // pega quantidade total de produtos
            $total = $cidade->total();
            $total = $total['qtd'];

            //divide total de produtos pela quantidade de paginas
            $pagination = ceil($total/$itensPagina);

             //faz um select pela quantidade de itens pelo indice da pagina
            $viewData['cidades'] = $cidade->getAll($p,$itensPagina);

            $viewData['pagination'] = $pagination;

            $this->loadTemplate('cidade_cadastrar',$viewData);

        }

        // controller metodo adicionar
        public function add(){

            //cria um array que envia dados a pagina 
            $viewData = array(
                'error' => ''
            );

            // verifica se os dados estao preechidos
            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                
                $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));

                $cidade = new cidade();

                //enviar os dados para classe e caso ja exista o item e passado error para url
                if($cidade->add($nome)){
                    header('Location:'.BASE_URL.'cidade');
                }else{
                    header('Location:'.BASE_URL.'cidade/add?error=exist');
                }
            }

            //verifica se foi passado o error para url , caso esteja preenchido e erro e passado para view data
            //onde passa mensagem de item ja cadadastrado 
            if(!empty($_GET['error'])){
                $viewData['error'] = $_GET['error'];
            }

            $this->loadTemplate('cidade_adicionar',$viewData);
        }

        //controller metodo deletar
        public function del($id){
            //verifica se o id esta preenchido
            if(isset($id) && !empty($id)){

                $cidade = new Cidade();

                $cidade->del($id);

                header('Location: '.BASE_URL.'cidade');

            }

        }

        //controller metodo editar
        public function edit($id){

            $viewData = array(
                'error'=> ''
            );

            //verifica se o id esta preenchido 
            if(isset($id) && !empty($id)){

                $cidade = new Cidade();

                $viewData['dados'] = $cidade->get($id);

                //verifica se os dados foram enviados
                if(isset($_POST['nome']) && !empty($_POST['nome'])){

                    $nome = addslashes(ucwords(strtolower(utf8_decode($_POST['nome']))));

                    //verifica se os dados ja existe no banco , caso não existe e salvo a edição
                    if($cidade->editar($id, $nome)){
                        header('Location:'.BASE_URL.'cidade');
                    }else{
                        
                        $viewData = array(
                            'error'=> 'exist'
                        );

                        $viewData['dados'] = $cidade->get($id);
                    }
                }

                $this->loadTemplate('cidade_atualizar',$viewData);

            }
        }

    }
?>