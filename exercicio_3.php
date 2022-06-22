<?php
$nome;
$sexo;

echo 'insira o seu nome:';
$nome = readline();

echo 'insira seu sexo digitando m para masculino e f para feminino:';
$genero = readline();

switch($genero){
    case 'm':{
    echo "ola sr.$nome";
   break;     
}
    case 'f':{
    echo "ola sra.$nome";
    break;
}
}