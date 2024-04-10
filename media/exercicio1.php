<?php 
    if((isset($_POST['txtPNota']))){
        $pNota = floatval($_POST['txtPNota']);
        $resultado = $pNota % 2;
        if($resultado = 0){
            echo ""
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <h1 style="text-align: center">
    Exercicio 1 
    </h1>
    <p>Faça um programa em php que o usuario forneça um numero verifique se esse numero é par ou impar</p>
    </header>
    <main>
    <form action="exercicio1.php" method="post">
        <label for="">
            Vamos ver se seu numero é par ou impar?
    </label>
    <br>
    <input type="number" name="txtPNota" id="tPNota">
    <br>
    <button type="submit">Enviar</button>

    <span id="mostraosresultados">
    <?php
        if(isset($media)){
            echo "Seu numero" . $media;
        }

    ?>
    </main>
</body>
</html>