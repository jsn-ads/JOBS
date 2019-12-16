<?php
    class Funcionario extends Model{

        public function duplicidade($cpf){

            $sql = "SELECT * FROM funcionario WHERE cpf = :cpf";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':cpf',$cpf);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function total(){

            $sql = "SELECT COUNT(*) as total FROM funcionario";
            $sql = $this->db->query($sql);
            
            $total = $sql->fetch();

            return $total;

        }

        public function select(){

            $array = array();

            $sql = "SELECT * FROM funcionario ORDER BY nome ASC";
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function getAll($p, $itensPagina){

            $array = array();

            $offsite = ($p - 1) * $itensPagina;
            
            $sql = "SELECT f.id, f.nome, f.cpf, f.cel, f.cel2, f.obs,  f.agencia, f.conta, f.id_banco, b.nome AS banco FROM funcionario f
                    LEFT JOIN banco b
                    ON f.id_banco = b.id LIMIT $offsite, $itensPagina";
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function get($id){

            $array = array();

            $sql = "SELECT f.id, f.nome, f.cpf, f.cel, f.cel2, f.obs,  f.agencia, f.conta, f.id_banco, b.nome AS banco FROM funcionario f
                    LEFT JOIN banco b
                    ON f.id_banco = b.id WHERE f.id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;

        }

        public function add($nome, $cpf, $cel, $cel2, $idBanco, $agencia, $conta, $obs){

            if($this->duplicidade($cpf) == false){

                $sql = "INSERT INTO funcionario SET nome = :nome , cpf = :cpf, cel = :cel, cel2 = :cel2, obs = :obs, id_banco = :id_banco, agencia = :agencia, conta = :conta";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':cpf',$cpf);
                $sql->bindValue(':cel',$cel);
                $sql->bindValue(':cel2',$cel2);
                $sql->bindValue(':obs',$obs);
                $sql->bindValue(':id_banco',$idBanco);
                $sql->bindValue(':agencia',$agencia);
                $sql->bindValue(':conta',$conta);
                $sql->execute();

                return true;
            }else{
                return false;
            }

        }
        
        public function editar($id, $nome, $cel, $cel2, $idBanco, $agencia, $conta, $obs){

            $sql = "UPDATE funcionario SET nome = :nome , cel = :cel, cel2 = :cel2, obs = :obs, id_banco = :id_banco, agencia = :agencia, conta = :conta WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':cel',$cel);
            $sql->bindValue(':cel2',$cel2);
            $sql->bindValue(':obs',$obs);
            $sql->bindValue(':id_banco',$idBanco);
            $sql->bindValue(':agencia',$agencia);
            $sql->bindValue(':conta',$conta);
            $sql->bindValue(':id',$id);
            $sql->execute();
        }
        
        public function delete($id){

            $sql = "DELETE FROM funcionario WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }
    }
?>