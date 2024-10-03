<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzione Genera Url Immagine</title>
</head>
<body>
    <?php
        $urlImmagine = generaUrlImmagine(rand(500,800), rand(300,400));
        echo "<img src='$urlImmagine' alt='Immagine generata casualmente'>";



        function generaUrlImmagine($l, $a){
            return "https://picsum.photos/" . $l . "/" . $a;
        }
    ?>
</body>
</html>