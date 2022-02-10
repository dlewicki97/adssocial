<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $settings->meta_title ?></title>
  <meta name="description" content="<?= $settings->description ?>">
  <link rel="icon" href="<?= file_url(). $settings->logo ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="<?= assets() ?>fonts/tommy.css">
  <link rel="stylesheet" href="<?= assets() ?>css/substyle.css"> -->
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/bootstrap.min.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/bootstrap.used.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/mdb.min.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/mdb.used.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/substyle.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/fonts/tommy.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>css/fonts/arkipelago.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>dist/assets/owl.carousel.min.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?= assets() ?>dist/assets/owl.theme.default.min.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"  async />
  <style>
    <?php if($this->uri->segment(1) == 'franczyza'): ?>
    .subpage_banner::before, .subpage_banner::after {
          border-bottom-right-radius: 45px;
    }
  <?php endif; ?>
  </style>
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
</head>

<div class="fb-popup">
  <a target="_blank" href="https://www.facebook.com/kampanie.social" style="color: #fff;">
    <img class="lazy nav-social-icon entered loaded" data-src="https://adssocial.pl/uploads/2020-12-01/fb.svg" alt="" data-ll-status="loaded" src="https://adssocial.pl/uploads/2020-12-01/fb.svg" style="transform: scale(.8); padding-right: 5px;">
  </a>
</div>