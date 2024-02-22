<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include ('conexao.php');

        $nomeProf = $_POST['nomeProf'];
        $formacao = $_POST['formacao'];
        $tempoExp = $_POST['tempoExp'];
        $escola = $_POST['escola'];
        $turnoDis = $_POST['turnoDis'];

        $sql = "INSERT INTO professor(nomeProf,formacao,tempoExp,escola,turnoDis) VALUES('$nomeProf','$formacao','$tempoExp','$escola','$turnoDis')";

        if(executarComando($sql)){
            echo "<h2> O professor foi Registrado </h2>";
        }else{
            echo "<h2> Falha ao registrar o professor </h2>";
        }
    ?>
</body>
</html>