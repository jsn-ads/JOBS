<?php
    class Banco extends Model{

        private function duplicidade($nome){

            $sql = "SELECT * FROM banco WHERE nome = :nome";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function total(){

            $sql = "SELECT COUNT(*) as qtd FROM banco";
            $sql = $this->db->query($sql);

            $total = $sql->fetch();

            return $total;

        }

        public function select(){

            $array = array();

            $sql = "SELECT * FROM banco ORDER BY nome";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
            
        }

        public function getAll($p, $itensPagina){

            $array = array();

            $offsite = ( $p - 1) * $itensPagina;

            $sql = "SELECT * FROM banco ORDER BY nome LIMIT $offsite , $itensPagina";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;

        }

        public function get($id){

            $array = array();

            $sql = "SELECT * FROM banco WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;

        }

        public function add($nome){
            
            if($this->duplicidade($nome) == false){

                $sql = "INSERT INTO banco SET nome = :nome";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->execute();

                return true;
            }else{
                return false;
            }
        }

        public function editar($id, $nome){
            
            if($this->duplicidade($nome) == false){

                $sql = "UPDATE banco SET nome = :nome WHERE id = :id";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':id',$id);
                $sql->execute();

                return true;
            }else{
                return false;
            }
        }

        public function delete($id){

            $sql = "DELETE FROM banco WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }
    }
?>