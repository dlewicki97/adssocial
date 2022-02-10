<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AD Social</title>
  <link rel="icon" href="./img/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fonts/tommy.css">
  <link rel="stylesheet" href="css/fonts/arkipelago.css">
  <link rel="stylesheet" href="dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="dist/assets/owl.theme.default.min.css">
</head>
<body>
  <header>
    <video src="./img/lemons.mp4" autoplay loop muted>
    </video>
    <div class="header-mask"></div>

    <nav id="nav" class="navbar navbar-expand-lg navbar-dark py-5">
      <div class="d-flex justify-content-between w-100">
        <a class="navbar-brand" href="#"><img class="lazy logo" data-src="./img/logo.svg" alt="logo"></a>

        <button class="navbar-toggler" id="nav-button" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <button class="navbar-toggler" style="display: none;" id="nav-button-close" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <img class="lazy img-fluid"   data-src="./img/close.svg" alt="">
    </button>

  </div>

  <div class="collapse navbar-collapse w-100 justify-content-between mt-0" id="basicExampleNav">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" onclick="closeNav('link')" href="#">Start
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="closeNav('link')" href="#realizacje">Realizacje</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="closeNav('link')" href="#zespol">Zespół</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="closeNav('link')" href="#uslugi">Usługi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="closeNav('link')" href="#kontakt">Kontakt</a>
      </li>


    </ul>



  </div>

  <div id="nav-socials" class="mr-auto d-none">
    <a href="#"><img class="lazy nav-social-icon" data-src="./img/fb.svg" alt=""></a>
    <a href="#"><img class="lazy nav-social-icon" data-src="./img/ig.svg" alt=""></a>
    <a href="#"><img class="lazy nav-social-icon" data-src="./img/in.svg" alt=""></a>
  </div>
</nav>

<section class="title">
  <div class="d-flex flex-column">
    <div class="mb-5">
      <h2 class="title-title">Agencja<br>Social media</h2>
      <p class="title-subtitle">Pokaż się w mediach społecznościowych<br>z najlepszej strony!</p>
    </div>
    <div class="d-flex mb-5">
      <button class="button outline mr-2">SPRAWDŹ REALIZACJE</button>
      <button class="button ml-2">SKONTAKTUJ SIĘ Z NAMI</button>
    </div>
    <div class="d-flex justify-content-center mt-3">
      <img data-src="./img/banner-1.svg" class="lazy banner-partners" alt="">
      <img data-src="./img/banner-2.svg" class="lazy banner-partners" alt="">
      <img data-src="./img/banner-3.svg" class="lazy banner-partners" alt="">
    </div>
  </div>
</section>
<img class="lazy header-lemon" data-src="./img/cytryna.png" alt="">
</header>
<main>
  <section id="realizacje" class="realizations">
    <div class="d-flex w-100 flex-column align-items-center">
      <h2 class="section-title">Realizacje</h2>
      <p class="section-subtitle">Sprawdź nasze ostatnio zrealizowane kampanie</p>
    </div>
    <div class="d-flex w-100 filter-box justify-content-center mt-2">
      <p class="filter-title">Filtruj: </p>
      <button class="button outline filter mr-2">SOCIAL BOX</button>
      <button class="button outline filter mr-2">SM E-COMMERCE</button>
      <button class="button outline filter">KAMPANIA LEAD GENERATION</button>
    </div>
    <div class="owl-carousel1 owl-carousel owl-theme">
      <div class="lazy bg-picture"  data-bg="./img/realizations-1.png">
        <div class="mask">
          <div>
            <img class="realizations-logo" style="height: 55px;" src="./img/realizations-logo-1.svg" alt="">
            <p class="realizations-title" >SOCIAL BOX</p>
          </div>
        </div>
      </div>

      <div class="lazy bg-picture"  data-bg="./img/realizations-2.png">
        <div class="mask">
          <div>
            <img class="realizations-logo" style="height: 52px;" src="./img/realizations-logo-2.svg" alt="">
            <p class="realizations-title">SOCIAL BOX | SM E-COMMERCE</p>
          </div>
        </div>
      </div>

      <div class="lazy bg-picture" data-bg="./img/realizations-3.png">
        <div class="mask">
          <div>
            <img class="realizations-logo" src="./img/realizations-logo-3.svg" alt="">
            <p class="realizations-title">SOCIAL BOX | SM E-COMMERCE<br>KAMPANIA LEAD GENERATION</p>
          </div>
        </div>
      </div>

      <div class="lazy bg-picture" data-bg="./img/realizations-4.png">
        <div class="mask">
          <div>
            <img class="realizations-logo" src="./img/realizations-logo-4.svg" alt="">
            <p class="realizations-title">SM E-COMMERCE</p>
          </div>
        </div>
      </div>

      <div class="lazy bg-picture" data-bg="./img/realizations-5.png">
        <div class="mask">
          <div>
            <img class="realizations-logo" src="./img/realizations-logo-5.svg" alt="">
            <p class="realizations-title">SOCIAL BOX</p>
          </div>
        </div>
      </div>

      <div class="lazy bg-picture" style="opacity: 0" data-bg="./img/realizations-5.png">
        <div class="mask">
          <div>
            <img class="realizations-logo" src="./img/realizations-logo-5.svg" alt="">
            <p class="realizations-title">SOCIAL BOX</p>
          </div>
        </div>
      </div>

    </div>

    <button class="button outline primary-button more">ZOBACZ WIĘCEJ</button>

    <img class="realizations-lemon" src="./img/cytryna.png" alt="">
    <img src="./img/cytryna.png" alt="" class="realizations-lemon-blur">

  </section>

  <section id="zespol" class="team">
    <div class="d-flex w-100 flex-column align-items-center">
      <h2 class="section-title">Zespół</h2>
      <p class="section-subtitle">Poznaj lepiej ekipę Ad Social!</p>
    </div>
    <div class="owl-carousel2 owl-carousel owl-theme">
      <div class="team-content">
        <img src="./img/mordki/natalia.jpg" class="img-fluid team-img" alt="">
        <h2 class="team-name">Natalia</h2>
        <div class="team-title">
          <div class="team-navigation">
            <img class="prev" src="./img/prev.svg" />
            <img class="next" src="./img/next.svg" />
          </div>
          JUNIOR GRAPHIC DESIGNER
        </div>
        <div class="team-desc">Lorem ipsum 1</div>
      </div>
      <div class="team-content">
        <img src="./img/mordki/arek.jpg" class="img-fluid team-img" alt="">
        <h2 class="team-name">Arek</h2>
        <div class="team-title">
          <div class="team-navigation">
            <img class="prev" src="./img/prev.svg" />
            <img class="next" src="./img/next.svg" />
          </div>
          JUNIOR GRAPHIC DESIGNER
        </div>
        <div class="team-desc">Lorem ipsum 2</div>
      </div>
      <div class="team-content">
        <img src="./img/mordki/amadeusz.jpg" class="img-fluid team-img" alt="">
        <h2 class="team-name">Amadeo</h2>
        <div class="team-title">
          <div class="team-navigation">
            <img class="prev" src="./img/prev.svg" />
            <img class="next" src="./img/next.svg" />
          </div>
          GRAPHIC DESIGNER
        </div>
        <div class="team-desc">Lorem ipsum 3</div>
      </div>
      <div class="team-content">
        <img src="./img/mordki/lukasz.jpg" class="img-fluid team-img" alt="">
        <h2 class="team-name">Łukasz</h2>
        <div class="team-title">
          <div class="team-navigation">
            <img class="prev" src="./img/prev.svg" />
            <img class="next" src="./img/next.svg" />
          </div>
          Social Media Director
        </div>
        <div class="team-desc">Rzadko spotykany okaz pesymistus marudus. Odnaleźć go można pod osłoną monitora, za którym klika coś w menedżerze fejsbukowym. Naturalne środowisko znaczy kubkami z niedopitym kakałkiem i briefami do kolejnych zleceń. Żelazna cierpliwość do klienta sprawia, że nie stał się jeszcze bohaterem kolejnej części milczenia owiec.</div>
      </div>
      <div class="team-content">
        <img src="./img/mordki/kasia.jpg" class="img-fluid team-img" alt="">
        <h2 class="team-name">Kasia</h2>
        <div class="team-title">
          <div class="team-navigation">
            <img class="prev" src="./img/prev.svg" />
            <img class="next" src="./img/next.svg" />
          </div>
          SOCIAL MEDIA SPECIALIST
        </div>
        <div class="team-desc">Lorem ipsum 5</div>
      </div>
      <div class="team-content">
        <img src="./img/mordki/kinga.jpg" class="img-fluid team-img" alt="">
        <h2 class="team-name">Kinga</h2>
        <div class="team-title">
          <div class="team-navigation">
            <img class="prev" src="./img/prev.svg" />
            <img class="next" src="./img/next.svg" />
          </div>
          JUNIOR GRAPHIC DESIGNER
        </div>
        <div class="team-desc">Lorem ipsum 6</div>
      </div>
      <div class="team-content">
        <img src="./img/mordki/justyna.jpg" class="img-fluid team-img" alt="">
        <h2 class="team-name">Justyna</h2>
        <div class="team-title">
          <div class="team-navigation">
            <img class="prev" src="./img/prev.svg" />
            <img class="next" src="./img/next.svg" />
          </div>
          JUNIOR GRAPHIC DESIGNER
        </div>
        <div class="team-desc">Lorem ipsum 7</div>
      </div>





    </div>
    <div class="team-descriptions">
      <div class="team-descriptions-content">Rzadko spotykany okaz pesymistus marudus. Odnaleźć go można pod osłoną monitora, za którym klika coś w menedżerze fejsbukowym. Naturalne środowisko znaczy kubkami z niedopitym kakałkiem i briefami do kolejnych zleceń. Żelazna cierpliwość do klienta sprawia, że nie stał się jeszcze bohaterem kolejnej części milczenia owiec.</div>
    </div>

  </section>

  <section id="uslugi" class="services lazy bg-picture" data-bg="./img/services-bg.png">
    <div class="mask"></div>
    <div class="position-relative">
      <div class="d-flex w-100 flex-column align-items-center services-descriptions">
        <h2 class="section-title">Usługi</h2>
        <p class="section-subtitle">Czym zajmuje się Ad Social?</p>
      </div>
    </div>

    <div class="d-flex flex-wrap w-100 services-wrapper">
      <div class="col-12 col-lg-6">
        <div class="service-bg"></div>
        <div class="services-content">
          <div>
            <h1 class="services-title">Social<br>Box</h1>
            <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa</p>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <button class="button">DOWIEDZ SIĘ WIĘCEJ</button>
            </div>
            <img class="lazy services-icon" data-src="./img/services-1.svg" alt="">
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="service-bg"></div>
        <div class="services-content">
          <div>
            <h1 class="services-title">Social Media<br>eCommerce</h1>
            <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut<br> fugit, sed quia consequuntur magni dolores eos, qui ratione<br>voluptatem</p>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <button class="button">DOWIEDZ SIĘ WIĘCEJ</button>
            </div>
            <img class="lazy services-icon" data-src="./img/services-2.svg" alt="">
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="service-bg"></div>
        <div class="services-content">
          <div>
            <h1 class="services-title">Lead<br>Generation</h1>
            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis<br>suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <button class="button">DOWIEDZ SIĘ WIĘCEJ</button>
            </div>
            <img class="lazy services-icon" data-src="./img/services-3.svg" alt="">
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="service-bg"></div>
        <div class="services-content">
          <div>
            <h1 class="services-title">Social<br>Campaign</h1>
            <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam<br>nihil molestiae consequatur, vel illum, qui<br>dolorem eum fugiat, quo voluptas nulla pariatur?</p>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <button class="button">DOWIEDZ SIĘ WIĘCEJ</button>
            </div>
            <img class="lazy services-icon" data-src="./img/services-4.svg" alt="">
          </div>
        </div>
      </div>

    </div>
  </section>
  <img class="circle-blue big circle lazy" data-src="./img/circle-blue.svg" alt="">
  <img class="circle-blue small circle lazy" data-src="./img/circle-blue.svg" alt="">
  <img class="circle-grey small circle lazy" data-src="./img/circle-grey.svg" alt="">
  <img class="circle-grey big circle lazy" data-src="./img/circle-grey.svg" alt="">
  <img class="lemon team lazy" data-src="./img/cytryna.png" alt="">
  <img class="circle-grey small under circle lazy" data-src="./img/circle-grey.svg" alt="">
  <img class="circle-blue small under circle lazy" data-src="./img/circle-blue.svg" alt="">
  <img class="lemon services-lemon blur big lazy" data-src="./img/cytryna.png" alt="">
  <img class="lemon services-lemon big lazy" data-src="./img/cytryna.png" alt="">
  <img class="lemon services-lemon small blur lazy" data-src="./img/cytryna.png" alt="">
  <img class="lemon services-lemon small lazy" data-src="./img/cytryna.png" alt="">
</main>
<footer id="kontakt">
  <div class="d-flex flex-wrap w-100 contact-form">
    <div class="col-12 col-lg-6 mt-5">
      <div class="d-flex flex-column">
        <div class="d-flex flex-wrap">
          <h2 class="section-title d-flex align-items-end mr-3">Zainteresowany?</h2>
          <img data-src="./img/emoticon.svg" alt="" class="lazy footer-emoticon">
        </div>
        <p class="section-subtitle">Skontaktuj się z nami!</p>

        <div class="d-flex contact-buttons">
          <button class="button contact messenger mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"><g><g><path  d="M19.164 9.472l-3.517 5.567a1.8 1.8 0 0 1-2.597.479l-2.798-2.094a.723.723 0 0 0-.867 0l-3.776 2.863c-.504.382-1.164-.221-.824-.755l3.517-5.567a1.8 1.8 0 0 1 2.597-.479l2.797 2.094c.257.193.61.193.867 0l3.778-2.86c.503-.385 1.163.218.823.752zM11.974.553C5.228.553 0 5.483 0 12.143c0 3.483 1.431 6.493 3.761 8.572.402.362.32.571.388 2.805a.96.96 0 0 0 1.343.847c2.549-1.123 2.582-1.211 3.014-1.094 7.385 2.033 15.39-2.693 15.39-11.13 0-6.66-5.175-11.59-11.922-11.59z"/></g></g></svg>
            Czatuj przez messenger
          </button>
          <button class="button contact mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g><g><path  d="M22.779 18.918c-.898-.897-3.053-2.247-4.116-2.753-1.233-.593-1.685-.58-2.558.048-.727.526-1.197 1.014-2.034.83-.836-.176-2.485-1.428-4.085-3.022-1.6-1.6-2.845-3.248-3.022-4.085-.177-.843.311-1.307.83-2.033.63-.873.647-1.325.049-2.559-.507-1.068-1.85-3.218-2.754-4.115C4.191.33 3.99.526 3.495.703c0 0-.732.294-1.459.776-.898.598-1.398 1.1-1.753 1.85-.348.751-.75 2.15 1.301 5.801 1.655 2.95 3.28 5.184 5.691 7.59l.006.006.006.006c2.412 2.412 4.641 4.037 7.59 5.691 3.652 2.052 5.05 1.65 5.801 1.301.751-.348 1.252-.849 1.85-1.752.483-.727.776-1.46.776-1.46.177-.494.379-.696-.525-1.594z"/></g></g></svg>
            Zadzwoń
          </button>
          <button class="button contact">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g><g><path  d="M12.736 14.491a1.991 1.991 0 1 1 0-3.982 1.991 1.991 0 0 1 0 3.982zm.022-10.329zm-3.507 7.84v.996c0 1.83 3.518 7.964 3.518 7.964s3.452-6.006 3.452-7.837V12c0-1.83-3.457-7.827-3.463-7.837-.003.005-3.507 6.01-3.507 7.84zm13.44.498c0 5.49-4.465 9.956-9.955 9.956S2.78 17.99 2.78 12.5c0-5.49 4.466-9.956 9.956-9.956 5.49 0 9.956 4.466 9.956 9.956zm1.992 0c0-6.588-5.36-11.947-11.947-11.947C6.148.553.789 5.913.789 12.5c0 6.587 5.36 11.947 11.947 11.947 6.587 0 11.947-5.36 11.947-11.947z"/></g></g></svg>
            Nawiguj!
          </button>
        </div>

        <div class="d-flex contact-form-descriptions">
          <div>
            <h2 class="section-title">Formularz kontaktowy</h2>
            <p class="section-subtitle">Wypełnij go, a postaramy się odpowiedzieć najszybciej jak tylko potrafimy! ;)</p>
          </div>
        </div>


        <div class="contact-form-container">
          <div class="d-flex w-100 flex-wrap">
            <div class="col-6 pl-0 ">
              <div class="md-form">
                <input type="text" id="name" class="form-control">
                <label for="name">Imię</label>
              </div>
            </div>
            <div class="col-6 px-0">
              <div class="md-form">
                <input type="email" id="email" class="form-control">
                <label for="email">Adres e-mail</label>
              </div>
            </div>
            <div class="col-6 pl-0">
              <div class="md-form">
                <input type="text" id="phone" class="form-control">
                <label for="phone">Numer telefonu</label>
              </div>
            </div>
            <div class="col-6 px-0">
              <div class="md-form">
                <input type="text" id="company" class="form-control">
                <label for="company">Nazwa firmy i/lub branża</label>
              </div>
            </div>
            <div class="col-12 px-0">
              <div class="md-form">
                <input type="text" id="subject" class="form-control">
                <label for="subject">Temat wiadomości</label>
              </div>
            </div>
            <div class="col-12 px-0">
              <div class="md-form">
                <textarea id="message" class="md-textarea form-control" rows="3"></textarea>
                <label for="message">Treść wiadomości</label>
              </div>
            </div>
            <div class="col-12 px-0">
              <div class="form-check p-0 position-relative">
                <div class="checkbox-border"></div>
                <input type="checkbox" class="form-check-input" id="rodo1" required>
                <label class="form-check-label" for="rodo1">Wyrażam zgodę na przetwarzanie przez danych osobowych podanych w formularzu. Podanie danych jest dobrowolne. Administratorem podanych przez Pana/ Panią danych osobowych jest Ad Awards Sp. J z siedzibą w Legnicy, ul. Fabryczna 22. Pana/Pani dane będą przetwarzane w celach związanych z udzieleniem odpowiedzi, przedstawieniem oferty usług Ad Awards Sp. J oraz świadczeniem usług przez administratora danych. Przysługuje Panu/Pani prawo dostępu do treści swoich danych oraz ich poprawiania.</label>
              </div>
            </div>
            <div class="col-12 px-0 mb-5">
              <div class="float-right mt-4">
                <button class="button submit-form">WYŚLIJ WIADOMOŚĆ</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 pr-0 map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.672183750093!2d16.174381315758907!3d51.20669187958678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f0d628b86c7af%3A0xe609f38f2e447933!2sFabryczna%2022%2C%2059-220%20Legnica!5e0!3m2!1spl!2spl!4v1606662730557!5m2!1spl!2spl" width="100%" height="100%" frameborder="0" style="border:0; opacity: 0.4; filter: grayscale(1);" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  <div class="ad-awards">
    <div class="d-flex footer-links">
      <a class="ad-awards-link" href="#">Start</a>
      <a class="ad-awards-link" href="#realizacje">Realizacje</a>
      <a class="ad-awards-link" href="#zespol">Zespół</a>
      <a class="ad-awards-link" href="#uslugi">Usługi</a>
      <a class="ad-awards-link" href="#kontakt">Kontakt</a>
    </div>
    <div class="first-color position-relative" style="z-index: 1000;">
      Made by <a class="adw" href="https://agencjamedialna.pro/">Ad Awards</a>
    </div>
  </div>
  <img class="lazy footer-lemon" data-src="./img/cytryna.png" alt="">
</footer>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
<script src="dist/owl.carousel.min.js"></script>
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
    document.getElementById('nav-socials').classList.add('d-none');
    let collapse = document.getElementsByClassName('navbar-collapse')[0];
    if(link == 'link') {
      if(collapse.classList.contains('show')) collapse.classList.remove('show')
    }
  if(nav.style.overflow == 'scroll') nav.style.overflow = 'unset';
}
$(document).ready(function(){
  $('.owl-carousel1').owlCarousel({
    responsive: {
      0 : {items: 1},
      567: {items: 2},
      992: {items: 4}
    },
    dots: false
  });


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


  })

  $('.owl-carousel2').prepend('<div class="team-frame"></div>');
    // $('.owl-carousel2').prepend('<img class="prev" src="./img/prev.svg" />');
    // $('.owl-carousel2').prepend('<img class="next" src="./img/next.svg" />');

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
</body>
</html>