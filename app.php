<?php

$parola = $_POST["word"];
$paragraph = $_POST["para"];

$newArray = str_replace($parola,"***",$paragraph );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
    <div class="container my-3">
        <h1 class="my-3 text-danger">Bad W***s</h1>

        <h3>La frase è:</h3>
        <div class="fs-4 mb-5"><?php echo $paragraph;  ?></div>

        <h3>La frase è lunga:</h3>
        <div class="fs-4 mb-5"><?php echo strlen($paragraph) . " Caratteri";  ?></div>

        <h3>La frase censurata è:</h3>
        <div class="fs-4 mb-5"><?php echo $newArray;;  ?></div>

        <h3>La frase censurata è lunga:</h3>
        <div class="fs-4 mb-5"><?php echo strlen($newArray) . " Caratteri"; ?></div>

    </div>
</body>
</html>
