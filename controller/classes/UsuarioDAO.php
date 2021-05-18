<?php
    require_once "Conexao.php";
    require_once "Usuario.php";

    class UsuarioDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function buscar($nomeLogin){
            try{
                $query = $this->conexao->prepare("select * from usuario where nomeLogin = :u");
                $query->bindParam(":u", $nomeLogin);
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
                $query = $this->conexao->prepare("insert into usuario values (:nl, :s)");
                $query->bindValue(":nl", $usuario->getNomeLogin());
                $query->bindValue(":s", $usuario->getSenha());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function login(Usuario $usuario){
                try{
                    $query = $this->conexao->prepare("SELECT * FROM usuarios WHERE usuario=:nl AND senha=:s)");
                    $query->bindValue(":nl", $usuario->getNomeLogin());
                    $query->bindValue(":s", $usuario->getSenha());
                    $query->execute();
                    $registros = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
                    return $registros;
                }
                catch(PDOException $e){
                    echo "Erro no acesso aos dados: ". $e->getMessage();
                }
        }

    }

?>   