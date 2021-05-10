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

        public function buscarAltera($codInseminacao){
            try{
                $query = $this->conexao->prepare("select * from inseminacao where codInseminacao = :i");
                $query->bindParam(":i", $codInseminacao);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "inseminacao");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }  

        public function buscaLista($codAnimal){
            try{
                $query = $this->conexao->prepare("select * from inseminacao where codAnimal = :c");//data
                $query->bindParam(":c", $codAnimal, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        
        public function buscaMes($dtInseminacao){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE MONTH(data) = '05'");//data
                $query->bindParam(":d", $dtInseminacao, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        } 

        public function inserir(inseminacao $inseminacao){
            try{
                $query = $this->conexao->prepare("insert into inseminacao values (NULL, :c, :d, :t, :ir, :r, :o, :ni)");
                $query->bindValue(":c", $inseminacao->getCodAnimal());
                $query->bindValue(":d", $inseminacao->getDtInseminacao());
                $query->bindValue(":t", $inseminacao->getTouroInseminador());
                $query->bindValue(":ir", $inseminacao->getInseminadorResponsavel());
                $query->bindValue(":r", $inseminacao->getRetorno());
                $query->bindValue(":o", $inseminacao->getObs());
                $query->bindValue(":ni", $inseminacao->getNovaDtInseminacao());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(inseminacao $inseminacao){
            try{
                $query = $this->conexao->prepare("update inseminacao set codAnimal = :c, dtInseminacao = :d, touroInseminador = :t, inseminadorResponsavel = :ir, retorno = :r, 
                obs = :o, novaDtInseminacao = :ni where codInseminacao = :i");
                $query->bindValue(":i", $inseminacao->getCodInseminacao());
                $query->bindValue(":c", $inseminacao->getCodAnimal());
                $query->bindValue(":d", $inseminacao->getDtInseminacao());
                $query->bindValue(":t", $inseminacao->getTouroInseminador());
                $query->bindValue(":ir", $inseminacao->getInseminadorResponsavel());
                $query->bindValue(":r", $inseminacao->getRetorno());
                $query->bindValue(":o", $inseminacao->getObs());
                $query->bindValue(":ni", $inseminacao->getNovaDtInseminacao());
               
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