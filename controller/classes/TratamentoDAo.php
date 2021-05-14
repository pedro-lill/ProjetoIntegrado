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

        public function buscarAltera($codTratamento){
            try{
                $query = $this->conexao->prepare("select * from tratamento where codTratamento = :i");
                $query->bindParam(":i", $codTratamento);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Tratamento");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }  

        public function buscaLista($codAnimal){
            try{
                $query = $this->conexao->prepare("select * from tratamento where codAnimal = :c");
                $query->bindParam(":c", $codAnimal, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Tratamento");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }           

        public function inserir(Tratamento $tratamento){
            try{
                $query = $this->conexao->prepare("insert into tratamento values (NULL, :c, :dt,  :mt, :nm, :qm, :r, :o)");
                $query->bindValue(":c", $tratamento->getCodAnimal());
                $query->bindValue("dt", $tratamento->getDtTratamento());
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

        public function alterar(Tratamento $tratamento){
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