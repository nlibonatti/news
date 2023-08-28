<?php
ob_start(); // Crear buffer de salida

// Include SimplePie
// Located in the parent directory
include_once ('autoloader.php');

$feed = new SimplePie();
$feed->handle_content_type();

$url = array(

            array("title" => "ON 24",
                  "html" => "https://www.on24.com.ar/feed/", 
                  "page" => "https://www.on24.com.ar/",
                  "fav" => "./img/on24.gif"),

            array("title" => "Rosario 12",
                  "html" => "https://www.pagina12.com.ar/rss/suplementos/rosario12/notas", 
                  "page" => "https://www.pagina12.com.ar/suplementos/rosario12/",
                  "fav" => "./img/pagina.gif"),
                  
            array("title" => "El Ciudadano",
                  "html" => "https://www.elciudadanoweb.com/feed/", 
                  "page" => "https://www.elciudadanoweb.com/",
                  "fav" => "./img/elciudadano.gif"),   
                  
            array("title" => "Info 341",
                  "html" => "https://info341.com.ar/feed/", 
                  "page" => "https://info341.com.ar/",
                  "fav" => "./img/info341.gif"),

            array("title" => "Redacción Rosario",
                  "html" => "https://redaccionrosario.com/feed/", 
                  "page" => "https://redaccionrosario.com/",
                  "fav" => "./img/redaccionrosario.gif"),

            array("title" => "Sin Mordaza",
                  "html" => "https://sinmordaza.com/noticia/category/ciudades/rosario-menu/rosario/feed", 
                  "page" => "https://sinmordaza.com/noticia/category/ciudades/rosario-menu/rosario/",
                  "fav" => "./img/sinmordaza.gif"),

            array("title" => "Jacke Mate",
                  "html" => "http://jackemate.com/index.php?format=feed&type=rss", 
                  "page" => "http://jackemate.com/",
                  "fav" => "./img/jackemate.gif")
                        
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
    <meta name="description" content="Noticias y Diarios Rosario - Últiamas noticias de Rosario - Información en un sólo lugar. Diarios de Rosario. Noticias de Rosario. Periódicos de Rosario. Información de Rosario">
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/theme.css">

    <title>Rosario - Diarios y Noticias de Rosario - 24 Diario</title>
</head>

<?php include ('header.php');?>


 </nav>
 </div>
  <div class="container">

  <div class="row ml-3">
 <h1>Argentina - Noticias de Rosario</h1>
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
            <h2><p class="font-weight-bold mb-0">Diarios y Noticias de Rosario</p></h2>
            </div>
      <br>

      <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="http://www.rosarionet.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/generic.gif" class="img-fluid" alt="Rosario Net" width="16" height="16"> ROSARIO NET</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.on24.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/on24.gif" class="img-fluid" alt="On 24" width="16" height="16"> ON24</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.pagina12.com.ar/suplementos/rosario12/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/pagina.gif" class="img-fluid" alt="Rosario 12" width="16" height="16"> ROSARIO 12</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.elciudadanoweb.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/elciudadano.gif" class="img-fluid" alt="El Ciudadano" width="16" height="16"> El CIUDADANO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://info341.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/info341.gif" class="img-fluid" alt="Info 341" width="16" height="16"> INFO 341</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://noticiasarn.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/noticiasarn.gif" class="img-fluid" alt="Noticias ARN" width="16" height="16"> NOTICIAS ARN</a>
                  </div>

                  </div>

                  <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://redaccionrosario.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/redaccionrosario.gif" class="img-fluid" alt="Redacción Rosario" width="16" height="16"> R. ROSARIO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://sinmordaza.com/noticia/category/ciudades/rosario-menu/rosario/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/sinmordaza.gif" class="img-fluid" alt="Sin Mordaza" width="16" height="16"> SIN MORDAZA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="http://jackemate.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/jackemate.gif" class="img-fluid" alt="Jacke Mate" width="16" height="16"> JACKE MATE</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://puntobiz.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/puntobiz.gif" class="img-fluid" alt="Punto Biz" width="16" height="16"> PUNTO BIZ</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://politicaplus.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/politicaplus.gif" class="img-fluid" alt="Política Plus" width="16" height="16"> POLITICA PLUS</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.rosario3.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/rosario3.gif" class="img-fluid" alt="Sin Mordaza" width="16" height="16"> ROSARIO3</a>
                  </div>

                  </div>

                  <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://diariocruzdelsur.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cruzdelsur.gif" class="img-fluid" alt="Jacke Mate" width="16" height="16"> CRUZ DEL SUR</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.inforosario.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/inforosario.gif" class="img-fluid" alt="Punto Biz" width="16" height="16"> INFO ROSARIO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.lacapital.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/lacapital.gif" class="img-fluid" alt="Política Plus" width="16" height="16"> LA CAPITAL</a>
                  </div>

                  </div>


 <div class="row ml-3 mr-1 border-bottom">
 <h2><p class="font-weight-bold mb-0">Últimas Noticias de Rosario</p></h2>
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
      $cachefile = '/home/diarioarg/24diario.com.ar/rosario.html';
      $cached = fopen($cachefile, 'w');
      fwrite($cached, ob_get_contents());
      fclose($cached);
      ob_end_flush(); // Enviar el navegador
     ?> 

  </body>
</html>