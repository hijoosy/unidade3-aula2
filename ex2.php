<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao2
    </title>
</head>
<body>
    <form action="ex2.php" method="get">
    Numero 1:<br/>
    <input type="text" name="numero1"/>
    </br>
    <input type="submit" name="Calcular"/>


    </form>
    <?php
    $n1 = $_GET["numero1"];
    $mostrar = $n1;
    echo" o número informado foi: " .$n1;
    ?>
</body>
</html>