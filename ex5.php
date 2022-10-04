<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex5.php">

    Digite a sua data de nascimento:<br/>
    <input type="text" name="Nascimento"/>
    <br/>
    <input type="submit" value="Calcular Idade" />

    </form>


    <?php
    $data = $_GET["Nascimento"];

    $calculo = 2022 - $data;

    echo"Sua idade é: ".$calculo;

    ?>
</body>
</html>