<?php 
//captura de  dados
$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$data= date("d/m/y");

//abrir conexão com o banco
$con=mysqli_connect("localhost","root","","revisao1");
// montar a instrução pra gravar no banco de dados
$novadata= explode("/",$data);
$novadata= array_reverse($novadata);
$data1= implode("-",$novadata);


$sql= "insert into aluno values
(null,'".$nome."','".$email."','".$telefone."','".$data."')";

//executar

if(mysqli_query($con,$sql)){
    echo "Gravado com sucesso!";
}else{
    echo"Erro ao gravar.";
}

mysqli_close($con);

?>