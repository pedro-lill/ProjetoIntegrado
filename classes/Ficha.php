<?php
    class Ficha{

        // atributos

        private $codigoAnimal;
        private $dataNascimento;
        private $codigoMae;
        private $nomePai;
        private $estadoVida;
        private $nomeImagem;

        // métodos

        public function getCodigoAnimal(){
            return $this->codigoAnimal;
        }

        public function setCodigoAnimal($cod){
            $this->codigoAnimal = $cod;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        public function getCodigoMae(){
            return $this->codigoMae;
        }

        public function setCodigoMae($codigoMae){
            $this->codigoMae = $codigoMae;
        }

        public function getNomePai(){
            return $this->nomePai;
        }

        public function setNomePai($nomePai){
            $this->nomePai = $nomePai;
        }     
        
        public function getEstadoVida(){
            return $this->estadoVida;
        }

        public function setEstadoVida($estadoVida){
            $this->estadoVida = $estadoVida;
        }  

        public function getNomeImagem(){
            return $this->nomeImagem;
        }

        public function setNomeImagem($nomeImagem){
            $this->nomeImagem = $nomeImagem;
        }  
    }
?>