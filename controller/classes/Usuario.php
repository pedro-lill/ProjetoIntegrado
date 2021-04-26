<?php
    class Usuario{
        
        private $codUsuario ;
        private $nomeLogin;
        private $senha;

        public function getCodUsuario (){
            return $this->codUsuario ;
        }

        public function setCodUsuario($codUsuario ){
            $this->codUsuario  = $codUsuario ;
        }

        public function getNomeLogin(){
            return $this->nomeLogin;
        }

        public function setNomeLogin($nomeLogin){
            $this->nomeLogin = $nomeLogin;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function validate(){
            $erros = array();
            if(empty($this->getCodUsuario()))
                $erros[] = "É necessário informar o codigo do usuario";
            if(empty($this->getNomeLogin()))
                $erros[] = "É necessário informar o nome de login";
            if(empty($this->getSenha()))
                $erros[] = "É necessário informar a senha";
            return $erros;                                 
        }
    }
?>