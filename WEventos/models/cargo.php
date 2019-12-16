<?php
    class Cargo extends Model{

        public function duplicidade($nome){

            $sql = "SELECT * FROM cargo WHERE descricao = :descricao";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':descricao',$nome);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
            
        }

        public function total(){

            $sql = "SELECT COUNT(*) as qtd FROM cargo";
            $sql = $this->db->query($sql);
            
            $total = $sql->fetch();

            return $total;
        }

        public function getAll($p, $itensPagina){

            $array = array();

            $offsite = ($p - 1) * $itensPagina;

            $sql = "SELECT * FROM cargo ORDER BY descricao LIMIT $offsite, $itensPagina";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function select(){

            $array = array();

            $sql = "SELECT * FROM cargo ORDER BY descricao";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function get($id){

            $array = array();

            $sql = "SELECT * FROM cargo WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;
        }

        public function getCargos($id){

            $array = array();

            $sql = "SELECT f.nome, c.id, c.descricao, c.valor FROM funcionario f
                    INNER JOIN funcionario_cargo fc
                    ON f.id = fc.id_funcionario_cargo
                    INNER JOIN cargo c
                    ON c.id = fc.id_cargo_funcionario WHERE f.id = :id";
            
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }
        
        public function add($nome, $valor){

            if($this->duplicidade($nome) == false){

                $sql = "INSERT INTO cargo SET descricao = :descricao , valor = :valor";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':descricao',$nome);
                $sql->bindValue(':valor',$valor);
                $sql->execute();

                return true;
            }else{
                return false;
            }
        }

        public function editar($id, $valor){

            $sql = "UPDATE cargo SET valor = :valor WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':valor',$valor);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }

        public function delete($id){

            $sql = "DELETE FROM cargo WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

        }
    }
?>