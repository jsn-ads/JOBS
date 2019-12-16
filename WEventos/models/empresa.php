<?php
    class Empresa extends Model{

        private function duplicidade($cnpj){

            $sql = "SELECT * FROM empresa WHERE  cnpj = :cnpj";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':cnpj',$cnpj);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }

        public function getAll(){

            $array = array();

            $sql = "SELECT e.* , s.nome as setor, c.nome AS cidade FROM empresa e 
                    INNER JOIN setor s
                    ON e.id_setor_empresa = s.id
                    INNER JOIN cidade c
                    ON s.idcidade = c.id ORDER BY e.nome";

            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
  
        }

        public function get($id){

            $array = array();

            $sql = "SELECT e.* , s.nome as setor, c.nome AS cidade FROM empresa e 
                    INNER JOIN setor s
                    ON e.id_setor_empresa = s.id
                    INNER JOIN cidade c
                    ON s.idcidade = c.id WHERE e.id = :id";

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

            $sql = "SELECT e.* , s.nome as setor, c.nome AS cidade FROM empresa e 
                    INNER JOIN setor s
                    ON e.id_setor_empresa = s.id
                    INNER JOIN cidade c
                    ON s.idcidade = c.id ORDER BY e.nome";

            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function add($nome, $contato, $rg, $cpf, $cnpj, $tel, $cel, $cel2, $rua, $numero, $complemento, $idSetor){

            if($this->duplicidade($cnpj) == false){

                $sql = "INSERT INTO empresa SET nome = :nome , contato = :contato, rg = :rg, cpf = :cpf, cnpj = :cnpj, tel = :tel, cel = :cel, cel2 = :cel2, rua = :rua, numero = :numero, complemento = :complemento, id_setor_empresa = :id_setor";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':contato',$contato);
                $sql->bindValue(':rg',$rg);
                $sql->bindValue(':cpf',$cpf);
                $sql->bindValue(':cnpj',$cnpj);
                $sql->bindValue(':tel',$tel);
                $sql->bindValue(':cel',$cel);
                $sql->bindValue(':cel2',$cel2);
                $sql->bindValue(':rua',$rua);
                $sql->bindValue(':numero',$numero);
                $sql->bindValue(':complemento',$complemento);
                $sql->bindValue(':id_setor',$idSetor);
                $sql->execute();

                return true;
            }else{
                return false;
            }

        }

        public function editar($id, $nome, $contato, $rg, $cpf, $tel, $cel, $cel2, $rua, $numero, $complemento, $idSetor){

            $sql = "UPDATE empresa SET nome = :nome , contato = :contato, rg = :rg, cpf = :cpf, tel = :tel, cel = :cel, cel2 = :cel2, rua = :rua, numero = :numero, complemento = :complemento, id_setor_empresa = :id_setor WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':contato',$contato);
            $sql->bindValue(':rg',$rg);
            $sql->bindValue(':cpf',$cpf);
            $sql->bindValue(':tel',$tel);
            $sql->bindValue(':cel',$cel);
            $sql->bindValue(':cel2',$cel2);
            $sql->bindValue(':rua',$rua);
            $sql->bindValue(':numero',$numero);
            $sql->bindValue(':complemento',$complemento);
            $sql->bindValue(':id_setor',$idSetor);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }

        public function delete($id){

            $sql = "DELETE FROM empresa WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
            
        }

    }
?>