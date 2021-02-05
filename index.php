<?php
    session_start();

    if(!isset($_SESSION['captcha'])) {
        $n = rand(1000,9000);
        $_SESSION['captcha'] = $n;    
    }

    if(!empty($_POST['email'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $codigo = $_POST['codigo'];

        if($codigo == $_SESSION['captcha']) {
            echo 'logado com sucesso!';
        }else {
            echo 'digite o código novamente...';
        }

        $n = rand(1000, 9000);
        $_SESSION['captcha'] = $n;

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        Email: <br/>
        <input type="email" name="email" /><br/><br/>
        
        Senha: <br/>
        <input type="password" name="senha" /><br/><br/>

        <img src="imagem.php" width="100" height="50" /><br/><br/>
        
        <input type="text" name="codigo" /><br/><br/>

        <input type="submit" value="Entrar" />
    </form>
    
</body>
</html>