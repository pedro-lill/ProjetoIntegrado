<?php
    require_once "Conexao.php";
    require_once "Tratamento.php";

    class TratamentoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from tratamento order by codTratamento");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Tratamento");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codTratamento){
            try{
                $query = $this->conexao->prepare("select * from tratamento where codTratamento = :t");
                $query->bindParam(":t", $codTratamento);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Tratamento");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(tratamento $tratamento){
            try{
                $query = $this->conexao->prepare("insert into tratamento values (:c, :t, :mt, :nm, :qm, :r, :o)");
                $query->bindValue(":c", $tratamento->getCodAnimal());
                $query->bindValue(":t", $tratamento->getCodTratamento());
                $query->bindValue(":mt", $tratamento->getMotivoTratamento());
                $query->bindValue(":nm", $tratamento->getNomeMedicamento());
                $query->bindValue(":qm", $tratamento->getQuantidadeMedicamento());
                $query->bindValue(":r", $tratamento->getResponsavel());
                $query->bindValue(":o", $tratamento->getObs());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(tratamento $tratamento){
            try{
                $query = $this->conexao->prepare("update tratamento set codAnimal = : c, codTratamento = :t, motivoTratamento = :mt, nomeMedicamento = :nm, quantidadeMedicamento = :qm, responsavel = :r, obs = :o where codTratamento = :t");
                $query->bindValue(":c", $tratamento->getCodAnimal());
                $query->bindValue(":t", $tratamento->getCodTratamento());
                $query->bindValue(":mt", $tratamento->getMotivoTratamento());
                $query->bindValue(":nm", $tratamento->getNomeMedicamento());
                $query->bindValue(":qm", $tratamento->getQuantidadeMedicamento());
                $query->bindValue(":r", $tratamento->getResponsavel());
                $query->bindValue(":o", $tratamento->getObs());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($codTratamento){
            try{
                $query = $this->conexao->prepare("delete from tratamento where codTratamento = :t");
                $query->bindValue(":t", $codTratamento);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   