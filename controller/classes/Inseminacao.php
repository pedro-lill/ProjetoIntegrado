<?php
    class Inseminacao{

        private $codInseminacao;
        private $codAnimal;
        private $dtInseminacao;
        private $dtPrevSecagem;
        private $dtPrevParto;
        private $touroInseminador;
        private $inseminadorResponsavel;
        private $retorno;
        private $obs;
    

        public function getCodInseminacao(){
            return $this->codInseminacao;
        }

        public function setCodInseminacao($codInseminacao){
            $this->codInseminacao = $codInseminacao;
        }

        public function getCodAnimal(){
            return $this->codAnimal;
        }

        public function setCodAnimal($codAnimal){
            $this->codAnimal = $codAnimal;
        }

        public function getDtInseminacao(){
            return $this->dtInseminacao;
        }

        public function setDtInseminacao($dtInseminacao){
            $this->dtInseminacao = $dtInseminacao;
        }

        public function getDtPrevSecagem(){
            return $this->dtPrevSecagem;
        }

        public function setDtPrevSecagem($dtPrevSecagem){
            $this->dtPrevSecagem = $dtPrevSecagem;
        }

        public function getDtPrevParto(){
            return $this->dtPrevParto;
        }

        public function setDtPrevParto($dtPrevParto){
            $this->dtPrevParto = $dtPrevParto;
        }

        public function getTouroInseminador(){
            return $this->touroInseminador;
        }

        public function setTouroInseminador($touroInseminador){
            $this->touroInseminador = $touroInseminador;
        }

        public function getInseminadorResponsavel(){
            return $this->inseminadorResponsavel;
        }

        public function setInseminadorResponsavel($inseminadorResponsavel){
            $this->inseminadorResponsavel = $inseminadorResponsavel;
        }     
        
        public function getRetorno(){
            return $this->retorno;
        }

        public function setRetorno($retorno){
            $this->retorno = $retorno;
        }  

        public function getObs(){
            return $this->obs;
        }

        public function setObs($obs){
            $this->obs = $obs;
        }

        public function validate(){
            $erros = array();
            if(empty($this->getCodAnimal()))
                $erros[] = "É necessário informar o codigo do animal";
            if(empty($this->getTouroInseminador()))
                $erros[] = "É necessário informar o touro inseminador";
            if(empty($this->getInseminadorResponsavel()))
                $erros[] = "É necessário informar o inseminador responsavel";
            if(empty($this->getRetorno()))
                $erros[] = "É necessário informar o retorno da inseminação";
            if(empty($this->getObs()))
                $erros[] = "É necessário informar a observação";
            return $erros;                                 
        }
        
    }
?>
