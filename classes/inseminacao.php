<?php
    class Ficha{

        // atributos

        private $codInseminacao;
        private $codAnimal;
        private $dtInseminacao;
        private $touroInseminador;
        private $inseminadorResponsavel;
        private $retorno;
        private $obs;
        private $previsaoSecagem;
        private $previsaoParto;
        private $novaDtInseminacao;
        private $novaPrevisaoSecagem;
        private $novaPrevisaoParto;

        // métodos

        public function getCodInseminacao(){
            return $this->getCodInseminacao;
        }

        public function setCodInseminacao($codInseminacao){
            $this->CodInseminacao = $codInseminacao;
        }

        public function getCodAnimal(){
            return $this->codAnimal;
        }

        public function setCodAnimal($cod){
            $this->codAnimal = $cod;
        }

        public function getDtInseminacao(){
            return $this->dtInseminacao;
        }

        public function setDtInseminacao($dtInseminacao){
            $this->dtInseminacao = $dtInseminacao;
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

        public function getPrevisaoSecagem(){
            return $this->previsaoSecagem;
        }

        public function setPrevisaoSecagem($previsaoSecagem){
            $this->previsaoSecagem= $previsaoSecagem;
        } 

        public function getPrevisaoParto(){
            return $this->previsaoParto;
        }

        public function setPrevisaoParto($previsaoParto){
            $this->previsaoParto = $previsaoParto;
        } 

        public function getNovaDtInseminacao(){
            return $this->novaDtInseminacao;
        }

        public function setNovaDtInseminacao($novaDtInseminacao){
            $this->novaDtInseminacao = $novaDtInseminacao;
        } 

        public function getNovaPrevisaoSecagem(){
            return $this->novaPrevisaoSecagem;
        }

        public function setNovaPrevisaoSecagem($novaPrevisaoSecagem){
            $this->novaPrevisaoSecagem = $novaPrevisaoSecagem;
        } 

        public function getNovaPrevisaoParto(){
            return $this->novaPrevisaoParto;
        }

        public function setNovaPrevisaoParto($novaPrevisaoParto){
            $this->novaPrevisaoParto = $novaPrevisaoParto;
        } 

        /*public function validate(){
            $erros = array();
            if(empty($this->getCodAnimal()))
                $erros[] = "É necessário informar o codigo do animal";
            if(empty($this->getCodMae()))
                $erros[] = "É necessário informar o codigo da mae";
            if(empty($this->getDtNascimento()))
                $erros[] = "É necessário informar a data de nascimento da vaca";
            if(empty($this->getNomePai()))
                $erros[] = "É necessário informar o nome do pai";
            if(empty($this->getEstadoVida()))
                $erros[] = "É necessário informar o estado de vida da vaca";
            if(empty($this->getobs()))
                $erros[] = "É necessário selecionar uma imagem";
            return $erros;                                 
        }*/
    }
?>