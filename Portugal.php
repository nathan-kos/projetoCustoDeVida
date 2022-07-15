<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<html lang="pt-br">
<link rel="stylesheet" href="styles.css">
    <head>
        <title>Portugal</title>
    </head>
    <body>
       <h1><a target="_blank" href="none">portugal</a></h1>
       <form action="Portugal.php" method="$_POST" id="formPortugal" name="formPortugal">
        <label for="aluguel">Aluguel</label>
        <input type="number" name="aluguel" id="aluguel" step="0.01">
        <label for="mercado">Mercado</label>
        <P>coloque aqui o quanto você pretende gastar em mercado</P>
        <input type="number" name="mercado" id="mercado" step="0.01">
        <label for="internet">Internet</label>
        <p>quanto você pretende gastar em internet</p>
        <input type="number" name="internet" id="internet" step="0.01">
        <input type="submit" value="enviar">
       </form>
       </div>
       <?php
       ?>
    </body>
</html>