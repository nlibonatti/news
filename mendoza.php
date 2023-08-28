<?php
ob_start(); // Crear buffer de salida

// Include SimplePie
// Located in the parent directory
include_once ('autoloader.php');

$feed = new SimplePie();
$feed->handle_content_type();

$url = array(

            array("title" => "MDZOL",
                  "html" => "https://www.mdzol.com/rss/feed.html?r=1",
                  "page" => "https://www.mdzol.com/",
                  "fav" => "./img/mdzol.png"),

            array("title" => "Diario Uno",
                  "html" => "https://www.diariouno.com.ar/rss/home.xml", 
                  "page" => "https://www.diariouno.com.ar/",
                  "fav" => "./img/diariouno.png"),

            array("title" => "Cuyo Noticias",
                  "html" => "https://cuyonoticias.com/rss/general.xml", 
                  "page" => "https://cuyonoticias.com/",
                  "fav" => "./img/cuyonoticias.png"),
                  
            array("title" => "Los Andes",
                  "html" => "https://www.losandes.com.ar/arcio/rss/", 
                  "page" => "https://www.losandes.com.ar/",
                  "fav" => "./img/losandes.png"),   

            array("title" => "Mendo Voz",
                  "html" => "https://www.mendovoz.com/rss/un_foto.html", 
                  "page" => "https://www.mendovoz.com/",
                  "fav" => "./img/mendovoz.png"),

            array("title" => "Noticias Mendoza",
                  "html" => "https://noticiasmendoza.com.ar/feed/", 
                  "page" => "https://noticiasmendoza.com.ar",
                  "fav" => "./img/noticiasmendoza.png")
                        
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
    <meta name="description" content="Noticias y Diarios Mendoza - Últiamas noticias de Mendoza - Información en un sólo lugar. Diarios de Mendoza. Noticias de Mendoza. Periódicos de Mendoza. Información de Mendoza">
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/theme.css">

    <title> Mendoza - Diarios y Noticias de Mendoza - 24 Diario</title>
</head>

<?php include ('header.php');?>


 </nav>
 </div>
  <div class="container">

  <div class="row ml-3">
 <h1>Argentina - Noticias de Mendoza</h1>
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
            <h2><p class="font-weight-bold mb-0">Diarios y Noticias de Mendoza</p></h2>
            </div>

<br>

      <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.mdzol.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/mdzol.png" class="img-fluid" alt="mdzol" width="16" height="16"> MDZOL</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.diariouno.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/diariouno.png" class="img-fluid" alt="Diario Uno" width="16" height="16"> DIARIO UNO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://cuyonoticias.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cuyonoticias.png" class="img-fluid" alt="Cuyo Noticias" width="16" height="16"> CUYO NOTICIAS</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.losandes.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/losandes.png" class="img-fluid" alt= "Los Andes" width="16" height="16"> LOS ANDES</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://diariomendoza.net/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/diariomendoza.png" class="img-fluid" alt="Diario Mendoza" width="16" height="16"> DIARIO MENDOZA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.mendovoz.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/mendovoz.png" class="img-fluid" alt="Mendovoz" width="16" height="16"> MENDOVOZ</a>
                  </div>

      </div>

      <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://jornadaonline.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/jornadaonline.png" class="img-fluid" alt="Jornada Online" width="16" height="16"> JORNADA ONLINE</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://noticiasmendoza.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/noticiasmendoza.png" class="img-fluid" alt="Noticias Mendoza" width="16" height="16"> N. MENDOZA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.sitioandino.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/sitioandino.png" class="img-fluid" alt="Sitio Andina" width="16" height="16"> SITIO ANDINO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.elsol.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/elsol.png" class="img-fluid" alt="El Sol" width="16" height="16"> EL SOL</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.memo.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/memo.png" class="img-fluid" alt="Memo" width="16" height="16"> MEMO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.ciudadanodiario.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/elciudadano.png" class="img-fluid" alt="El Ciudadano" width="16" height="16"> EL CIUDADANO</a>
                  </div>

            </div>

                  <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.mendozapost.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/mendozapost.png" class="img-fluid" alt="Mendoza Post" width="16" height="16"> MENDOZA POST</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.altavozdigital.com.ar/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/altavoz.png" class="img-fluid" alt="Alta Voz" width="16" height="16"> ALTA VOZ</a>
                  </div>



            </div>


 <div class="row ml-3 mr-1 border-bottom">
 <h2><p class="font-weight-bold mb-0">Últimas Noticias de Mendoza</p></h2>
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
      $cachefile = '/home/diarioarg/24diario.com.ar/mendoza.html';
      $cached = fopen($cachefile, 'w');
      fwrite($cached, ob_get_contents());
      fclose($cached);
      ob_end_flush(); // Enviar el navegador
     ?> 

  </body>
</html>