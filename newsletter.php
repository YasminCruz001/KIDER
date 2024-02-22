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

        $email = $_POST['email'];

        $sql = "INSERT INTO newsletter(email) VALUES('$email')";

        if(executarComando($sql)){
            echo "<h2> Email registrado </h2>";
        }else{
            echo "<h2> Falha ao registrar email. </h2>";
        }
    ?>
</body>
</html>