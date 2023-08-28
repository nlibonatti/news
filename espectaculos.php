<?php
ob_start(); // Crear buffer de salida

// Include SimplePie
// Located in the parent directory
include_once ('autoloader.php');

$feed = new SimplePie();
$feed->handle_content_type();

$url = array(
  array("title" => "TKM",
        "html" => "https://www.mundotkm.com/rss/pages/ultimas-noticias.xml", 
        "page" => "https://www.mundotkm.com/",
        "fav" => "./img/general.png"),

  array("title" => "Teleshow",
        "html" => "https://www.infobae.com/feeds/rss/sites/teleshow/", 
        "page" => "https://www.infobae.com/teleshow/",
        "fav" => "./img/infobae.gif"),

  array("title" => "Exitoina",
        "html" => "https://exitoina.perfil.com/feed", 
        "page" => "https://exitoina.perfil.com/",
        "fav" => "./img/exitoina.png"),
        
  array("title" => "Caras",
        "html" => "https://caras.perfil.com/feed", 
        "page" => "https://caras.perfil.com/",
        "fav" => "./img/caras.png"), 

  array("title" => "Clarín Espectáculos",
        "html" => "https://www.clarin.com/rss/espectaculos/tv/", 
        "page" => "https://www.clarin.com/espectaculos/tv/",
        "fav" => "./img/clarin.png"),

  array("title" => "Marie Claire",
        "html" => "https://marieclaire.perfil.com/feed", 
        "page" => "https://marieclaire.perfil.com/",
        "fav" => "./img/marieclaire.gif")

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
    <meta name="description" content="Noticias y Diarios Argentinos - Espectaculos. Información en un sólo lugar. Diarios de Argentina. Noticias de Argentina. Periódicos de Argentina. Información del Mundo.">
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/theme.css">

    <title>Espectáculos - Noticias de Espectáculos - 24 Diario</title>
</head>

<?php include ('header.php');?>


 </nav>
 </div>
  <div class="container">
  <div class="row ml-3">
  <h1>Argentina - Noticias de Espectáculos</h1>
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
 <h2><p class="font-weight-bold mb-0">Últimas Noticias</p></h2>
 </div>


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
      $cachefile = '/home/diarioarg/24diario.com.ar/espectaculos.html';
      $cached = fopen($cachefile, 'w');
      fwrite($cached, ob_get_contents());
      fclose($cached);
      ob_end_flush(); // Enviar el navegador
     ?> 

  </body>
</html>