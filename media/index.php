<?php
    $teste = 10;
    if((isset($_POST['txtPNota'])) && (isset($_POST['txtSNota']))){
        $pNota = floatval($_POST['txtPNota']);
        $sNota = floatval($_POST['txtSNota']);
        $media = ($pNota + $sNota) / 2;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da Media</title>
</head>
<body>
    <h1>
        Calculo da media
    </h1>

    <form action="index.php" method="post">
        <label for="tPNota">
            Primeira Nota:
    </label>
    <br>
    <input type="number" name="txtPNota" id="tPNota">
    <br>
    <label for="tSNota">
        Segunda Nota:
    </label>
    <br>
    <input type="number" name="txtSNota" id="tSNota">
    <br>
    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>


    

    <span id="media">
    <?php
        if(isset($media)){
            echo "Media: " . $media;
        }

    ?>



    </span>

    </form>

</body>
</html>
