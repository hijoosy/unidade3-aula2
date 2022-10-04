
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao3</title>
</head>
<body>
    <form action="ex3.php" method="get">
    Primeiro Número:<br/>
    <input type="number" name="numero1" placeholder="Digite o 1ª numero"/>
    <br/> <br/>

    Segundo Número:<br/>
    <input type="number" name="numero2" placeholder="Digite o 2ª numero"/>
    <br/> <br/>

    <input type="submit" value="Calcular">

    <?php
    //pegar dados do formulário
    $n1 = $_GET ["numero1"];
    $n2 = $_GET ["numero2"];

    //processando
    $somar = $n1 + $n2;

    //Saída 
    echo" A soma é: " .$somar;

    ?>

    </form>    




</body>
</html>