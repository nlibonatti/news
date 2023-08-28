<?php
ob_start(); // Crear buffer de salida

// Include SimplePie
// Located in the parent directory
include_once ('autoloader.php');

$feed = new SimplePie();
$feed->handle_content_type();

$url = array(

            array("title" => "Cointelegrafh",
                  "html" => "https://es.cointelegraph.com/rss",
                  "page" => "https://es.cointelegraph.com/",
                  "fav" => "./img/cointelegraph.gif"),   

            array("title" => "Observatorio Blockchain",
                  "html" => "https://observatorioblockchain.com/feed/", 
                  "page" => "https://observatorioblockchain.com/",
                  "fav" => "./img/observatorioblockchain.gif"),

            array("title" => "Criptonoticias",
                  "html" => "https://www.criptonoticias.com/feed/", 
                  "page" => "https://www.criptonoticias.com",
                  "fav" => "./img/criptonoticias.gif"),

            array("title" => "Criptotendencia",
                  "html" => "https://criptotendencia.com/category/noticias/feed/", 
                  "page" => "https://criptotendencia.com/category/noticias/",
                  "fav" => "./img/criptotendencia.gif"),

            array("title" => "Diario Bitcoin",
                  "html" => "https://www.diariobitcoin.com/feed/", 
                  "page" => "https://www.diariobitcoin.com/",
                  "fav" => "./img/diariobitcoin.gif"),

            array("title" => "Bein Crypto",
                  "html" => "https://es.beincrypto.com/feed/", 
                  "page" => "https://es.beincrypto.com/",
                  "fav" => "./img/beincrypto.gif"),

            array("title" => "Cripto Pasión",
                  "html" => "https://criptopasion.com/feed/", 
                  "page" => "https://criptopasion.com/",
                  "fav" => "./img/criptopasion.png"),

            array("title" => "Invezz Criptomonedas",
                  "html" => "https://invezz.com/es/noticias/criptomoneda/feed/", 
                  "page" => "https://invezz.com/es/noticias/criptomoneda/",
                  "fav" => "./img/invezz.png"),

            array("title" => "Crypto Sheinix",
                  "html" => "https://www.youtube.com/feeds/videos.xml?channel_id=UC423qnRwiJf4fLKAQ6Tlofg", 
                  "page" => "https://www.youtube.com/channel/UC423qnRwiJf4fLKAQ6Tlofg",
                  "fav" => "./img/cryptosheinix.jpeg"),

            array("title" => "El Minero Sudaka",
                  "html" => "https://www.youtube.com/feeds/videos.xml?channel_id=UCGzkIRbCkqkEVnDRXDRIJxg", 
                  "page" => "https://www.youtube.com/channel/UCGzkIRbCkqkEVnDRXDRIJxg",
                  "fav" => "./img/minerosudaka.jpeg"),

            array("title" => "Sin Miedo a Invertir",
                  "html" => "https://www.sinmiedoainvertir.com/feed/", 
                  "page" => "https://www.sinmiedoainvertir.com/",
                  "fav" => "./img/sinmiedoainvertir.png"),

            array("title" => "Decrypt",
                  "html" => "https://decrypt.co/es/feed", 
                  "page" => "https://decrypt.co/es/",
                  "fav" => "./img/decrypt.png"),

            array("title" => "Cripto Día",
                  "html" => "https://www.criptodia.info/blog-feed.xml", 
                  "page" => "https://www.criptodia.info/",
                  "fav" => "./img/criptodia.png"),

            array("title" => "Criptoinforme",
                  "html" => "https://criptoinforme.com/feed/", 
                  "page" => "https://criptoinforme.com/",
                  "fav" => "./img/criptoinforme.png"),

            array("title" => "Investing",
                  "html" => "https://es.investing.com/rss/news_301.rss", 
                  "page" => "https://es.investing.com/news/cryptocurrency-news",
                  "fav" => "./img/investing.gif")
                        
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
    <meta name="description" content="Noticias Cripto - Últiamas noticias de Cripto - Información en un sólo lugar. Cripto Córdoba. Noticias de Cripto. Bitcoin. ETH">
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/theme.css">

    <title>Cripto - Noticias de Cripto - 24 Diario</title>
</head>

<?php include ('header.php');?>


 </nav>
 </div>
  <div class="container">

  <div class="row ml-3">
 <h1>Noticias Cripto - Bitcoin - DeFI - Ethereum</h1>
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
            <h2><p class="font-weight-bold mb-0">Noticias Cripto - Bitcoin - DeFI - Ethereum</p></h2>
            </div>

<br>

      <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://es.cointelegraph.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cointelegraph.gif" class="img-fluid" alt="Cpintelegrafh" width="16" height="16"> COINTELEGRAFH</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.criptonoticias.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/criptonoticias.gif" class="img-fluid" alt="Criptonocticias" width="16" height="16"> CRIPTONOTICIAS</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="http://cryptoplaza.es/noticias/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cryptoplaza.gif" class="img-fluid" alt="Cryptoplaza" width="16" height="16"> CRYPTOPLAZA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://criptonews.es/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/criptonews.gif" class="img-fluid" alt="Criptonews" width="16" height="16"> CRIPTONEWS</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.crypto-news-flash.com/es/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cryptonewsflash.gif" class="img-fluid" alt="Cripto News Flash" width="16" height="16"> CRYPTONEWSFLASH</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://observatorioblockchain.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/observatorioblockchain.gif" class="img-fluid" alt="Observatorio Blockchain" width="16" height="16"> O. BLOCKCHAIN</a>
                  </div>

                  </div>

                  <div class="row ml-1 mr-1 mb-1">

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://criptotendencia.com/category/noticias/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/criptotendencia.gif" class="img-fluid" alt="Criptotendencia" width="16" height="16"> CRIPTOTENDENCIA</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.diariobitcoin.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/diariobitcoin.gif" class="img-fluid" alt="Diario Bitcoin" width="16" height="16"> DIARIO BITCOIN</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://es.beincrypto.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/beincrypto.gif" class="img-fluid" alt="Bein Crypto" width="16" height="16"> BEIN CRYPTO</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://es.investing.com/news/cryptocurrency-news" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/investing.gif" class="img-fluid" alt="Investing" width="16" height="16"> INVESTING</a>
                  </div>

                  <div class="col-md-2 col-6 d-flex justify-content-right align-self-center">
                  <a href="https://www.cripto247.com/" class='btn btn-light' target='_blank' rel='nofollow'><img src="./img/cripto247.gif" class="img-fluid" alt="Cripto247" width="16" height="16"> CRIPTO247</a>
                  </div>

            </div>


 <div class="row ml-3 mr-1 border-bottom">
 <h2><p class="font-weight-bold mb-0">Últimas Noticias de Cripto</p></h2>
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
      $cachefile = '/home/diarioarg/24diario.com.ar/cripto.html';
      $cached = fopen($cachefile, 'w');
      fwrite($cached, ob_get_contents());
      fclose($cached);
      ob_end_flush(); // Enviar el navegador
     ?> 

  </body>
</html>