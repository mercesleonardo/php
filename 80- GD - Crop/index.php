<?php

$arquivo = 'paisagem1200.jpg';
$Width = 400;
$Height = 400;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $Width / $Height;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $Height * $ratio;
    $finalHeight = $Height;
} else {
    $finalHeight = $Width / $ratio;
    $finalWidth = $Width;
}

if($finalWidth < $Width) {
    $finalWidth = $Width;
    $finalHeight = $Width / $ratio;

    $finalY = -(($finalHeight - $Height) / 2);
} else {
    $finalHeight = $Height;
    $finalWidth = $Height * $ratio;

    $finalX = -(($finalWidth - $Width) / 2);
}

$imagem = imagecreatetruecolor($Width, $Height);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled($imagem, $originalImg, $finalX, $finalY, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

header('Content-Type: image/png');
imagejpeg($imagem, null, 100);

//imagejpeg($imagem, 'paisagem_nova.jpg', 100);