<?php 

   class Data{

        public $Dia;
        public $Mes;
        public $Ano;

        public function mostra(){
            return "{$this->Dia}/{$this->Mes}/{$this->Ano}";
        }

        public function __toString(){
            return $this->mostra();
        }

        public function __construct($dia, $mes, $ano){
            $this->dia = $Dia;
            $this->mes = $Mes;
            $this->ano = $Ano;

        }

    }

    //Resposta questão 10: Facilita principalmente a organização do código. 