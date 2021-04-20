<?php
    require_once "Conexao.php";
    require_once "Ficha.php";

    class FichaDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from cadastro order by codAnimal");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Ficha");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codAnimal){
            try{
                $query = $this->conexao->prepare("select * from cadastro where codAnimal=:codAnimal");
                $query->bindParam(":codAnimal", $codAnimal);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Ficha");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(){

        }

        public function alterar(){

        }

        public function excluir(){

        }

    }

?>   