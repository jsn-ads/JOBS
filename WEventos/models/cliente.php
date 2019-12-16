<?php
    class Cliente extends Model{

        public function duplicidade($cpf , $cnpj){

            $sql = "SELECT * FROM cliente WHERE cpf = :cpf OR cnpj = :cnpj";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':cpf',$cpf);
            $sql->bindValue(':cnpj',$cnpj);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function total(){

            $sql = "SELECT COUNT(*) as total FROM cliente";
            $sql = $this->db->query($sql);
            
            $total = $sql->fetch();
            
            return $total;
        }

        public function select(){

            $array = array();

            $sql = "SELECT * FROM cliente ORDER BY nome";
            $sql = $this->db->query($sql);
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function get($id){

            $array = array();

            $sql = "SELECT c.id,c.nome , c.cpf, c.cnpj, c.email, c.instagran, c.tel, c.cel, c.cel2, c.rua, c.numero, c.complemento, c.obs, s.nome AS setor, s.id as idSetor, cid.nome AS cidade, cid.id as idCidade
                    FROM cliente c INNER JOIN setor s 
                    ON c.id_setor_cliente = s.id
                    INNER JOIN cidade cid
                    ON s.idcidade = cid.id WHERE c.id = :id";
            
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;

        }

        public function getAll($p, $itensPagina){

            $array = array();

            $offside = ($p - 1) * $itensPagina;

            $sql = "SELECT c.id,c.nome , c.cpf, c.cnpj, c.email, c.instagran, c.tel, c.cel, c.cel2, c.rua, c.numero, c.complemento, c.obs, s.nome AS setor, cid.nome AS cidade
                    FROM cliente c INNER JOIN setor s 
                    ON c.id_setor_cliente = s.id
                    INNER JOIN cidade cid
                    ON s.idcidade = cid.id ORDER BY c.nome LIMIT $offside, $itensPagina";

            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function add($nome, $cpf, $cnpj, $email, $instagran, $tel, $cel, $cel2, $idcid, $idsetor, $rua, $numero, $complemento, $observacao){
            
            if($this->duplicidade($cpf, $cnpj) == false){
                $sql = "INSERT INTO cliente SET nome = :nome , cpf = :cpf, cnpj = :cnpj, email = :email, instagran = :instagran, tel = :tel, cel = :cel, cel2 = :cel2, rua = :rua, numero = :numero, complemento = :complemento, id_setor_cliente = :id_setor, obs = :obs";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':cpf',$cpf);
                $sql->bindValue(':cnpj',$cnpj);
                $sql->bindValue(':email',$email);
                $sql->bindValue(':instagran',$instagran);
                $sql->bindValue(':tel',$tel);
                $sql->bindValue(':cel',$cel);
                $sql->bindValue(':cel2',$cel2);
                $sql->bindValue(':rua',$rua);
                $sql->bindValue(':numero',$numero);
                $sql->bindValue(':complemento',$complemento);
                $sql->bindValue(':id_setor',$idsetor);
                $sql->bindValue(':obs', $observacao);
                $sql->execute();
                return true;
            }else{
                return false;
            }
        }

        public function delete($id){

            $sql = "DELETE FROM cliente WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();
        }

        public function editar($id,$nome, $cpf, $cnpj, $email, $instagran, $tel, $cel, $cel2, $idcid, $idsetor, $rua, $numero, $complemento, $observacao){
             
            $sql = "UPDATE cliente SET nome = :nome, cpf = :cpf, cnpj = :cnpj, email = :email, instagran = :instagran, tel = :tel, cel = :cel, cel2 = :cel2, rua = :rua, numero = :numero, complemento = :complemento, id_setor_cliente = :id_setor, obs = :obs WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':cpf',$cpf);
            $sql->bindValue(':cnpj',$cnpj);
            $sql->bindValue(':email',$email);
            $sql->bindValue(':instagran',$instagran);
            $sql->bindValue(':tel',$tel);
            $sql->bindValue(':cel',$cel);
            $sql->bindValue(':cel2',$cel2);
            $sql->bindValue(':rua',$rua);
            $sql->bindValue(':numero',$numero);
            $sql->bindValue(':complemento',$complemento);
            $sql->bindValue(':id_setor',$idsetor);
            $sql->bindValue(':obs', $observacao);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }

    }
?>