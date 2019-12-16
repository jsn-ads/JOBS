<?php
    class FuncionarioCargo extends Model{

        public function duplicidade($idFuncionario, $idCargo){

            $sql = "SELECT * FROM funcionario_cargo WHERE id_funcionario_cargo = :id1 AND id_cargo_funcionario = :id2";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id1', $idFuncionario);
            $sql->bindValue(':id2',$idCargo);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }

        public function getAll(){

            $array = array();

            $sql = "SELECT fc.id, fc.id_funcionario_cargo, fc.id_cargo_funcionario, c.descricao, c.valor FROM funcionario_cargo fc
                    INNER JOIN cargo c 
                    ON fc.id_cargo_funcionario = c.id";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function add($idFuncionario, $idCargo){

            if($this->duplicidade($idFuncionario, $idCargo) == false){
                $sql = "INSERT INTO funcionario_cargo SET id_funcionario_cargo = :id1 , id_cargo_funcionario = :id2";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':id1', $idFuncionario);
                $sql->bindValue(':id2',$idCargo);
                $sql->execute();

                return true;
            }else{
                return false;
            }
        }

        public function addFuncionario($idfunc, $idcargo){

            $array = array();

            $sql = 'SELECT fc.id, f.nome, c.id,c.descricao, c.valor FROM funcionario f
                    INNER JOIN funcionario_cargo fc
                    ON f.id = fc.id_funcionario_cargo
                    INNER JOIN cargo c
                    ON c.id = fc.id_cargo_funcionario WHERE f.id = :idfunc AND c.id = :idcargo';
                    
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':idfunc',$idfunc);
            $sql->bindValue(':idcargo',$idcargo);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;
        }

        public function delete($id){

            $sql = "DELETE FROM funcionario_cargo WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();
        }
    }
?>