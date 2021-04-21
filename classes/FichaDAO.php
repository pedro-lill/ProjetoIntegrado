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
                $query = $this->conexao->prepare("select * from cadastro where codAnimal=:c");
                $query->bindParam(":c", $codAnimal);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Ficha");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(){
            try{
                $query = $this->conexao->prepare("insert into cadastro values (:c, :d, :m, :p, :e, :i)");
                $query->bindValue(":c", $ficha->getCodAnimal());
                $query->bindValue(":d", $ficha->getDtNascimento());
                $query->bindValue(":m", $ficha->getCodMae());
                $query->bindValue(":p", $ficha->getNomePai());
                $query->bindValue(":e", $ficha->getEstadoVida());
                $query->bindValue(":i", $ficha->getNomeImagem());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        }

        public function alterar(){
            try{
                $query = $this->conexao->prepare("update cadastro set codAnimal = :c, dtNascimento = :d,
                codMae = :m, nomePai = :p, estadoVida = :e, nomeImagem = :i 
                    where codAnimal = :c");
                $query->bindValue(":c", $ficha->getCodAnimal());
                $query->bindValue(":d", $ficha->getDtNascimento());
                $query->bindValue(":m", $ficha->getCodMae());
                $query->bindValue(":p", $ficha->getNomePai());
                $query->bindValue(":e", $ficha->getEstadoVida());
                $query->bindValue(":i", $ficha->getNomeImagem());
                
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        }

        public function excluir($cod){
            try{
                $query = $this->conexao->prepare("delete from cadastro where codAnimal = :c");
                $query->bindValue(":c", $cod);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   