<?php
    require_once "Conexao.php";
    require_once "Animal.php";

    class AnimalDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from animal order by codAnimal");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Animal");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscaMesAnoAnimal($mes, $ano){
            try{
                $query = $this->conexao->prepare("select * FROM animal WHERE MONTH(dtNascimento) = :m and YEAR(dtNascimento) = :a");//data
                $query->bindParam(":m", $mes, PDO::PARAM_INT);
                $query->bindParam(":a", $ano, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Animal");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codAnimal){
            try{
                $query = $this->conexao->prepare("select * from animal where codAnimal=:c");
                $query->bindParam(":c", $codAnimal, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Animal");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(Animal $animal){
            try{
                $query = $this->conexao->prepare("insert into animal values (:c, :d, :m, :p, :e, :mm, :dm, :i)");
                $query->bindValue(":c", $animal->getCodAnimal());
                $query->bindValue(":d", $animal->getDtNascimento());
                $query->bindValue(":m", $animal->getCodMae());
                $query->bindValue(":p", $animal->getNomePai());
                $query->bindValue(":e", $animal->getEstadoVida());
                $query->bindValue(":mm", $animal->getMotivoMorte());
                $query->bindValue(":dm", $animal->getDataMorte());
                $query->bindValue(":i", $animal->getNomeImagem());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Animal $animal){
            try{
                $query = $this->conexao->prepare("update animal set dtNascimento = :d, codMae = :m, nomePai = :p, estadoVida = :e, motivoMorte = :mm, dataMorte = :dm, nomeImagem = :i where codAnimal = :c");
                $query->bindValue(":c", $animal->getCodAnimal());
                $query->bindValue(":d", $animal->getDtNascimento());
                $query->bindValue(":m", $animal->getCodMae());
                $query->bindValue(":p", $animal->getNomePai());
                $query->bindValue(":e", $animal->getEstadoVida());
                $query->bindValue(":mm", $animal->getMotivoMorte());
                $query->bindValue(":dm", $animal->getDataMorte());
                $query->bindValue(":i", $animal->getNomeImagem());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($codAnimal){
            try{
                $query = $this->conexao->prepare("SET foreign_key_checks = 0;
                delete from 'animal','inseminacao', 'producao', 'tratamento' where 'inseminacao'.'codAnimal' = :c
                and 'producao'.'codAnimal' = :c and 'tratamento'.'codAnimal' = :c and 'producao'.'codAnimal' = :c and  'animal'.'codAnimal' = :c;
                SET foreign_key_checks = 1");
                $query->bindValue(":c", $codAnimal);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   