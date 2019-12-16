<?php
    class Bairro extends Model{

        public function duplicidade($nome, $id){

            $sql = 'SELECT * FROM setor WHERE nome = :nome AND idcidade = :idcidade';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':idcidade',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }



        public function total(){
            
            $sql = "SELECT COUNT(*) AS qtd FROM cidade INNER JOIN setor
            ON cidade.id = setor.idcidade
            ORDER BY cidade.nome, setor.nome ASC";
            $sql = $this->db->query($sql);
            $total = $sql->fetch();
            return $total;
        }

        public function getAll($p, $itensPagina){

            $lista = array();

            $offsite = ( $p - 1) * $itensPagina;

            $sql = "SELECT cidade.nome AS cid , setor.nome, setor.id, cidade.id as idcid FROM cidade INNER JOIN setor
            ON cidade.id = setor.idcidade
            ORDER BY cidade.nome, setor.nome ASC LIMIT $offsite, $itensPagina";
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll(); 
            }
            return $lista;
        }

        public function getSetor($id){
            
            $array = array();

            $sql = "SELECT * FROM setor WHERE idcidade = :id ORDER BY nome";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;
        }


        public function get($id){

           $array = array();
            
           $sql = "SELECT cidade.nome AS cid , setor.nome, setor.id FROM cidade INNER JOIN setor
           ON cidade.id = setor.idcidade WHERE setor.id = :id";
           $sql = $this->db->prepare($sql);
           $sql->bindValue(':id', $id);
           $sql->execute();
           
           if($sql->rowCount() > 0){
                $array = $sql->fetch();
           }

           return $array;
           
        }

        public function add($nome, $id){

            if($this->duplicidade($nome, $id) == false){

                $sql = "INSERT INTO setor SET nome = :nome , idcidade = :idcidade";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':idcidade',$id);
                $sql->execute();

                return true;

            }else{
                return false;
            }
                
        }

        public function del($id){
            
            $sql = 'DELETE FROM setor WHERE id = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
            
        }

        public function editar($id, $nome, $idcid){

            if($this->duplicidade($nome,$idcid) == false){
                $sql = 'UPDATE setor SET nome = :nome WHERE id = :id';
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':id', $id);
                $sql->bindValue(':nome',$nome);
                $sql->execute();

                return true;
            }else{
                return false;
            }

        }

    }
?>