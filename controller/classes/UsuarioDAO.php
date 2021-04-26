<?php
    require_once "Conexao.php";
    require_once "Usuario.php";

    class UsuarioDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from usuarios order by codUsuario");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codUsuario){
            try{
                $query = $this->conexao->prepare("select * from usuarios where codUsuario = :u");
                $query->bindParam(":u", $codUsuario);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(Usuario $usuario){
            try{
                $query = $this->conexao->prepare("insert into usuarios values (:c, :nl, :s)");
                $query->bindValue(":c", $usuario->getCodUsuario());
                $query->bindValue(":nl", $usuario->getNomeLogin());
                $query->bindValue(":s", $usuario->getSenha());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Usuario $usuario){
            try{
                $query = $this->conexao->prepare("update usuarios set nomeLogin = :nl, senha = :s, where codUsuario = :c");
                $query->bindValue(":c", $usuario->getCodUsuario());
                $query->bindValue(":nl", $usuario->getNomeLogin());
                $query->bindValue(":s", $usuario->getSenha());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($codUsuario){
            try{
                $query = $this->conexao->prepare("delete from usuarios where codUsuario = :c");
                $query->bindValue(":c", $codUsuario);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   