<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrado</title>
</head>
<body>
    <h1>Confirmação</h1>  
    <?php
        $email = $_POST["email"];
        echo "<p>Para concluir seu cadastro confirme o e-mail enviado para $email </p>";
    ?>php
</body>
</html>