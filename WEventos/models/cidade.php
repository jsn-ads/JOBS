<?php
    class Cidade extends model{

        public function total(){
            $sql = "SELECT COUNT(*) as qtd FROM cidade";
            $sql = $this->db->query($sql);
            $total = $sql->fetch();
            return $total;
        }

        public function getAll($p, $itensPagina){

            $lista = array();

            $offsite = ($p - 1) * $itensPagina;

            $sql = "SELECT * FROM cidade ORDER BY nome LIMIT $offsite, $itensPagina";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll();
            }

            return $lista;
        }

        public function getclass(){

            $array = array();

            $sql = 'SELECT * FROM cidade ORDER BY nome';
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function select(){
            
            $lista = array();

            $sql = "SELECT * FROM cidade ORDER BY nome ASC";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll();
            }

            return $lista;
        }

        // adiciona o item no banco
        public function add($nome){
            //utiliza metodo duplicidade para ver se ja existe o item no banco
            if($this->duplicidade($nome) == false){

                $sql = "INSERT INTO cidade SET nome = :nome";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->execute();

                return true;
            }else{
                return false;
            }

        }

        //verifica se o item ja esta cadastrado no banco
        public function duplicidade($nome){
            $sql = "SELECT * FROM cidade WHERE nome = :nome";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }

        public function del($id){
            
            $sql = "DELETE FROM cidade WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }

        public function get($id){

            $array = array();

            $sql = "SELECT * FROM cidade WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();
            
            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;

        }

        public function editar($id, $nome){

            if($this->duplicidade($nome) == false){

                $sql = "UPDATE cidade SET nome = :nome WHERE id = :id";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':id', $id);
                $sql->bindValue(':nome', $nome);
                $sql->execute();

                return true;

            }else{
                return false;
            }

        }
    }
?>