<?php
    class Conexao{
        // atributo
        public static $conexao;

        // método
        public static function conecta(){
            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new PDO("mysql:host=localhost; dbname=projetointegrado", "cooptar", "12345");
                }
                catch(PDOException $e){
                    echo "Erro de conexão: ". $e->getMessage();
                    die();
                }
            }
            return self::$conexao;
        }
    }

?>   