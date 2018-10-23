<?php
//aba1
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
//aba2
$s_instituicao = $_POST['s_instituicao'];
$s_curso = $_POST['s_curso'];
$s_ano = $_POST['s_ano'];
//aba3
$empresa1 = $_POST['empresa1'];
$funcao1 = $_POST['funcao1'];
$dtentrada1 = $_POST['dtentrada1'];
//aba4
$email = $_POST['email'];
$senha = $_POST['senha'];

$resultado ="";

//aba1
if($nome == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Nome</span><br>";
}
if($cidade == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Cidade</span><br>";
}
//aba2
if($s_instituicao == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Instituição</span><br>";
}
if($s_curso == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Curso</span><br>";
}
if($s_ano == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Ano de Conclusão</span><br>";
}
//aba3
if($empresa1 == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Empresa</span><br>";
}
if($funcao1 == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Função</span><br>";
}
if($dtentrada1 == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Data de Entrada</span><br>";
}
//aba4
if($email == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Email</span><br>";
}
if($senha == ""){
$resultado .=  "<span class='text-danger'>Preencha o campo: Senha</span><br>";
}

//resultado
if($resultado ==""){
 echo "OK";
}else{
echo $resultado;
};

//teste
/*if($resultado ==""){
  echo '{
      "nome" : "Rafael Zottesso",
      "email": "rafael.zottesso@ifpr.edu.br",
      "cidade": "(44) 99999-9999",
      "ok": "ok"
    }';
}else {
  echo $resultado;
}
*/

?>
