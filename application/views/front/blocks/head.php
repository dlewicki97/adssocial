<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $settings->meta_title ?></title>
  <meta name="description" content="<?= $settings->description ?>">
  <link rel="icon" href="<?= file_url(). $settings->logo ?>" type="image/x-icon">
  <!-- <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/bootstrap.min.css"> -->
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/bootstrap.used.css">
  <!-- <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/mdb.min.css"> -->
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/mdb.used.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/style.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/fonts/tommy.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/fonts/arkipelago.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>dist/assets/owl.carousel.min.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>dist/assets/owl.theme.default.min.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"  async />
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '269040237972772'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=269040237972772&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      
</head>
<body>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="100369865322059"
  theme_color="#44bec7"
  logged_in_greeting="Cześć! W czym możemy pomóc?"
  logged_out_greeting="Cześć! W czym możemy pomóc?">
      </div>

<div class="fb-popup">
  <a target="_blank" href="https://www.facebook.com/kampanie.social" style="color: #fff;">
    <img class="lazy nav-social-icon entered loaded" data-src="https://adssocial.pl/uploads/2020-12-01/fb.svg" alt="" data-ll-status="loaded" src="https://adssocial.pl/uploads/2020-12-01/fb.svg">
  </a>
</div>


<div id="fb-root"></div>