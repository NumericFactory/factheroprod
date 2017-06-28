@extends('layouts.layout')

@section('content')

<!-- =========================
     Section4 - Design   
============================== -->
<section style="background-image:linear-gradient(-180deg,#0e1f35 0,#21455c 100%);position:relative;background-attachment:fixed;box-shadow:0px -7px 11px rgba(32,45,132,0.27)">
  <div class="stars"></div>
  <div class="small-clouds"></div> 
  <!-- <div class="cloudstream upward"></div><div class="cloudstream downward"></div> -->
 
  <div style="max-width: 700px;" class="container">
    <div style="background:transparent; max-width: 700px;" class="red-bg">

    
    
      <!-- HEADING -->
     <!--  <h2>Sortie en Juin 2017 ...</h2> -->
      
      </p>
      
      <h2>Merci de votre inscription<br><br></h2>
       <p class="" style="color:#93c3d8; margin:1px !important; font-weight: bold; font-size:1.77rem; font-family: font-family: 'Roboto Slab', serif !important;">
         Pour faire partie des 100 premiers inscrits et obtenir FactureHero gratuitement à sa sortie, vous devez validez votre compte.
          <br>
          <br>
          <u>Rendez-vous dans votre boîte Email</u> et cliquez sur "Valider mon compte".
	<br>
          <br>
          A très vite.
<br>
          <br>
          Frédéric.
          
        </p>
      <!-- Video -->
      
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
