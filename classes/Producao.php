<?php
    class Producao{

        // atributos
        
        private $codProducao;
        private $codAnimal;
        private $dtColeta;
        private $litros;
        private $periodoDia;

        // métodos

        public function getCodProducao(){
            return $this->codProducao;
        }

        public function setCodProducao($codProducao){
            $this->codProducao = $codProducao;
        }

        public function getCodAnimal(){
            return $this->codAnimal;
        }

        public function setCodAnimal($codAnimal){
            $this->codAnimal = $codAnimal;
        }

        public function getDtColeta(){
            return $this->dtCoelta;
        }

        public function setDtColeta($dtColeta){
            $this->dtColeta = $dtColeta;
        }

        public function getLitros(){
            return $this->litros;
        }

        public function setLitros($litros){
            $this->litros = $litros;
        }     
        
        public function getPeriodoDia(){
            return $this->periodoDia;
        }

        public function setPeriodoDia($periodoDia){
            $this->periodoDia = $periodoDia;
        } 

        public function validate(){
            $erros = array();
            if(empty($this->getCodAnimal()))
                $erros[] = "É necessário informar o codigo do animal";
            if(empty($this->getDtColeta()))
                $erros[] = "É necessário informar a data de coleta";
            if(empty($this->getLitros()))
                $erros[] = "É necessário informar o valor de produção em litros";
            if(empty($this->getPeriodoDia()))
                $erros[] = "É necessário informar em que periodo do dia foi realizada a coleta";
            return $erros;                                 
        }
    }
?>