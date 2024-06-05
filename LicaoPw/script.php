<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de Repetição</title>
</head>
<body class="body">
    
    <form class="form" method="post" action="script.php">

        <p class="titulo"> TABUADA</p>
        <?php
        $num = $_POST["num"];
        for ($i = 1; $i <= 10; $i++) {
            $res = $num * $i;
            echo'<div class="tab">', $num ,' x ', $i, ' = ', $res,'</div>';
        }
        ?>
        <div class="b">
            <a href="index.html" class="btns">Voltar</a>
        </div>
    </form>
</body>
</html>