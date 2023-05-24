<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02 - Salário Mínimo com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salarioMin = 1320;
        $salario = $_GET['salario']??0;

    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p> <?php echo "Considerando o salário mínimo de <strong>".numfmt_format_currency($padrao, $salarioMin, "BRL")."</strong>";?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
    <h2>Resultado final</h2>
        <?php 
            
            $qtSalarios = (int)($salario / $salarioMin);
            $qtRestante = $salario - ($qtSalarios * $salarioMin);
            echo "<p>Quem recebe um salário de <strong>".numfmt_format_currency($padrao, $salario, "BRL")."</strong> ganha <strong>". $qtSalarios ." salários mínimos +</strong> </p>".numfmt_format_currency($padrao, $qtRestante, "BRL");
        ?>
    </section>
</body>
</html>