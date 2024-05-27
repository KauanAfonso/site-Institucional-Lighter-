<?php

require_once("banco.php");


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Cadastro</h2>
    
<form action="" method="POST">

<label for="name">Nome:</label>
<input type="text" name='nome' id="nome" requered><br>

<label for="email">Email:</label>
<input type="text" name='email' id="email" requered><br>

<label for="senha">senha:</label>
<input type="text" name='senha' id="senha" requered><br>

<button type="submit">Cadastrar</button>

</form>


</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try{

    $query = $pdo->prepare("");
    $query->execute(["nome" =>$nome ,"email"=>$email, "senha"=>$senha]);

    if($query){
        echo "Usuario Cadastrado !";
        echo "<a href='logar.php'>Logar</a>";
    }else{
        echo "Erro ao cadastrar o Usuário";
    }

    }catch(Exception $e){
        "Erro " . $e->getMessage();
    }

}



?>