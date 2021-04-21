<?php
    require_once "Conexao.php";
    require_once "inseminacao.php";

    class inseminacaoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from inseminacao order by codInseminacao");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codAnimal){
            try{
                $query = $this->conexao->prepare("select * from inseminacao where codInseminacao = :i");
                $query->bindParam(":i", $codInseminacao);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(){
            try{
                $query = $this->conexao->prepare("insert into inseminacao values (:i, :c, :d, :t, :ir, :r, :o, :s, :p, :ni, :ns, :np)");
                $query->bindValue(":i", $ficha->getCodInseminacao());/*esse nao precisa se pa*/
                $query->bindValue(":c", $ficha->getCodAnimal());
                $query->bindValue(":d", $ficha->getDtInseminacao());
                $query->bindValue(":t", $ficha->getTouroInseminador());
                $query->bindValue(":ir", $ficha->getInseminadorResponsavel());
                $query->bindValue(":r", $ficha->getRetorno());
                $query->bindValue(":o", $ficha->getObs());
                $query->bindValue(":s", $ficha->getPrevisaoSecagem());
                $query->bindValue(":p", $ficha->getPrevisaoParto());
                $query->bindValue(":ni", $ficha->getNovaDtInseminacao());
                $query->bindValue(":ns", $ficha->getNovaPrevisaoSecagem());
                $query->bindValue(":np", $ficha->getNovaPrevisaoParto());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        }

        public function alterar(){
            try{
                $query = $this->conexao->prepare("update inseminacao set codAnimal = :c, dtInseminacao = :d, 
                touroInseminador = :t, inseminadorResponsavel = :ir, retorno = :r, 
                obs = :o, previsaoSecagem = :s, previsaoParto = :p, 
                novaDtInseminacao = :ni, novaPrevisaoSecagem = :ns,  novaPrevisaoParto = :np
                    where codInseminacao = :i");
                $query->bindValue(":c", $ficha->getCodAnimal());
                $query->bindValue(":d", $ficha->getDtInseminacao());
                $query->bindValue(":t", $ficha->getTouroInseminador());
                $query->bindValue(":ir", $ficha->getInseminadorResponsavel());
                $query->bindValue(":r", $ficha->getRetorno());
                $query->bindValue(":o", $ficha->getObs());
                $query->bindValue(":s", $ficha->getPrevisaoSecagem());
                $query->bindValue(":p", $ficha->getPrevisaoParto());
                $query->bindValue(":ni", $ficha->getNovaDtInseminacao());
                $query->bindValue(":ns", $ficha->getNovaPrevisaoSecagem());
                $query->bindValue(":np", $ficha->getNovaPrevisaoParto());
                $query->bindValue(":i", $ficha->getCodInseminacao());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        }

        public function excluir($codInseminacao){
            try{
                $query = $this->conexao->prepare("delete from inseminacao where codInseminacao = :i");
                $query->bindValue(":i", $codInseminacao);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   