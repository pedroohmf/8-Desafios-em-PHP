<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03 - Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['num']??0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>">
            <label for="num">Número</label>
            <input type="number" name="num" id="numId" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "Analisando o <strong>número $numero</strong>, temos:";
            $rCubica = $numero ** (1/3);
            $rCubicaFormatado = number_format($rCubica, 3, ',');

            $rQuadrada = $numero ** (1/2); // ou sqrt();
            $rQuadradaFormatada = number_format($rQuadrada, 3, ',');
        ?>
        <ul>
            <li><?php echo "A sua raiz quadrada é <strong>".$rQuadradaFormatada."</strong>"?></li>
            <li><?php echo "A sua raiz cúbica é <strong>".$rCubicaFormatado."</strong>"?></li>
        </ul>
    </section>
</body>
</html>