<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET['dividendo']??0;
    $divisor = $_GET['divisor']??0;
    ?>
    
     <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>">
            <label for="div"> Dividendo</label>
            <input type="text" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="estrutura">
        <h2>Estrutura da Divisão</h2>
        <?php 
        $resultado = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
        $resultadoFormatado = number_format($resultado, 0);
        ?>

       <table class="divisao">
        <tr>
            <td><?="$dividendo"?></td>
            <td><?="$divisor"?></td>
        </tr>
        <tr>
            <td><?="$resto"?></td>
            <td><?="$resultadoFormatado"?></td>
        </tr>
       </table>
    </section>
</body>
</html>