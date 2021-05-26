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
                $query = $this->conexao->prepare("select * from inseminacao order by codInseminacao");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscarAltera($codInseminacao){
            try{
                $query = $this->conexao->prepare("select * from inseminacao where codInseminacao = :i");
                $query->bindParam(":i", $codInseminacao, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
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
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        
        public function buscaMes($mes){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE MONTH(dtInseminacao) = :m");//data
                $query->bindParam(":m", $mes, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscaMesAnoSecagem($mes, $ano){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE MONTH(dtPrevSecagem) = :m and YEAR(dtPrevSecagem) = :a");//data
                $query->bindParam(":m", $mes, PDO::PARAM_INT);
                $query->bindParam(":a", $ano, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscaMesAnoParto($mes, $ano){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE MONTH(dtPrevParto) = :m and YEAR(dtPrevParto) = :a");//data
                $query->bindParam(":m", $mes, PDO::PARAM_INT);
                $query->bindParam(":a", $ano, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscaAno($ano){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE YEAR(dtInseminacao) = :a");//data
                $query->bindParam(":a", $ano, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        

        public function buscaAnoSecagem($ano){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE YEAR(dtPrevSecagem) = :a");//data
                $query->bindParam(":a", $ano, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscaAnoParto($ano){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE YEAR(dtPrevParto) = :a");//data
                $query->bindParam(":a", $ano, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscaMesAno($mes, $ano){
            try{
                $query = $this->conexao->prepare("select * FROM inseminacao WHERE MONTH(dtInseminacao) = :m and YEAR(dtInseminacao) = :a");//data
                $query->bindParam(":m", $mes, PDO::PARAM_INT);
                $query->bindParam(":a", $ano, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Inseminacao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        } 

        public function inserir(Inseminacao $inseminacao){
            try{
                $query = $this->conexao->prepare("insert into inseminacao values (NULL, :c, :d, :ps, :pp, :t, :ir, :r, :o)");
                $query->bindValue(":c", $inseminacao->getCodAnimal());
                $query->bindValue(":d", $inseminacao->getDtInseminacao());
                $query->bindValue(":ps", $inseminacao->getDtPrevSecagem());
                $query->bindValue(":pp", $inseminacao->getDtPrevParto());
                $query->bindValue(":t", $inseminacao->getTouroInseminador());
                $query->bindValue(":ir", $inseminacao->getInseminadorResponsavel());
                $query->bindValue(":r", $inseminacao->getRetorno());
                $query->bindValue(":o", $inseminacao->getObs());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Inseminacao $inseminacao){
            try{
                $query = $this->conexao->prepare("update inseminacao set codAnimal = :c, dtInseminacao = :d, dtPrevSecagem =:ps, 
                dtPrevParto = :pp, touroInseminador = :t, inseminadorResponsavel = :ir, retorno = :r, 
                obs = :o where codInseminacao = :i");
                $query->bindValue(":c", $inseminacao->getCodAnimal());
                $query->bindValue(":d", $inseminacao->getDtInseminacao());
                $query->bindValue(":ps", $inseminacao->getDtPrevSecagem());
                $query->bindValue(":pp", $inseminacao->getDtPrevParto());
                $query->bindValue(":t", $inseminacao->getTouroInseminador());
                $query->bindValue(":ir", $inseminacao->getInseminadorResponsavel());
                $query->bindValue(":r", $inseminacao->getRetorno());
                $query->bindValue(":o", $inseminacao->getObs());
                $query->bindValue(":i", $inseminacao->getCodInseminacao(), PDO::PARAM_INT);
               
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