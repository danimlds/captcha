<?php
    session_start();
    header("Content-type: image/jpeg");

    $n = $_SESSION['captcha'];

    $imagem = imagecreate(100,50);

    imagecolorallocate($imagem, 200, 200, 200);

    $fontcolor = imagecolorallocate($imagem, 20, 20, 20);

    imagettftext($imagem, 40, 0, 21, 35, $fontcolor, __DIR__.'/Roboto-Black.ttf', $n);

    imagejpeg($imagem, null, 100);

?>