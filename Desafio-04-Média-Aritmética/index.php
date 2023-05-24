<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo as Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1']??0;
        $peso1 = $_GET['peso1']??0;
        $peso2 = $_GET['peso2']??0;
        $valor2 = $_GET['valor2']??0;
        

    ?>
    <main>
        <h2>Médias Aritméticas</h2>
         <form action="<?=$_SERVER['PHP_SELF'] ?>">
        <label for="valor1">1 valor</label>
        <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
        <label for="peso1">1 peso</label>
        <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
        <label for="valor2">2 valor</label>
        <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
        <label for="peso2">2 peso</label>
        <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
    </form>
    </main>
   <section>
    <h2>Cálculo das Médias</h2>
    <?php 
        $maSimples = (($valor1 + $valor2) / 2);
        $maPonderada = ($valor1*$peso1 + $valor2 * $peso2)/($peso1+$peso2);
        
        $maSimplesFormatada = number_format($maSimples, 2, ',');
        $maPonderadaFormatada = number_format($maPonderada, 2, ',');
        
        echo "Analisando os valores $valor1 e $valor2 :";
    ?>
    <ul>
        <li><?php echo "A <strong>Média Aritmética Simples</strong> entre os valores é igual a $maSimplesFormatada"?></li>
        <li><?php echo "A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $maPonderadaFormatada."?></li>
    </ul>
   </section>
</body>
</html>