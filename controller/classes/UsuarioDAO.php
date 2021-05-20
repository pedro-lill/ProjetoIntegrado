<?php
    require_once "Conexao.php";
    require_once "Usuario.php";

    class UsuarioDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function acessar($nomeLogin, $senha){
            try{
                $query = $this->conexao->prepare("select * from usuario where nomeLogin = :nl");
                $query->bindParam(":nl", $nomeLogin);
                $query->execute();
                $registro = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
                if($query->rowCount() == 1){
                    if($senha != $registro[0]->getSenha())
                        return false; 
                    if($senha == $registro[0]->getSenha())
                        return true;
                }       
                else
                    return false; 
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


 

    }

?>   