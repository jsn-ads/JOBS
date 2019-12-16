<?php
    class EventosCliente extends Model{

        public function select($id){
            
            $array = "";

            $sql = "SELECT ce.* FROM cliente_evento ce
                    INNER JOIN cliente c 
                    ON c.id = ce.idcliente 
                    WHERE c.id = :id";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function getAll(){

            $array = array();

            $sql = 'SELECT * FROM cliente_evento ORDER BY data_evento';
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;

        }

        public function get($id){

            $array = array();

            $sql = "SELECT c.nome AS cliente , e.data_evento, e.nome FROM cliente_evento e 
                    INNER JOIN cliente c
                    ON c.id = e.idcliente
                    WHERE e.id = :id";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;

        }

        public function add($cliente, $data, $nome){

            $sql = "INSERT INTO cliente_evento SET nome = :nome, data_evento = :data_evento, idCliente = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':data_evento',$data);
            $sql->bindValue(':id',$cliente);
            $sql->execute();

        }

        public function delete($id){

            $sql = "DELETE FROM cliente_evento WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }

        public function editar($id, $data ,$evento){

            $sql = "UPDATE cliente_evento SET nome = :nome , data_evento = :data_evento WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$evento);
            $sql->bindValue(':data_evento',$data);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }
    }
?>