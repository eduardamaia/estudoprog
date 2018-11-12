<?php

   require "../models/Funcionario.php";
   require "../models/data.php";

   //crianção das datas de entrada dos funcionários, a partir dos parâmetros do arquivo data.php

   $data1 = new data (15,03,2015);
   $data2 = new data (22,08,2018); 

   // criação dos funcionários utilizando os parâmetros colocados no arquivo Funcionario.php
   $funcionario1= new Funcionario("caixa", 2335, $data1, "110.111.112-13");
   $funcionario2= new Funcionario("analista", 3573, $data2, "114.115.116-17");
   
 
    //apresentando as funções 
    $funcionario1->calculaGanhoAnual();
    $funcionario2->calculaGanhoAnual();

    $funcionario1->recebeAumento();
    $funcionario2->recebeAumento();


   //agora apresentando a função mostra ()

     print $funcionario1; 
     print $funcionario1;


