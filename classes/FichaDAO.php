<?php
    require_once "Conexao.php";
    require_once "Ficha.php";

    class fichaDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from ficha order by codAnimal");
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
                $query = $this->conexao->prepare("select * from ficha where codAnimal=:c");
                $query->bindParam(":c", $codAnimal, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Ficha");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(ficha $ficha){
            try{
                $query = $this->conexao->prepare("insert into ficha values (:c, :d, :m, :p, :e, :i)");
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

        public function alterar(ficha $ficha){
            try{
                $query = $this->conexao->prepare("update ficha set dtNascimento = :d,
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

        public function excluir($cod){
            try{
                $query = $this->conexao->prepare("delete from ficha where codAnimal = :c");
                $query->bindValue(":c", $cod);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   