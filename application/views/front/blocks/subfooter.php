<footer>
  <div class="ad-awards">
    <div class="d-flex footer-links">
      <?php foreach($subpages as $subpage): ?>
        <?php if($subpage->visible): ?>
        <a class="ad-awards-link" href="<?= base_url().$subpage->page ?>"><?= $subpage->title ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <div class="first-color position-relative" style="z-index: 1000;">
      Made by <a class="adw" target="_blank" href="https://agencjamedialna.pro/">Ad Awards</a>
    </div>
  </div>
  <!-- <img class="lazy footer-lemon" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>"> -->
</footer>
</body>
  <script type="text/javascript" src="<?= assets() ?>subpage/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?= assets() ?>subpage/js/popper.min.js"></script>
  <script type="text/javascript" src="<?= assets() ?>subpage/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= assets() ?>subpage/js/mdb.min.js"></script>
  <script type="text/javascript" src="<?= assets() ?>dist/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"  async></script>
  <script type="text/javascript">
  // $(document).ready(function(){
  //     $('.owl-carousel').owlCarousel({
  //     loop:true,
  //     margin:10,
  //     nav:false,
  //     dots:false,
  //     startPosition: 1,
  //     responsive:{
  //         0:{
  //             items:1
  //         },
  //         600:{
  //             items:2
  //         },
  //         800:{
  //             items:3
  //         },
  //         1000:{
  //             items:4
  //         },
  //         1400:{
  //             items:5
  //         }
  //     }
  // })
  // });
  $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:false,
      startPosition: 1,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          800:{
              items:3
          },
          1000:{
              items:4
          },
          1400:{
              items:5
          }
      }
  })
  });
  </script>
 
<script>
  var lazyLoadInstance = new LazyLoad({});

  let nav = document.getElementById('nav')
  let navOpen = document.getElementById('nav-button');
  let navClose = document.getElementById('nav-button-close');

  navOpen.addEventListener('click', () => {
    openNav()
  })
  navClose.addEventListener('click', () => {
   closeNav('')
 })

  function openNav() {
    nav.style.backgroundColor = 'var(--second-color)';
    nav.style.height = '100vh';
    nav.style.zIndex = '10';
    nav.style.position = 'absolute';
    nav.style.alignItems = 'baseline';
    navOpen.style.display = 'none';
    navClose.style.display = '';
    document.body.style.overflowY = "hidden";
    if(window.innerHeight < 650) {
      nav.style.overflow = 'scroll';
    }
    document.getElementById('nav-socials').classList.remove('d-none');
  }

  function closeNav(link) {
    nav.style.backgroundColor = 'unset';
    nav.style.height = 'unset';
    nav.style.zIndex = 'unset';
    nav.style.position = 'unset';
    navOpen.style.display = '';
    navClose.style.display = 'none';
    document.body.style.overflowY = "scroll";
    document.getElementById('nav-socials').classList.add('d-none');
    let collapse = document.getElementsByClassName('navbar-collapse')[0];
    if(link == 'link') {
      if(collapse.classList.contains('show')) collapse.classList.remove('show')
    }
  if(nav.style.overflow == 'scroll') nav.style.overflow = 'unset';
}
</script>
<script async defer src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script>
<script async>

  $('#contact-form').submit(function(event) {
    event.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
        $('#contact-form').prepend(`<input type="hidden" name="token" value="${token}">`);
        $('#contact-form').unbind('submit').submit();
      });;
    });
  });

  $('#contact-form1').submit(function(event) {
    event.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('<?= $settings->captcha ?>', {action: 'franchise_mailer/send'}).then(function(token) {
        $('#contact-form1').prepend(`<input type="hidden" name="token" value="${token}">`);
        $('#contact-form1').unbind('submit').submit();
      });;
    });
  });

  $('#contact-form2').submit(function(event) {
    event.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('<?= $settings->captcha ?>', {action: 'franchise_mailer/send'}).then(function(token) {
        $('#contact-form2').prepend(`<input type="hidden" name="token" value="${token}">`);
        $('#contact-form2').unbind('submit').submit();
      });;
    });
  });

</script>

<script type="text/javascript">
  window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#129393",
        "text": "#fff"
      },
      "button": {
        "background": "#129393",
        "text": "#fff"
      }
    },
    "type": "opt-out",
    "content": {
      "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
      "dismiss": "Rozumiem",
      "deny": "",
      "allow": "Rozumiem",
      "link": "Czytaj więcej...",
      "href": "<?= base_url('uploads/'.$settings->privace); ?>"
    }
  })});
  </script>

</html>