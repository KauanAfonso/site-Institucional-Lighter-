<?php

require_once("banco.php");
session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Login</h2>
    
<form action="" method="POST">


<label for="email">Email:</label>
<input type="text" name='email' id="email" requered><br>

<label for="senha">senha:</label>
<input type="text" name='senha' id="senha" requered><br>

<button type="submit">Logar</button>

</form>


</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    try{

        $query = $pdo->prepare("");
        $query->execute(["nome" =>$nome ,"email"=>$email, "senha"=>$senha]);

        if($query->rowCount() > 0){
            header("location : user.php");
        }else{
            echo "Usuário ou senha inválidas";
            echo "<a href='cadastar.php'>Cadastrar</a>";
        }

    }catch(Exception $e){
        "Erro " . $e->getMessage();
    }

}



?>