<?php
    class Tratamento{
        
        private $codTratamento ;
        private $codAnimal;
        private $dtTratamento;
        private $motivoTratamento;
        private $nomeMedicamento;
        private $quantidadeMedicamento;
        private $responsavel	;
        private $obs;

        public function getCodTratamento (){
            return $this->codTratamento ;
        }

        public function setCodTratamento($codTratamento ){
            $this->codTratamento  = $codTratamento ;
        }

        public function getCodAnimal(){
            return $this->codAnimal;
        }

        public function setCodAnimal($codAnimal){
            $this->codAnimal = $codAnimal;
        }

        public function getDtTratamento(){
            return $this->dtTratamento;
        }

        public function setDtTratamento($dtTratamento){
            $this->dtTratamento = $dtTratamento;
        }

        public function getMotivoTratamento(){
            return $this->motivoTratamento;
        }

        public function setMotivoTratamento($motivoTratamento){
            $this->motivoTratamento = $motivoTratamento;
        }

        public function getNomeMedicamento(){
            return $this->nomeMedicamento;
        }

        public function setNomeMedicamento($nomeMedicamento){
            $this->nomeMedicamento = $nomeMedicamento;
        }     
        
        public function getQuantidadeMedicamento(){
            return $this->quantidadeMedicamento;
        }

        public function setQuantidadeMedicamento($quantidadeMedicamento){
            $this->quantidadeMedicamento = $quantidadeMedicamento;
        } 

        public function getResponsavel(){
            return $this->responsavel;
        }

        public function setResponsavel($responsavel){
            $this->responsavel= $responsavel;
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
            //if(empty($this->getCodTratamento()))
              //  $erros[] = "É necessário informar o codigo do tratamento";
            if(empty($this->getMotivoTratamento()))
                $erros[] = "É necessário informar o motivo do tratamento";
            if(empty($this->getNomeMedicamento()))
                $erros[] = "É necessário informar o nome do medicamento";
            if(empty($this->getQuantidadeMedicamento()))
                $erros[] = "É necessário informar a quantidade do medicamento";
            if(empty($this->getResponsavel()))
                $erros[] = "É necessário informar o responsavel";
            if(empty($this->getObs()))
                $erros[] = "É necessário informar a observação";
            return $erros;                                 
        }
    }
?>