<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $nome = "Ruth";
    echo "Nome: ".$nome;

    $nome = strtolower($nome);
    echo "<br>Nome: ".$nome;
    $salario = 5000.00;
    echo "<br>Salário: ".$salario;
    echo "<br>Salário: R$ ".number_format($salario,2,",",".");
    ?>


    <a href="formulario1.php"><br/><br>Formulário 1</a>
    <br>
    <a href="formulario2.php"><br>Formulário 2</a>



</body>
</html>