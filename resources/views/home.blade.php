@extends('layouts.layout')

@section('content')



<!-- =========================
     Section1 - Header   
============================== -->
  <div class="jumbotron">
    <div class="container">

      <div class="row">
        <!-- Header Left -->
        <div class="col-md-7 col-sm-6">
          <p style="margin: 0 0 25px;color: rgba(150,175,195,0.55);position: absolute;top: -98px;font-size: 1.6rem;" class="visible-xs">
            <i style="color: #EF6262; font-size:1.125em; position:relative; top:2px;margin-right: 7px;left:0" class="fa fa fa-arrow-circle-right"></i>
           La solution de facturation<br>  des Autoentrepreneurs.
          </p>
          <div class="logo">
            <a href="#"><img src="img/fh-logomini.png"></a>
            <!-- <h2 class="hidden-xs" style="font-size: 1.275rem;
            opacity: 0.57;
            font-weight: 700;
            word-spacing: 7px;
            text-shadow: 1px 1px 7px rgba(32,155,232, 0.97) !important;
            font-style: italic;">DEVIS FACTURES COMPTA<span class="visible-lg-inline">BILITÉ</span>
            </h2> -->
          </div>
          <div class="verticle-line">
            <h1>Faites vos factures <br>
              le plus simplement du monde.</h1><br>
            <!-- <h2 class="hidden-xs">DEVIS / FACTURES / COMPTA<span class="visible-lg-inline">BILITÉ</span></h2> -->
          </div>
          <p class="hidden-sm hidden-xs">La solution de facturation pour les Autoentrepreneurs,<br>
          <i style="color: #EF6262; font-size:1.125em; position:relative; top:2px;margin-right: 7px;left:0" class="fa fa fa-arrow-circle-right"></i><span style="opacity:0.68;">créée et développée par un <u>autoentrepreneur</u>.</span></p>
          <!-- <button class="view-detail">View Detail</button> -->
        </div>
        <!-- /End Header Left --> 
        <!-- Header Form -->


        <div class="col-md-5 col-sm-6" id="join-us-form"> 

          <!-- Form Title -->
            <h2 class="form-title">Facturez facilement et rapidement. <br>
            <span class="visible-lg-inline">
              Simple, intuitif et accessible partout.
            </span><br>
          <span class="arrow-down"></span>
              </h2>
          <!--- /End Form Title -->
		<div class="form-bg">
          <div id="join-us-results"></div>
          <!-- Form -->
           <div style="height:47px" class="form-group">
             <p style="color:#b0b0b0; margin:1px !important; font-weight: bold; font-family: font-family: 'Roboto Slab', serif !important;border-bottom: 3px dashed #e0e0e8;
padding: 1px;
">Inscription</p>
           </div>















           
            <form autocomplete="off" class="" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus placeholder="nom d'utilisateur">
                
                        @if ($errors->has('name'))
                            <span class="help-block">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                </div> -->

                <div style="margin-bottom: 0" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    @if ($errors->has('email'))
                      <span class="help-block">
                        {{ $errors->first('email') }}
                      </span>
                    @endif
                    @if ($errors->has('password'))
                      <span class="help-block">
                        {{ $errors->first('password') }}
                      </span>
                    @endif
                    
                    <div class="posrel inputone">
                        <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" id="email" type="text" class="form-control inputText" name="email" value="{{ old('email') }}" />
                         <span class="floating-label">email</span> 
                    </div>
                </div>

                <div style="margin-bottom: 0" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="posrel inputtwo">
                        <input id="password" type="password" class="form-control inputText" name="password" autocomplete="new-password" />
                        <span class="floating-label">créer un mot de passe</span>
                    </div>
                </div>

                <div id="pswd_info">
                  <ul>
                      <!-- <li id="letter" class="invalid">au moins <strong>une lettre</strong></li>
                      <li id="number" class="invalid">au moins <strong>un chiffre</strong></li> -->
                      <li id="length" class="invalid">min. <strong>6 caractères</strong></li>
                      <li id="visualcheckvalidationpwd"><i style="color:#00B4C2;font-size: 1.6rem;" class="fa fa-check-circle"></i><strong> Mot de passe de super héro!</strong></li>
                      <li id="nooccur"></li>
                      <!-- <li id="errorwhiletyping"></li> -->
                  </ul>
              </div>

                 <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <div class="">
                       <input autocomplete="off" id="password-confirm" type="password" placeholder="confirmer le mot de passe" class="form-control" name="password_confirmation" >
                        @if ($errors->has('password'))
                           <span class="help-block">
                               {{ $errors->first('password') }}
                           </span>
                       @endif
                   </div>
                                </div>  -->

               <button type="submit" class="submit-btn" id="submit_btn">Je m'inscris gratuitement
                 <i class="fa fa fa-arrow-circle-right visible-lg-inline" style="color: rgba(255,155,155,0.77); font-size:1.375em; position:absolute; top:14px;right:40px;"></i>
               </button>
                
                <div style="margin-bottom: 45px" class="form-group">

                  <p style="color:#324E5C; margin:1px !important; font-weight: bold; font-size:1.2rem; font-family: font-family: 'Roboto Slab', serif !important;margin-top:2px;opacity: 0.91">
                    Essayer gratuitement et sans engagement.<br>
                    <!--  <span class="visible-lg-inline" style="opacity:0.77">Tarif réduit lors de la sortie officielle pour les 100 premiers utilisateurs.</span> -->
                  </p>
                </div>

            </form>
            
            
			
          </div>
          <!-- /End Form --> 
        </div>
        <!-- /End Header Form --> 

        <div class="col-md-5 col-sm-6 col-md-offset-7 col-sm-offset-6" id="">
            <p style="margin: 7px 0 0 0" class="handwrite">Version Beta <i style="color: #fff; position:relative;margin-left:11px;top:1px" class="fa fa-angle-right"></i>
              <span style="color: #fff;margin-left: 11px;font-family:Arial, Helvetica, sans-serif;">Disponible été 2017</span>
            </p> 
            <p style="margin-top:1px !important; font-size:1.5rem;margin-top:2px;opacity: 0.87">
            *Accès gratuit à vie pour les <u>100 premiers inscrits</u>.
            </p>
        </div>




      </div>
    </div>
  </div>


<!-- =========================
     Section2 - Advertised   
============================== -->
<div id="advertised-section">
  <div class="container"> 
    <div class="row">
      <!-- Box1 -->
      <div class="col-md-3">
        <div class="advertised red">
          <div class="arrow-left"></div>
          <div class="arrow-down-2"></div>
          <p><span style="margin-right: 5px;opacity: 0.37;font-size: 1.97rem"><i class="icon s7-signal"></i></span>
          
          Online & accessible</p>
        </div>
      </div>
      <!-- /End Box1 --> 
    
    <!-- Box2 -->
    <div class="col-md-3">
      <div class="advertised">
        <p><span style="margin-right: 5px;opacity: 0.37;font-size: 1.97rem"><i class="fa fa-plus-circle"></i></span>Rapide & fluide</p>
      </div>
    </div>
    <!-- /End Box2 --> 
    
    <!-- Box3 -->
    <div class="col-md-3">
      <div class="advertised">
        <p><span style="margin-right: 5px;opacity: 0.37;font-size: 1.97rem"><i class="fa fa-plus-circle"></i></span>Intelligente</p>
      </div>
    </div>
    <!-- /End Box3 --> 
    
    <!-- Box4 -->
    <div class="col-md-3">
      <div class="advertised">
        <p><a href="#"><img alt="" src="img/certification-ready.png"></a></p>
      </div>
    </div>
    <!-- /End Box4 --> 
  </div>
</div>
</div>


<!-- =========================
     Section6 - Clients   
============================== -->
<section style="background:#fff">
  <div class="container">
    <div style="border:0px solid #e1e5ea;border-radius: 4px;" class="white-bg">
       <h2>Le mot du fondateur</h2>
      <!-- Client Image -->
      <div class="client-img"><img width="120" height="auto" alt="" src="img/fondateur-frederic.png"></div>
      
      <!-- Cliant Testimonial -->
      <blockquote class="client-saying">
        <p>"J'ai créé FactureHero.com pour faciliter la vie des Autoentrepreneurs comme moi. La législation en cours va dans le sens d'une obligation d'utiliser des logiciels agréés pour faire nos factures et notre comptabilité. <br><br>Je suis personnellement contre toute obligation et pour la liberté de choix.<br><br>
        <strong>C'est pourquoi j'ai décidé pour le moment, de mettre ma solution en <u>accès libre et gratuit</u>.</strong>"
        </p> 
        </blockquote>
    </div>
  </div>
</section>




<!-- =========================
     Section3 - Features   
==============================
<section id="feature-section">
  <div class="container">
    <div class=" col-md-12 white-bg"> 

DEBUT SLIDE
    
FIN SLIDE
      Features Left
      <div class="col-sm-8">
          <h2 class="verticle-line">Features<br>
            you will love & enjoy.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh neque, convallis ut interdum a, consequat sit amet mauris. Vivamus sed tincidunt enim.  per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
        <ul class="feature-list">
          <li>
            <div class="feature-bullet">1</div>
            <div class="feature-content">
                <h3>Desktop & Mobile Version.</h3>
                <p>Lorem ipsum dolor, consectetur convallis ut  sit amet mauris.</p>
            </div>
          </li>
          <li>
            <div class="feature-bullet">2</div>
            <div class="feature-content">
                <h3>Drag & Drop Builder.</h3>
                <p>Lorem ipsum dolor, consectetur convallis ut  sit amet mauris.</p>
            </div>
          </li>
          <li>
            <div class="feature-bullet">3</div>
            <div class="feature-content">
                <h3>Awesome Modern Design.</h3>
                <p>Lorem ipsum dolor, consectetur convallis ut  sit amet mauris.</p>
            </div>
          </li>
          <li>
            <div class="feature-bullet">4</div>
            <div class="feature-content">
                <h3>Super Easy to Edit.</h3>
                <p>Lorem ipsum dolor, consectetur convallis ut  sit amet mauris.</p>
            </div>
          </li>
        </ul>
      </div>
      /End Features Left 
      
      Features Right
      <div class="col-sm-4 phone-img">
        <img alt="" src="img/mobile.png">
      </div>
      /End Features Right 
  </div>
</div>
</section>
 -->
<!-- =========================
     Section4 - Design   
============================== -->
<section style="background-image:linear-gradient(-180deg,#0e1f35 0,#21455c 100%);position:relative;background-attachment:fixed;box-shadow:0px -7px 11px rgba(32,45,132,0.27)">
  <div class="stars"></div>
  <div class="small-clouds"></div> 
  <!-- <div class="cloudstream upward"></div><div class="cloudstream downward"></div> -->
 
  <div class="container">
    <div style="background:transparent;" class="red-bg">

    
    
      <!-- HEADING -->
     <!--  <h2>Sortie en Juin 2017 ...</h2> -->
      <p>Disponible en version <span class="beta-firstletter">β</span><span class="uppercase">eta</span> été 2017
       <br>
      
      </p>
      
       <button class="submit-btn white-btn btn-space elevator-btn" id="submit_btn">S'INSCRIRE MAINTENANT <i class="fa fa-arrow-right"></i></button>
       <p class="" style="color:#93c3d8; margin:1px !important; font-weight: bold; font-size:1.7rem; font-family: font-family: 'Roboto Slab', serif !important;">
          Gratuitement et sans engagement<br>
          <span style="opacity:0.7; font-size:1.33rem"><i style="font-size:2.1rem; color: rgba(255,255,255,1)" class="fa fa-gift hidden-xs"></i> Accès gratuit à vie pour les <u>100 premiers inscrits</u>.</span>
        </p>
      <!-- Video -->
      <div class="video-img"><img alt="" src="img/laptop-customerss.png">
        <div class="video">
          <ul id="content-slider" class="content-slider">
                <li>
                    <img src="img/clients-list.png">
                </li>
                <li>
                    <img src="img/2-ajouter-client.png"> 
                </li>
                <li>
                    <img src="img/3-devis-list.png"> 
                </li>
                <li>
                     <img src="img/iban.png"> 
                </li>
                <li>
                    <img src="img/5-make-devis.png"> 
                </li>
            </ul>
         <!-- <iframe src="https://player.vimeo.com/video/88902745?color=ffffff" allowfullscreen></iframe> -->
        </div>
      </div>
    </div>
</div>
</section>

<!-- =========================
     Section8 - Subscribe   
============================== -->
<section style="background: url(https://olivier-bessaignet.com/web-marketing/wp-content/themes/megazine_v1-02/images/pattern/pattern-1.png); color: #444" id="subscribe-bg">
  <div class="container">
    <div style="background: transparent;" class="col-md-12 white-bg">
    
    <!-- Section Heading -->
      <h2 style="margin-bottom: 0">RESTEZ INFORMÉS</h2>
      <p style="margin-top: 0; margin-bottom: 20px">Suivez l'évolution de l'application<br> en cliquant sur "J'aime"</p>
      <div class="separator"></div>

      <!-- Newsletter -->
      <div class="clearfix">
      <div class="text-center">
      <div class="fb-page" data-href="https://www.facebook.com/facturehero" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facturehero" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facturehero">FactureHero.com</a></blockquote></div>
      </div>

      <div class="newsletter">
      
      <!-- Newsletter Error -->
      <!-- <div id="newsletter-error">Subscribe error, please review your email address.</div>
                
      Newsletter Success       
      <div id="newsletter-success">You're now subscribed, thank you!</div> -->

      <!-- Begin MailChimp Signup Form -->
      <!-- <div id="mc_embed_signup">
          <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
              <div id="mc_embed_signup_scroll">
                  <input class="newsletter-input email" type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="email address" required>
                  real people should not fill this in and expect good things - do not remove this or risk form bot signups
                  <div style="position: absolute; left: -5000px;">
                      <input type="text" name="b_cfe258a0cf370d5efaa793bc7_fa81ce5caf" tabindex="-1" value="">
                  </div>
                  <div class="clear">
                      <input class="newsletter-button" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                  </div>
              </div>
          </form>
      </div> -->
      
      
      




@endsection




@section('pagescript')

<!-- =========================
     Scripts   
============================== -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/lightslider.min.js"></script> 
<script src="js/elevator.min.js"></script>

<script>
  $(document).ready(function() {
      $("#content-slider").lightSlider({
                item:1,
                controls:false,
                pause:3000,
                speed:400,
                pauseOnHover: false, 
                keyPress:true,
                auto:true,
                loop:true,
      });

      // Elevator script included on the page, already.
      window.onload = function() {
        var elevator = new Elevator({
          element: document.querySelector('.elevator-btn'),
           targetElement: document.querySelector('#join-us-form'),
          endAudio: 'music/ding.mp3',
          startCallback: function() {
            // is called, when the elevator starts moving
            $('#join-us-form').removeClass('pulse animated')
          },
          endCallback: function() {
            // is called, when the elevator reached target level
            $('#join-us-form').addClass('pulse animated');
          }
        });
      }

      $('#submit_btn').on('mouseover', function(e){
      	$(this).find('i').addClass('i-anim');
      });
      $('#submit_btn').on('mouseout', function(e){
      	$(this).find('i').removeClass('i-anim');
      });

      $('a.targetblank').attr('target', '_blank');


});








</script>
@stop
