<?php
    class Ficha{

        // atributos

        private $codAnimal;
        private $dtNascimento;
        private $codMae;
        private $nomePai;
        private $estadoVida;
        private $nomeImagem;

        // métodos

        public function getCodAnimal(){
            return $this->codAnimal;
        }

        public function setCodAnimal($cod){
            $this->codAnimal = $cod;
        }

        public function getDtNascimento(){
            return $this->dtNascimento;
        }

        public function setDtNascimento($dtNascimento){
            $this->dtNascimento = $dtNascimento;
        }

        public function getCodMae(){
            return $this->codMae;
        }

        public function setCodMae($codMae){
            $this->codMae = $codMae;
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