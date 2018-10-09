<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

$s_instituicao = $_POST['s_instituicao'];
$s_curso = $_POST['s_curso'];
$s_ano = $_POST['s_ano'];

$empresa1 = $_POST['empresa1'];
$funcao1 = $_POST['funcao1'];
$dtentrada1 = $_POST['dtentrada1'];

$email = $_POST['email'];
$senha = $_POST['senha'];

$resultado ="";


if($nome == ""){
$resultado .=  "Nome";
}
if($cidade == ""){
$resultado .=  "Cidade";
}

if($s_instituicao == ""){
$resultado .=  "Instituição";
}
if($s_curso == ""){
$resultado .=  "Curso";
}
if($s_ano == ""){
$resultado .=  "Ano de Conclusão";
}

if($empresa1 == ""){
$resultado .=  "Empresa";
}
if($funcao1 == ""){
$resultado .=  "Função";
}
if($dtentrada1 == ""){
$resultado .=  "Data de Entrada";
}

if($email == ""){
$resultado .=  "Email";
}
if($senha == ""){
$resultado .=  "Senha";
}


if($resultado ==""){
 echo '{
    "nome" : "'.$nome.'",
    "cidade": "'.$cidade.'",
    "email": "'.$email.'"
  }';
}else{
echo '{
   "erro": "'.$resultado.'"
 }';
}
?>
