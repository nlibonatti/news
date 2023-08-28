<?php
include_once('simple_html_dom.php');
date_default_timezone_set ('America/Argentina/Buenos_Aires');

$context = stream_context_create(
    array(
        "http" => array(
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

// Tapa Clarín

$tapa = 'https://tapas.clarin.com/tapa/'.date('Y').'/'.date('m').'/'.date('d').'/'.date('Ymd').'_thumb.jpg';
print_r($tapa);

     $imagen = file_get_contents($tapa, false, $context);

     if(strlen($imagen) !==0) {

     file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapaclarin.jpg', $imagen);
     $image = "/home/diarioarg/24diario.com.ar/tapas/tapaclarin.jpg";
     $im_php = imagecreatefromjpeg($image);
     $im_php = imagescale($im_php, 350);
     imagejpeg($im_php, '/home/diarioarg/24diario.com.ar/tapas/tapaclarin.jpg');

     }
     else {
     }

// Tapa Ole

$tapa = 'https://tapas2.ole.com.ar/tapa/' .date('Y').'/'.date('m').'/'.date('d').'/OLE_'.date('Ymd').'_03.jpg';
$tapab = 'https://tapas2.ole.com.ar/tapa/' .date('Y').'/'.date('m').'/'.date('d').'/OLE_'.date('Ymd').'_01.jpg';

print_r($tapa);

if(getimagesize($tapa)){
    $imagen = file_get_contents($tapa);
    $imagenb = file_get_contents($tapab);
    
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapaole.jpg', $imagen);
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapaoleb.jpg', $imagenb);   
    
    $image = "/home/diarioarg/24diario.com.ar/tapas/tapaole.jpg";
    $im_php = imagecreatefromjpeg($image);
    $im_php = imagescale($im_php, 350);
    imagejpeg($im_php, '/home/diarioarg/24diario.com.ar/tapas/tapaole.jpg');

    }else{
 }
 

// Tapa La Nación

$tapa = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/nacion.300.jpg';
$tapab = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/nacion.750.jpg';
print_r($tapa);

if(getimagesize($tapa)){
    $imagen = file_get_contents($tapa);
    $imagenb = file_get_contents($tapab);

    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapanacion.jpg', $imagen);
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapanacionb.jpg', $imagenb);
    }else{
 }

// Tapa Cronista

$tapa = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_cronista.300.jpg';
$tapab = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_cronista.750.jpg';
print_r($tapa);

if(getimagesize($tapa)){
    $imagen = file_get_contents($tapa);
    $imagenb = file_get_contents($tapab);

    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapacronista.jpg', $imagen);
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapacronistab.jpg', $imagenb);
    }else{
 }

// Tapa La Capital

$tapa = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_capital_rosario.300.jpg';
$tapab = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_capital_rosario.750.jpg';
print_r($tapa);

if(getimagesize($tapa)){
    $imagen = file_get_contents($tapa);
    $imagenb = file_get_contents($tapab);

    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapalacapital.jpg', $imagen);
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapalacapitalb.jpg', $imagenb);
    }else{
 }

// Tapa El Día

$tapa = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_eldia.300.jpg';
$tapab = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_eldia.750.jpg';
print_r($tapa);
if(getimagesize($tapa)){
    $imagen = file_get_contents($tapa);
    $imagenb = file_get_contents($tapab);

    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapaeldia.jpg', $imagen);
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapaeldiab.jpg', $imagenb);
    }else{
 }

// La Gaceta

$tapa = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_gaceta.300.jpg';
$tapab = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_gaceta.750.jpg';
print_r($tapa);
if(getimagesize($tapa)){
    $imagen = file_get_contents($tapa);
    $imagenb = file_get_contents($tapab);

    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapalagaceta.jpg', $imagen);
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapalagacetab.jpg', $imagenb);
    }else{
 }

// Ambito

$tapa = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_ambito.300.jpg';
$tapab = 'http://img.kiosko.net/' .date('Y'). '/' .date('m'). '/' .date('d'). '/ar/ar_ambito.750.jpg';

print_r($tapa);
if(getimagesize($tapa)){
    $imagen = file_get_contents($tapa);
    $imagenb = file_get_contents($tapab);

    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapaambito.jpg', $imagen);
    file_put_contents('/home/diarioarg/24diario.com.ar/tapas/tapaambitob.jpg', $imagenb);
    }else{
 }


?>