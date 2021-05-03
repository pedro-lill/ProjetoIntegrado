<?php
    require_once "Conexao.php";
    require_once "Inseminacao.php";

    class InseminacaoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from inseminacao order by codAnimal");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codAnimal){
            try{
                $query = $this->conexao->prepare("select * from inseminacao where codAnimal = :a");
                $query->bindParam(":a", $codAnimal);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(inseminacao $inseminacao){
            try{
                $query = $this->conexao->prepare("insert into inseminacao values (NULL, :c, :d, :t, :ir, :r, :o, :s, :p, :ni, :ns, :np)");
                $query->bindValue(":c", $inseminacao->getCodAnimal());
                $query->bindValue(":d", $inseminacao->getDtInseminacao());
                $query->bindValue(":t", $inseminacao->getTouroInseminador());
                $query->bindValue(":ir", $inseminacao->getInseminadorResponsavel());
                $query->bindValue(":r", $inseminacao->getRetorno());
                $query->bindValue(":o", $inseminacao->getObs());
                $query->bindValue(":s", $inseminacao->getPrevisaoSecagem());
                $query->bindValue(":p", $inseminacao->getPrevisaoParto());
                $query->bindValue(":ni", $inseminacao->getNovaDtInseminacao());
                $query->bindValue(":ns", $inseminacao->getNovaPrevisaoSecagem());
                $query->bindValue(":np", $inseminacao->getNovaPrevisaoParto());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(inseminacao $inseminacao){
            try{
                $query = $this->conexao->prepare("update inseminacao set codAnimal = :c, dtInseminacao = :d, touroInseminador = :t, inseminadorResponsavel = :ir, retorno = :r, 
                obs = :o, previsaoSecagem = :s, previsaoParto = :p, novaDtInseminacao = :ni, novaPrevisaoSecagem = :ns,  novaPrevisaoParto = :np where codInseminacao = :i");
                $query->bindValue(":c", $inseminacao->getCodAnimal());
                $query->bindValue(":d", $inseminacao->getDtInseminacao());
                $query->bindValue(":t", $inseminacao->getTouroInseminador());
                $query->bindValue(":ir", $inseminacao->getInseminadorResponsavel());
                $query->bindValue(":r", $inseminacao->getRetorno());
                $query->bindValue(":o", $inseminacao->getObs());
                $query->bindValue(":s", $inseminacao->getPrevisaoSecagem());
                $query->bindValue(":p", $inseminacao->getPrevisaoParto());
                $query->bindValue(":ni", $inseminacao->getNovaDtInseminacao());
                $query->bindValue(":ns", $inseminacao->getNovaPrevisaoSecagem());
                $query->bindValue(":np", $inseminacao->getNovaPrevisaoParto());
                $query->bindValue(":i", $inseminacao->getCodInseminacao());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
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