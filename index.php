<?php
//Namespace usando para nomear as classe e evitar conflito de classe iguais
namespace chillerlan\QRCodeExamples;

//Estamos usando a classe QRCode do namespace QRCodeExamples
use chillerlan\QRCode\{QRCode, QROptions};

//Incluir Composer
include './vendor/autoload.php';

//URL que será utilizada para gerar o QR
$url = 'http://www.hsystem.droppages.com/';


////Configurações do QRCode
//$options = new QROptions([
//    'version'    => 5,
//    'outputType' => QRCode::OUTPUT_MARKUP_SVG,
//    'eccLevel'   => QRCode::ECC_L,
//]);
//
////invoca uma nova instância QRCode
//$qrcode = new QRCode($options);
////Gerar a imagem e salvar a imagem do QR no servidor
//$qrcode->render($url, 'imgqrcode/Hsystem.svg');

echo '<img src="'.(new QRCode)->render($url).'" alt="Celke" />';
