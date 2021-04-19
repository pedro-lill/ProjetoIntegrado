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
                $query = $this->conexao->prepare("select * from cadastro order by codigoAnimal");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Ficha");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codigoAnimal){
            try{
                $query = $this->conexao->prepare("select * from cadastro where codigoAnimal=:codigoAnimal");
                $query->bindParam(":codigoAnimal", $codigoAnimal);
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