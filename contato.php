
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Aqui você pode adicionar o código para salvar os dados em um banco de dados ou realizar outras ações desejadas, como enviar um e-mail.
    // Por exemplo, você pode usar a função mail() do PHP para enviar o e-mail.

    // Exemplo de envio de e-mail
    $destinatario = "seu_email@example.com";
    $assunto = "Nova mensagem do formulário de contato";
    $mensagem_email = "E-mail: $email\n\nMensagem:\n$mensagem";
    
    mail($destinatario, $assunto, $mensagem_email);

    // Redirecionar para uma página de confirmação ou exibir uma mensagem de sucesso.
    header("Location:confimacao.html");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contato.css">
</head> 
<body>
    <header>
        <div class="logo">
            <img src="imagens/Story_instagram_filme_boneca_minimalista_rosa_e_branco__1_-removebg-preview.png" alt="Logo da Barbie">
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="sobre-nos.html">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
	<h2>
    <main>
        <form method="POST">
        <label>email</label>
        <input type="email" name="email">
        <label>senha</label>
        <input type="password" name="senha" >
        <button type="submit">Entrar</button><br>

</main>
</body>