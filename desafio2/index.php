<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerando numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php 
    $min=0;
    $max =100;
    $num= mt_rand($min, $max);
    echo "<p> gerando um numero aleatório entre $min e $max <br>
    o numero gerado foi $num</p>";
    
    ?>
    <button onclick="javascript:document.location.reload()">outro</button>
    </main>
</body>
</html>