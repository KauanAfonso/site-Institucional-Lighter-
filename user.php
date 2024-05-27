<?php 

require("banco.php");
session_start();

// if (!isset($_SESSION["email"])) {

//     header("location: logar.php");

// }

$query = $pdo->prepare("SELECT * FROM terapeutas WHERE email = :email");
$query->execute(["email" => $_SESSION["email"]]);

$row = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Cadastrar Plano </h3>
    
<form action="" method="GET">


<?php foreach( $row as $dados ): ?>
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="<?php $dados['nome'] ?>" require><br>


<label for="email">Email:</label>
<input type="text" name="email" id="email" value="<?php $dados['email'] ?>" require><br>

<?php endforeach; ?>

<label for="planos"></label>

<input type="radio" id="planoStandart" name="planos" value="" require>
  <label for="Standart">Standart</label><br>
  <input type="radio" id="planoPremium" name="planos" value="">
  <label for="Premium">Premium</label><br><br>
 
<button type="submit">Assinar</button>

</form>

</body>
</html>

<?php 

if($_SERVER['REQUEST_METHOD'] == "GET"){

    $nome = $_GET["nome"];

}

?>