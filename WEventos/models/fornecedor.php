<?php
    class Fornecedor extends Model{


        public function duplicidade($cnpj){

            $sql = "SELECT * FROM fornecedor WHERE cnpj = :cnpj";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':cnpj',$cnpj);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }

            return false;
        }

        public function total(){

            $sql = "SELECT COUNT(*) as total FROM fornecedor";
            $sql = $this->db->query($sql);
            
            $total = $sql->fetch();
            
            return $total;

        }

        public function getAll($p , $itensPagina){

            $array = array();

            $offside = ($p - 1) * $itensPagina;

            $sql = "SELECT f.id, f.nome, f.contato, f.cnpj, f.municipal, f.estadual,f.tel, f.cel, f.rua, f.numero, f.complemento, s.id AS idSetor, s.nome AS setor, c.id AS idCidade, c.nome AS cidade 
                    FROM fornecedor f INNER JOIN setor s 
                    ON f.id_setor = s.id 
                    INNER JOIN cidade c
                    ON s.idcidade = c.id
                    ORDER BY nome LIMIT $offside , $itensPagina";

            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function select(){

            $array = array();

            $sql = "SELECT * FROM fornecedor";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function get($id){
            
            $array = array();

            $sql = "SELECT f.id, f.nome, f.contato, f.cnpj, f.municipal, f.estadual, f.tel, f.cel, f.rua, f.numero, f.complemento, s.id AS idSetor, s.nome AS setor, c.id AS idCidade, c.nome AS cidade 
            FROM fornecedor f INNER JOIN setor s 
            ON f.id_setor = s.id 
            INNER JOIN cidade c
            ON s.idcidade = c.id
            WHERE f.id = :id";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;

        }

        public function add($nome,$contato, $cnpj,$municipal,$estadual, $tel, $cel, $cidade, $setor, $rua, $numero, $complemento){

            if($this->duplicidade($cnpj) == false){
                $sql = "INSERT INTO fornecedor SET nome = :nome, contato = :contato, cnpj = :cnpj, municipal = :municipal, estadual = :estadual, tel = :tel, cel = :cel, rua = :rua, numero = :numero, complemento = :complemento, id_setor = :id_setor";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':contato',$contato);
                $sql->bindValue(':cnpj',$cnpj);
                $sql->bindValue(':municipal',$municipal);
                $sql->bindValue(':estadual',$estadual);
                $sql->bindValue(':tel',$tel);
                $sql->bindValue(':cel',$cel);
                $sql->bindValue(':rua',$rua);
                $sql->bindValue(':numero',$numero);
                $sql->bindValue(':complemento',$complemento);
                $sql->bindValue(':id_setor',$setor);
                $sql->execute();

                return true;
            }else{
                return false;
            }
        }

        public function delete($id){

            $sql = "DELETE FROM fornecedor WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }
        
        public function editar($id, $nome, $contato, $cnpj, $municipal, $estadual, $tel, $cel, $cidade, $setor, $rua, $numero, $complemento){

            $sql = "UPDATE fornecedor SET nome = :nome, contato = :contato, cnpj = :cnpj, municipal = :municipal, estadual = :estadual, tel = :tel, cel = :cel, rua = :rua, numero = :numero, complemento = :complemento, id_setor = :id_setor WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':contato',$contato);
            $sql->bindValue(':cnpj',$cnpj);
            $sql->bindValue(':municipal',$municipal);
            $sql->bindValue(':estadual',$estadual);
            $sql->bindValue(':tel',$tel);
            $sql->bindValue(':cel',$cel);
            $sql->bindValue(':rua',$rua);
            $sql->bindValue(':numero',$numero);
            $sql->bindValue(':complemento',$complemento);
            $sql->bindValue(':id_setor',$setor);
            $sql->execute();

        }
        
    }
?>