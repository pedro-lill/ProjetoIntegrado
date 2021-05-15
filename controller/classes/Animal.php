<?php
    class Animal{

        private $codAnimal;
        private $dtNascimento;
        private $codMae;
        private $nomePai;
        private $estadoVida;
        private $nomeImagem;
        private $motivoMorte;
        private $dataMorte;


        public function getCodAnimal(){
            return $this->codAnimal;
        }

        public function setCodAnimal($codAnimal){
            $this->codAnimal = $codAnimal;
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

        public function getDataMorte(){
            return $this->dataMorte;
        }

        public function setDataMorte($dataMorte){
            $this->dataMorte = $dataMorte;
        }

        public function getMotivoMorte(){
            return $this->motivoMorte;
        }

        public function setMotivoMorte($motivoMorte){
            $this->motivoMorte = $motivoMorte;
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

        public function validate(){
            $erros = array();
            if(empty($this->getCodAnimal()))
                $erros[] = "É necessário informar o codigo do animal";
            if(empty($this->getCodMae()))
                $erros[] = "É necessário informar o codigo da mãe do animal";
            if(empty($this->getDtNascimento()))
                $erros[] = "É necessário informar a data de nascimento da vaca";
            if(empty($this->getNomePai()))
                $erros[] = "É necessário informar o nome do pai";
            if(empty($this->getEstadoVida()))
                $erros[] = "É necessário informar o estado de vida da vaca";
            if(empty($this->getNomeImagem()))
                $erros[] = "É necessário selecionar uma imagem";
            return $erros;                                 
        }

    }
?>