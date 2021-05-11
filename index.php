<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <?php
        include "conexao.php";
        $sqlBusca = "SELECT * FROM marca";
        $resultado = mysqli_query($conexao , $sqlBusca);
        $listaMarcas = [];
        while($marca = mysqli_fetch_assoc($resultado)){
            $listaMarcas[] = $marca;
        }
        ?>
        marca:
        <select id="marca" name="marca" onchange="ConsultarModelos();">
            <?php foreach($listaMarcas as $marca): ?>
                <option value="<?php echo $marca['id']; ?>"><?php echo $marca['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        modelo: 
        <select id="modelo" name="modelo"></select>
    </form>
    <script src="js/jquery.js"></script>
    <script src="js/funcoes.js"></script>
</body>
</html>