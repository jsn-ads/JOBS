<?php
    class Produto extends model{

        public function getAll($page, $perPage){

            $offset = ($page - 1) * $perPage;

            $lista = array();
            
            $sql = "SELECT * FROM produto ORDER BY descricao LIMIT $offset , $perPage";
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll();
            }
        
            return $lista;
        }

        public function get($id){
            
            $array = array();

            $sql = "SELECT * FROM produto WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;

        }

        public function select(){

            $array = array();

            $sql = "SELECT * FROM produto ORDER BY descricao";
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function totalProdutos(){
            $sql = "SELECT COUNT(*) as qtd FROM produto";
            $sql = $this->db->query($sql);
            $total = $sql->fetch();
            return $total;
        }

        public function add($desc, $valor){
            if($this->produtoExiste($desc) == false){
                $sql = "INSERT INTO produto SET descricao = :descricao, preco = :preco";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':descricao', $desc);
                $sql->bindValue(':preco',$valor);
                $sql->execute();
                
                return true;
            }else{
                return false;
            }
        }

        public function del($id){
            $sql = "DELETE FROM produto WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();
        }

        public function editar($id, $desc, $valor){

            $sql = "UPDATE produto SET descricao = :descricao, preco = :preco WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->bindValue(':descricao',$desc);
            $sql->bindValue(':preco',$valor);
            $sql->execute();

        }

        public function produtoExiste($desc){
            $sql = "SELECT * FROM produto WHERE descricao = :descricao";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':descricao', $desc);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

    }
?>