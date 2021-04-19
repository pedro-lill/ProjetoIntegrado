<?php
    require_once "Conexao.php";
    require_once "Ficha.php";

    class FichaDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            // select * from sabor order by nome
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

        public function buscar($cod){
            // select * from sabor order by nome
            try{
                $query = $this->conexao->prepare("select * from codigo where codigo=:codigoAnimal");
                $query->bindParam(":cod", $cod);
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