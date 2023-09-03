<?php
date_default_timezone_set ('America/Argentina/Buenos_Aires');
ob_start(); // Crear buffer de salida
// Include SimplePie
// Located in the parent directory
include_once ('autoloader.php');
date_default_timezone_set ('America/Argentina/Buenos_Aires');
$diahoy = date('d').'-'.date('m').'-'.date('Y');

$feed = new SimplePie();

$feed->handle_content_type();

$url = array(
array("title" => "Clarin",
        "html" => "https://www.clarin.com/rss/lo-ultimo/",
        "page" => "https://www.clarin.com/",
        "fav" => "./img/clarin.png"),

array("title" => "La Nación",
        "html" => "http://contenidos.lanacion.com.ar/herramientas/rss-origen=2",
        "page" => "http://www.lanacion.com.ar/",
        "fav" => "./img/lanacion.gif"),

array("title" => "Página 12",
        "html" => "https://www.pagina12.com.ar/rss/portada", 
        "page" => "https://www.pagina12.com.ar/", 
        "fav" => "./img/pagina.gif"),   
        
array("title" => "Infobae",
        "html" => "https://www.infobae.com/feeds/rss/",
        "page" => "https://www.infobae.com/",
        "fav" => "./img/infobae.gif"),

array("title" => "El Cronista",
        "html" => "https://www.cronista.com/files/rss/news.xml", 
        "page" => "https://www.cronista.com/",
        "fav" => "./img/cronista.png"),

array("title" => "Ambito",
        "html" => "https://www.ambito.com/rss/home.xml", 
        "page" => "https://www.ambito.com/",
        "fav" => "./img/ambito.jpeg"),

array("title" => "Perfil",
        "html" => "https://www.perfil.com/feed", 
        "page" => "https://www.perfil.com/", 
        "fav" => "./img/perfil.png"),

array("title" => "El DiarioAR",
        "html" => "https://www.eldiarioar.com/rss/", 
        "page" => "https://www.eldiarioar.com/", 
        "fav" => "./img/eldiarioar.png"),

array("title" => "El Argentino",
        "html" => "https://elargentinodiario.com.ar/feed/", 
        "page" => "https://elargentinodiario.com.ar/", 
        "fav" => "./img/elargentino.png"),

array("title" => "Newsonline",
        "html" => "https://newsonline.com.ar/feed/", 
        "page" => "https://newsonline.com.ar/", 
        "fav" => "./img/newsonline.png"),

array("title" => "Diario con Vos",
        "html" => "https://diarioconvos.com/feed/", 
        "page" => "https://diarioconvos.com/", 
        "fav" => "./img/diarioconvos.png"),

array("title" => "Corta",
        "html" => "https://corta.com.ar/feed/", 
        "page" => "https://corta.com.ar/", 
        "fav" => "./img/corta.png"),

array("title" => "El Disenso",
        "html" => "https://www.eldisenso.com/feed/", 
        "page" => "https://www.eldisenso.com/", 
        "fav" => "./img/eldisenso.png"),

array("title" => "Seúl",
        "html" => "https://seul.ar/feed/", 
        "page" => "https://seul.ar/", 
        "fav" => "./img/seul.png"),

array("title" => "Telam",
        "html" => "https://www.telam.com.ar/rss2/ultimasnoticias.xml",
        "page" => "https://www.telam.com.ar/",
        "fav" => "./img/telam.gif"),

array("title" => "Reddit Argentina",
        "html" => "https://www.reddit.com/r/argentina/top/.rss", 
        "page" => "https://www.reddit.com/r/argentina/top/", 
        "fav" => "./img/reddit.gif"),

array("title" => "TN",
        "html" => "https://www.youtube.com/feeds/videos.xml?channel_id=UCj6PcyLvpnIRT_2W_mwa9Aw",
        "page" => "https://tn.com.ar/",
        "fav" => "./img/tn.gif"),

array("title" => "TV Pública",
        "html" => "https://www.youtube.com/feeds/videos.xml?channel_id=UCqmZBc7T8J5TFuRT5uf-j_g",
        "page" => "https://www.youtube.com/channel/UCqmZBc7T8J5TFuRT5uf-j_g",
        "fav" => "./img/tvpublica.png"),

array("title" => "America TV",
        "html" => "https://www.youtube.com/feeds/videos.xml?channel_id=UC6NVDkuzY2exMOVFw4i9oHw",
        "page" => "https://www.americatv.com.ar/",
        "fav" => "./img/americatv.gif"),

array("title" => "C5N",
        "html" => "https://www.youtube.com/feeds/videos.xml?channel_id=UCFgk2Q2mVO1BklRQhSv6p0w",
        "page" => "http://c5nenvivo.com.ar/",
        "fav" => "./img/c5n.gif")
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
    <meta name="description" content="Diarios Argentinos - Últinas noticias Argentinas - Diarios de Argentina. Noticias Argentinas. Periódicos de Argentina.">
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/theme.css">

    <title>24 Diario - Diarios México - Últimas noticias</title>
</head>

<?php include ('header.php');?>
</nav>
 </div>

        <div class="container">
         <div class="row ml-3">
        <h1>Diarios México</h1>
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

 <div class="row ml-3 mr-1 border-bottom">
 <div class="row ml-3 mr-1 border-bottom">
 <a href="https://www.dolarparatodos.com/" target="_blank"><h2><p class="font-weight-bold mb-0 mt-0">Cotización Dólar</p></h2></a>
</div>


    <div class="row ml-1 mr-1 mt-1">


    <div class="row ml-1 mr-1 mt-1">


        <br>

   <div class="row ml-3 mr-1 border-bottom">


            <div class="row ml-3 mr-1 border-bottom">
            <h2><span class="font-weight-bold mb-0">Últimas Noticias México - Diarios Mexicamos</span></h2>
            </div>
           <br>

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
                        $title = "<h3><a href='$link' title='$title' class='btn btn-light font-weight-bold' target='_blank' rel='nofollow'><img src='$img' width='16' height='16'> $title</a></h3>"; 
                        echo $title;
		?>

            <ul class="list-group list-group-flush">

				    <?php foreach($feed->get_items(0,6) as $item): ?>  
            <?php if ($item->get_permalink()) echo '<li class="list-group-item"><a href="' . $item->get_permalink() . '" class="text-body" target="_blank" rel="nofollow">'; echo $item->get_title(); echo '.<small></a>'; ?>&nbsp;<span class="text-info"><?php echo $item->get_date('j M Y') . '<a data-toggle="collapse" href="#collapseExample" class="text-dark" role="button" aria-expanded="false" aria-controls="collapseExample" rel=“nofollow"> <i class="fas fa-angle-double-down text-success"></i></a></small>' ; ?>&nbsp;</span>
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
    <script type="text/javascript" async src="//l.getsitecontrol.com/d7oz88zw.js"></script>

    <?php 
      $cachefile = '/home/diarioarg/24diario.com.ar/mexico.html';
      $cached = fopen($cachefile, 'w');
      fwrite($cached, ob_get_contents());
      fclose($cached);
      ob_end_flush(); // Enviar el navegador
     ?> 

  </body>
</html>