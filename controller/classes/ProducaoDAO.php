<?php
    require_once "Conexao.php";
    require_once "Producao.php";

    class ProducaoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from producao order by codProducao");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Producao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscarAltera($codProducao){
            try{
                $query = $this->conexao->prepare("select * from producao where codProducao = :i");
                $query->bindParam(":i", $codProducao);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Producao");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        
        public function buscaMes($mes){
            try{
                $query = $this->conexao->prepare("select * FROM producao WHERE MONTH(dtColeta) = :d");//data
                $query->bindParam(":d", $mes, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "producao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscaLista($codAnimal){
            try{
                $query = $this->conexao->prepare("select * from producao where codAnimal = :c");
                $query->bindParam(":c", $codAnimal, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Producao");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(producao $producao){
            try{
                $query = $this->conexao->prepare("insert into producao values (NULL, :c, :d, :l, :pd)");
                $query->bindValue(":c", $producao->getCodAnimal());
                $query->bindValue(":d", $producao->getDtColeta());
                $query->bindValue(":l", $producao->getLitros());
                $query->bindValue(":pd", $producao->getPeriodoDia());
                echo $producao->getPeriodoDia();
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(producao $producao){
            try{
                $query = $this->conexao->prepare("update producao set codAnimal = : c, dtColeta = :d, litros = :l, periodoDia = :pd where codProducao = :p");
                $query->bindValue(":p", $producao->getCodProducao());
                $query->bindValue(":c", $producao->getCodAnimal());
                $query->bindValue(":d", $producao->getDtColeta());
                $query->bindValue(":l", $producao->getLitros());
                $query->bindValue(":pd", $producao->getPeriodoDia());
             
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($codProducao){
            try{
                $query = $this->conexao->prepare("delete from producao where codProducao = :p");
                $query->bindValue(":p", $codProducao);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   