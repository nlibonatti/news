<?php
ob_start(); // Crear buffer de salida

// Include SimplePie
// Located in the parent directory
include_once ('autoloader.php');

$feed = new SimplePie();
$feed->handle_content_type();

$url = array(

            array("title" => "La Voz",
                  "html" => "https://www.lavoz.com.ar/rss/rss.xml",
                  "page" => "https://www.lavoz.com.ar/",
                  "fav" => "./img/lavoz.gif"),

            array("title" => "Cadena 3",
                  "html" => "http://cadena3.com/rss/PoliticayEconomia.xml", 
                  "page" => "http://cadena3.com/",
                  "fav" => "./img/cadena3.gif"),

            array("title" => "cba24n",
                  "html" => "https://www.cba24n.com.ar/rss.xml", 
                  "page" => "https://www.cba24n.com.ar/",
                  "fav" => "./img/cba24n.png"),
                  
            array("title" => "La Nueva Mañana",
                  "html" => "https://lmdiario.com.ar/rss/general.xml", 
                  "page" => "https://lmdiario.com.ar/",
                  "fav" => "./img/lm.png"),

            array("title" => "Informador Público",
                  "html" => "https://www.diarioalfil.com.ar/feed/", 
                  "page" => "https://www.diarioalfil.com.ar/",
                  "fav" => "./img/alfil.gif")
                        
                                    );
  ?>

<!doctype html>
<html lang="sp">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7733400-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-7733400-5');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 1038288710 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1038288710"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-1038288710');
</script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-store">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Noticias y Diarios Córdoba - Últiamas noticias de Córdoba - Información en un sólo lugar. Diarios de Córdoba. Noticias de Córdoba. Periódicos de Córdoba. Información de Córdoba">
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/theme.css">

    <title>Córdoba - Diarios y Noticias de Córdoba - 24 Diario</title>
</head>

<?php include ('header.php');?>


 </nav>
 </div>
  <div class="container">

  <div class="row ml-3">
 <h1>Argentina - Noticias de Córdoba</h1>
 </div>

 </br>

                <!-- Adsense -->

                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- display -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-6906448708478395"
                data-ad-slot="1181358845"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

  <div class="row ml-3 mr-1 border-bottom">
            <h2><p class="font-weight-bold mb-0">Diarios y Noticias de Córdoba</p></h2>
            </div>

<br>

      <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.lavoz.com.ar" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/lavoz.gif" class="img-fluid" alt="la Voz" width="16" height="16"> LA VOZ</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="http://cadena3.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cadena3.gif" class="img-fluid" alt="Cadena 3" width="16" height="16"> CADENA 3</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://lmdiario.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/LM.png" class="img-fluid" alt="La Nuena Mañana" width="16" height="16"> LA MAÑANA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://cordobainteriorinforma.com" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cordobainforma.png" class="img-fluid" alt="Córdoba Informa" width="16" height="16"> C. INFORMA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.informevecinal.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/informevecinal.png" class="img-fluid" alt="Informe Vecinal" width="16" height="16"> I. VECINAL</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://puntoapunto.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/pap.png" class="img-fluid" alt="Punto a Punto" width="16" height="16"> PUNTO A PUNTO</a>
                  </div>

                  </div>

                  <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.eldiariocba.com.ar" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/edcba.png" class="img-fluid" alt="El Diario" width="16" height="16"> EL DIARIO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.diarioalfil.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/alfil.gif" class="img-fluid" alt="Diario Alfil - Informador Público" width="16" height="16"> I. PUBLICO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.hoydia.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/hoycba.gif" class="img-fluid" alt="Hoy Dia Córdoba" width="16" height="16"> HOY CORDOBA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.puntal.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/puntal.gif" class="img-fluid" alt="Diario Puntal" width="16" height="16">       PUNTAL</a>
                  </div>

            </div>


 <div class="row ml-3 mr-1 border-bottom">
 <h2><p class="font-weight-bold mb-0">Últimas Noticias de Córdoba</p></h2>
 </div>

 <br>
                <!-- Adsense -->

                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- display -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-6906448708478395"
                data-ad-slot="1181358845"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

    <div class="row ml-1 mr-1">
					    <?php 
                        foreach ($url as $name):
                        echo '<div class="col-md-6">';
                        $feed->set_feed_url($name["html"]);
                        $feed->enable_cache(false);
						$feed->init();
                                    $title = $name["title"];
                                    $img = $name["fav"];

                        $link = $name["page"];
                        $title = "<h2><a href='$link' title='$title' class='btn btn-light font-weight-bold' target='_blank' rel='nofollow'><img src='$img' width='16' height='16'> $title</a></h2>"; 
                        echo $title;
					    ?>

            <ul class="list-group list-group-flush">

				    <?php foreach($feed->get_items(0,6) as $item): ?>  
            <?php if ($item->get_permalink()) echo '<li class="list-group-item"><a href="' . $item->get_permalink() . '" class="text-body" target="_blank" rel="nofollow">'; echo $item->get_title(); echo '.<small></a>'; ?>&nbsp;<span class="text-info"><?php echo $item->get_date('j M Y') . '<a data-toggle="collapse" href="#collapseExample" class="text-success" role="button" aria-expanded="false" aria-controls="collapseExample" rel="nofollow"> <i class="fas fa-angle-double-down text-success"></i></a></small>' ; ?>&nbsp;</span>
                        <div class="collapse" id="collapseExample">
                        <?php echo '<small><p class="text-muted">' . substr(strip_tags($item->get_description($str)),0,400) . '</p></small>'; ?>
                        </div>
				    <?php endforeach; ?>
            </li>
                      <br>    
                    </div>
				<?php endforeach; ?>
        </ul>

            </div>

            <?php include ('footer.php');?>
        
           </div> 

	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <?php 
      $cachefile = '/home/diarioarg/24diario.com.ar/cordoba.html';
      $cached = fopen($cachefile, 'w');
      fwrite($cached, ob_get_contents());
      fclose($cached);
      ob_end_flush(); // Enviar el navegador
     ?> 

  </body>
</html>