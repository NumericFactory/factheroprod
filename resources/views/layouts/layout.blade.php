<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>FactureHero</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="FactureHero, la solution de Facturation pour les Autoentrepreneurs, développée par un Autoentrepreneur.">
<meta name="description" content="Autoentrepreneur ? Testez notre solution de facturation. Online, Simple & intuitive, dévélopée par un Autoentrepreneur, et ça change tout ... ">
<meta name="author" content="FactureHero.com">
<!-- Bootstrap -->

<!-- Custom Style Sheet -->
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet"  href="css/lightslider.min.css"/>
<link rel="stylesheet"  href="css/animate.css"/>
<!--<link rel="shortcut icon" href="img/favicon.png">-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
     
    .demo .item{
            margin-bottom: 60px;
    }
    .content-slider li{
        background-color: transparent;
        text-align: center;
        color: #FFF;
    }
    .content-slider h3 {
        margin: 0;
        padding: 70px 0;
    }
    .demo{
      width: 800px;
    }
    </style>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
<meta property="og:type"   content="website" />
<meta property="fb:app_id" content="384168171984411" />  
<meta property="fb:admins" content="1069263654" />
<meta content="FactureHero.com" property="og:site_name">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="La solution de Facturation pour les Autoentrepreneurs | FactureHero ">
<meta property="og:description" content="Faites vos devis et factures le plus simplement du monde. FactureHero est  développé une solution online, rapide et intuitive, développée par un Autoentrepreneur.">
<meta property="og:url" content="https://facturehero.com/">
<meta property="og:image" content="https://facturehero.com/img/logiciel-facturation-autoentrepreneur.png">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=384168171984411";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- =========================
     Pre-loader 
============================== -->

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div id="object"></div>
        </div>
    </div>
</div>



  @yield('content')







<!--End mc_embed_signup-->
       <!--  </div> -->
        
        <!-- Social Media -->
        <div class="social">
          <p>FactureHero est aussi là <i style="color: #EF6262; font-size:1.125em; position:relative; top:2px;left: 7px;" class="fa fa fa-arrow-circle-down"></i></p>
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/facturehero"><img alt="" src="img/social1.png"></a></li>
            <li><a href="https://twitter.com/facturehero"><img alt="" src="img/social2.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
     Section9 - Copyright   
============================== -->
<footer class="copyright-section">
  <div class="container">
    <div class="col-md-12 ">
      <P>© Copyright 2017 <a class="targetblank" href="https://frederic-lossignol.com">Frédéric LOSSIGNOL</a>
      Designed by <a class="targetblank" href="https://www.facebook.com/frederic.lossignol">Me</a>.
      </P>
    </div>
  </div>
</footer>


		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@yield('pagescript')



</body>
</html>