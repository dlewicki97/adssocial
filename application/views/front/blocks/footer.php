<footer id="kontakt">
  <div class="d-flex flex-wrap w-100 contact-form">
    <div class="col-12 col-lg-6 mt-5">
      <div class="d-flex flex-column center-mobile">
        <div class="d-flex flex-wrap">
          <h2 class="section-title d-flex align-items-end mr-3"><?= $contact_descriptions->title ?></h2>
          <img data-src="<?= file_url(). $contact_descriptions->photo ?>" alt="" class="lazy footer-emoticon">
        </div>
        <p class="section-subtitle"><?= $contact_descriptions->subtitle ?></p>

        <div class="d-flex contact-buttons">
          <a href="<?= $settings->fb_link ?>">
            <button class="button contact messenger mr-2">
              <?= $contact_buttons[0]->icon ?>
              <?= $contact_buttons[0]->title ?>
            </button>
          </a>
          <a href="tel:<?= $contact_settings->phone1 ?>">
            <button class="button contact mr-2">
              <?= $contact_buttons[1]->icon ?>
              <?= $contact_buttons[1]->title ?>
            </button>
          </a>
          <a target="_blank" href="https://www.google.com/maps/place/<?= $contact_settings->address ?>,+<?= $contact_settings->zip_code ?>+<?= $contact_settings->city; ?>">
            <button class="button contact">
              <?= $contact_buttons[2]->icon ?>
              <?= $contact_buttons[2]->title ?>
            </button>
          </a>
          
        </div>

        <div class="d-flex contact-form-descriptions">
          <div>
            <h2 class="section-title"><?= $contact_descriptions->form_title ?></h2>
            <p class="section-subtitle"><?= $contact_descriptions->form_subtitle ?></p>
          </div>
        </div>

        <form id="contact-form" action="<?= base(). 'mailer/send' ?>" method="post">
          <div class="contact-form-container">
            <div class="d-flex w-100 flex-wrap">
              <div class="col-6 pl-0 ">
                <div class="md-form">
                  <input type="text" required id="name" name="name" class="form-control">
                  <label for="name"><?= $contact_descriptions->name ?></label>
                </div>
              </div>
              <div class="col-6 px-0">
                <div class="md-form">
                  <input type="email" required id="email" name="email" class="form-control">
                  <label for="email"><?= $contact_descriptions->email ?></label>
                </div>
              </div>
              <div class="col-lg-6 col-12 pl-0 contact-phone">
                <div class="md-form">
                  <input type="text" required id="phone" name="phone" class="form-control">
                  <label for="phone"><?= $contact_descriptions->phone ?></label>
                </div>
              </div>
              <div class="col-lg-6 col-12 px-0">
                <div class="md-form">
                  <input type="text" required name="company" id="company" class="form-control">
                  <label for="company"><?= $contact_descriptions->company ?></label>
                </div>
              </div>
              <div class="col-12 px-0">
                <div class="md-form">
                  <input type="text" required name="subject" id="subject" class="form-control">
                  <label for="subject"><?= $contact_descriptions->subject ?></label>
                </div>
              </div>
              <div class="col-12 px-0">
                <div class="md-form">
                  <textarea id="message" required name="message" class="md-textarea form-control" rows="3"></textarea>
                  <label for="message"><?= $contact_descriptions->message ?></label>
                </div>
              </div>
              <div class="col-12 px-0">
                <div class="form-check p-0 position-relative">
                  <div class="checkbox-border"></div>
                  <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1" required>
                  <label class="form-check-label" for="rodo1"><?= $settings->rodo ?></label>
                </div>
              </div>
              <div class="col-12 px-0 mb-5">
                <div class="float-right mt-4">
                  <button type="submit" class="button submit-form"><?= $contact_descriptions->button_name ?></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-12 col-lg-6 pr-0 map">
      <iframe src="<?= $contact_settings->map ?>" width="100%" height="100%" frameborder="0" style="border:0; opacity: 0.4; filter: grayscale(1);" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  <div class="ad-awards">
    <div class="d-flex footer-links">
      <?php foreach($subpages as $subpage): ?>
        <?php if($subpage->visible): ?>
        <a class="ad-awards-link" href="<?= $subpage->page ?>"><?= $subpage->title ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <div class="first-color position-relative" style="z-index: 1000;">
      Made by <a class="adw" target="_blank" href="https://agencjamedialna.pro/">Ad Awards</a>
    </div>
  </div>
  <img class="lazy footer-lemon" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
</footer>

<script src="<?= assets() ?>js/jquery.min.js" type="text/javascript"></script>
<script defer type="text/javascript" src="<?= assets() ?>js/popper.min.js"></script>
<script defer type="text/javascript" src="<?= assets() ?>js/bootstrap.min.js"></script>
<script defer type="text/javascript" src="<?= assets() ?>js/mdb.min.js"></script>
<script defer type="text/javascript" src="<?= assets() ?>js/filter-realizations.js"></script>
<script defer type="text/javascript" src="<?= assets() ?>js/cookies.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"  async></script>
<script src="<?= assets() ?>dist/owl.carousel.min.js"></script>
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
    nav.style.height = '100%';
    nav.style.zIndex = '1';
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
$(document).ready(function(){
  let owl1 = $('.owl-carousel1').owlCarousel({
    responsive: {
      0 : {items: 1},
      567: {items: 2},
      992: {items: 4}
    },
    dots: false
  });

  owl1.on('drag.owl.carousel', e => e.preventDefault());


  let owl = $('.owl-carousel2').owlCarousel({
    responsive: {
      0: {items: 3},
      676: {items: 5},
      992: {items: 7}
    },
    loop:true,
    autoplay:false,
    nav: false,
    dots: false,
    startPosition: 0,
    rewind: false,
    lazyLoad: true


  })

  $('.owl-carousel2').prepend('<div class="team-frame"></div>');

  window.addEventListener('resize', () => {
    document.getElementsByClassName('team-frame')[0].style.width = document.getElementsByClassName('owl-carousel2')[0].getElementsByClassName('owl-item')[0].style.width;

    document.getElementsByClassName('team-frame')[0].style.height = document.getElementsByClassName('owl-carousel2')[0].getElementsByClassName('owl-item')[0].getElementsByClassName('team-img')[0].getBoundingClientRect().height + 'px';
  })

  document.getElementsByClassName('team-frame')[0].style.width = document.getElementsByClassName('owl-carousel2')[0].getElementsByClassName('owl-item')[0].style.width;

  document.getElementsByClassName('team-frame')[0].style.height = document.getElementsByClassName('owl-carousel2')[0].getElementsByClassName('owl-item')[0].getElementsByClassName('team-img')[0].getBoundingClientRect().height + 'px';

  owl.on('changed.owl.carousel', callback)

  function callback(event) {
    let frame = document.getElementsByClassName('team-frame')[0];
    let items = document.getElementsByClassName('owl-carousel2')[0].getElementsByClassName('owl-item');

    let width = window.innerWidth;
    let offset;
    if(width <= 676) offset = 1;
    else if(width > 676 && width <= 992) offset = 2;
    else offset = 3;

    let currentItem = items[event.item.index + offset];
    for(let i=0 ; i<items.length ; i++) {
      let teamContent = items[i].getElementsByClassName('team-content')[0];
      if(teamContent.classList.contains('active')) teamContent.classList.remove('active');
      document.getElementsByClassName('team-descriptions-content')[0].innerHTML = document.getElementsByClassName('team-desc')[i].innerHTML;
    }
    currentItem.getElementsByClassName('team-content')[0].classList.add('active');
    document.getElementsByClassName('team-descriptions-content')[0].innerHTML = currentItem.getElementsByClassName('team-desc')[0].innerHTML;

  }
  let width = window.innerWidth;
  let offset;
  if(width <= 676) offset = 5;
  else if(width > 676 && width <= 992) offset = 7;
  else offset = 10; 

  document.getElementsByClassName('owl-carousel2')[0].getElementsByClassName('owl-item')[offset].getElementsByClassName('team-content')[0].classList.add('active');
  document.getElementsByClassName('team-descriptions-content')[0].innerHTML = document.getElementsByClassName('owl-carousel2')[0].getElementsByClassName('owl-item')[offset].getElementsByClassName('team-desc')[0].innerHTML;

  $('.next').click(function() {
    owl.trigger('next.owl.carousel');
  })
  $('.prev').click(function() {
    owl.trigger('prev.owl.carousel');
  })

});




</script>
<script async defer src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script>
<script async>

  $('#contact-form').submit(function(event) {
    event.preventDefault();
    var email = $('#email').val();
    grecaptcha.ready(function() {
      grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
        $('#contact-form').prepend('<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
        $('#contact-form').unbind('submit').submit();
      });;
    });
  });

</script>
</body>
</html>