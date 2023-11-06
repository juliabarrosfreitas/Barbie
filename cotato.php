<?php
include('Pdo.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução:" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user'] = $usuario['id'];

            header("Location: index.php");


        }else {
            echo "Falha ao logar! email ou senha incorretos";
        }

    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head> 
<body>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@500&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>home</title>
<body>
    <header>
        <div class="logo">
            <img src="imagens/Story_instagram_filme_boneca_minimalista_rosa_e_branco__1_-removebg-preview.png" alt="Logo da Barbie">
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="sobre-nos.html">Sobre</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>
	<h2>
    <main>
        <form method="POST">
        <label>email</label>
        <input type="email" name="email" value="<?= $email?> " required/>
        <label>senha</label>
        <input type="password" name="senha" value="<?= $senha ?> " required />
        <button type="submit">Entrar</button><br>
        <button type="submit">Inscreva-se</button><br>

</main>