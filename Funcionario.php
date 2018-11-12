<?php

class Funcionario{

        public $departamento;
        public $salario;
        public $dataEntrada;
        public $cpf;

    public function recebeAumento(){
     $this->salario = $this->salario*0.1;
    }


    public function calculaGanhoAnual(){
     return "$".$this->salario*13 ;
     }   

    public function mostra(){
     return "O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada}, possui salário de {$this->salario}";
    }
    public function __toString(){
      return $this->mostra();
    }
