<?php

$fileName = $_FILES["imageReg"]["name"] ?? "";
$fileSize = $_FILES["imageReg"]["size"] ?? "";
$fileTmp = $_FILES["imageReg"]["tmp_name"] ?? "";
$fileType = $_FILES["imageReg"]["type"] ?? "";
$fileError = $_FILES["imageReg"]["error"] ?? "";

$arrayI = explode('.', $fileName);
$extI = strtolower(end($arrayI));
$nameI = $arrayI[0];
$nameI .= rand(1, 100000);
$extensionI = ["jpg", "png", "jpeg", "webp", "gif"];
$nameIMG = $nameI . "." . $extI;
if (in_array($extI, $extensionI)) {
    if ($fileSize <= 5000000) {
        if ($fileError == 0) {
            $newnameI = $nameI . "." . $extI;
            if (move_uploaded_file($fileTmp, "img/{$newnameI}")) {
            }
        }
    }
}
$_POST["imageR"]=$nameIMG;



?>