<?php
    class ProdutoFornecedor extends Model{

        public function getAll(){
            
            $array = array();

            $sql = "SELECT pf.id, p.id as pid,p.descricao ,p.preco, f.id as fid, f.nome ,pf.valor_custo FROM prod_fornecedor pf
                    INNER JOIN produto p
                    ON p.id = pf.idproduto
                    INNER JOIN fornecedor f
                    ON f.id = pf.idfornecedor ORDER BY pf.valor_custo";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function get($id){

            $array = array();
            $sql = "SELECT pf.id, p.id AS pid,p.descricao ,p.preco, f.id AS fid, f.nome ,pf.valor_custo FROM prod_fornecedor pf
                    INNER JOIN produto p
                    ON p.id = pf.idproduto
                    INNER JOIN fornecedor f
                    ON f.id = pf.idfornecedor WHERE pf.id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;
        }

        public function add($idProduto,$idFornecedor,$valor){

            $array = array();

            $sql = "INSERT INTO prod_fornecedor SET idfornecedor = :fornecedor, idproduto = :produto, valor_custo = :valor";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':fornecedor',$idFornecedor);
            $sql->bindValue(':produto',$idProduto);
            $sql->bindValue(':valor',$valor);
            $sql->execute();

        }

        public function editar($id, $valor){

            $sql = "UPDATE prod_fornecedor SET valor_custo = :valor WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':valor',$valor);
            $sql->bindValue(':id',$id);
            $sql->execute();

        }

        public function delete($id){

            $sql = "DELETE FROM  prod_fornecedor WHERE id = :id ";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();
            
        }

        public function getFornecedor($id){

            $array = array();

            $sql = 'SELECT p.id, p.descricao, p.preco, pf.valor_custo, f.id as fid, f.nome FROM produto p
                    INNER JOIN prod_fornecedor pf
                    ON p.id = pf.idproduto
                    INNER JOIN fornecedor f
                    ON f.id = pf.idfornecedor
                    WHERE p.id = :id';

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;

        }

        public function getProduto($idpro, $idfor){

            $array = array();

            $sql = 'SELECT p.id, p.descricao, p.preco, pf.valor_custo, f.id AS fid, f.nome FROM produto p
                    INNER JOIN prod_fornecedor pf
                    ON p.id = pf.idproduto
                    INNER JOIN fornecedor f
                    ON f.id = pf.idfornecedor
                    WHERE p.id = :idpro AND f.id = :idfor';

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':idpro',$idpro);
            $sql->bindValue(':idfor',$idfor);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;
        }

    }
?>