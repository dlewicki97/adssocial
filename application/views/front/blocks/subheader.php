<body>
  <header>
    <?php if($this->session->flashdata('flashdata')) echo $this->session->flashdata('flashdata'); ?>
    <div class="container-fluid p-0">
      <section class="subpage_banner" style="<?php if($this->uri->segment(1) == 'franczyza') echo 'height: unset;border-bottom-right-radius: 45px;' ?>background-image: url('<?= $this->uri->segment(1) == 'franczyza' ? file_url(). $franchise_blue_form->photo2 : assets(). 'img/cheerful-people.jpg' ?>');">
        <div class="subpage_banner_content">
          <!-- <div class="subpage_banner_logo"><img class="img-fluid" src="img/mono_white.png" alt=""></div> -->
          <div class="header-mask"></div>
          <nav id="nav" class="navbar  navbar-dark light-color px-sm-5 shadow-none">
            <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= assets() ?>img/mono_white.png" alt=" " class="img-fluid"></a>
            <button class="navbar-toggler" id="nav-button" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>
          <button class="navbar-toggler" style="display: none;" id="nav-button-close" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <img class="lazy img-fluid"   data-src="<?= assets() ?>img/close.svg" alt="zamknij">
        </button>
        <div class="collapse navbar-collapse w-100" id="basicExampleNav">
          <ul class="navbar-nav mr-auto">
            <?php foreach($subpages as $subpage): ?>
              <?php if($subpage->visible): ?>
                <li class="nav-item">
                  <a class="nav-link" onclick="closeNav('link')" href="<?= base_url().$subpage->page ?>"><?= $subpage->title ?></a>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>

          </ul>
        </div>
        <div id="nav-socials" class="mr-auto d-none">
          <?php foreach($menu_icons as $icon): ?>
            <a target="_blank" href="<?= $icon->link ?>"><img class="lazy nav-social-icon" data-src="<?= file_url(). $icon->photo ?>" alt="<?= $icon->alt ?>"></a>
          <?php endforeach; ?>
        </div>
      </nav>
      <div class="subpage_banner_text">
        <div class="subpage_banner_title"><?= $title ?></div>
        <div class="subpage_banner_subtitle"><?= $subtitle ?></div>
      </div>
    </div>
    <?php if($this->uri->segment(1) == 'franczyza'): ?>
      <div class="d-flex flex-wrap franchise-row justify-content-between px-3 px-lg-4" style="z-index: 1">
        <div class="col-12 col-lg-6 position-relative text-center text-lg-right">
          <div class="franchise-text-block">
            <div class="first"><?= $franchise_headers->title1 ?></div>
            <div class="second"><?= $franchise_headers->title2 ?></div>
            <div class="third"><?= $franchise_headers->title3 ?></div>
          </div>
          <img class="lazy header-daniel" data-src="<?= file_url(). $franchise_blue_form->photo ?>" alt="<?= $franchise_blue_form->alt ?>">
        </div>
        <div class="col-12 col-lg-5 pl-0">
          <form id="contact-form1" action="<?= base(). 'franchise_mailer/send' ?>" method="post">
            <div class="contact-form-container">
              <div class="d-flex w-100 flex-wrap">
                <div class="col-6 pl-0 ">
                  <div class="md-form">
                    <input type="text" required id="name1" name="name" class="form-control">
                    <label for="name1"><?= $contact_descriptions->full_name ?></label>
                  </div>
                </div>
                <div class="col-6 px-0">
                  <div class="md-form">
                    <input type="text" required id="city1" name="city" class="form-control">
                    <label for="city1"><?= $contact_descriptions->city ?></label>
                  </div>
                </div>
                <div class="col-lg-6 col-12 pl-0 contact-phone">
                  <div class="md-form">
                    <input type="text" required id="phone1" name="phone" class="form-control">
                    <label for="phone1"><?= $contact_descriptions->phone ?></label>
                  </div>
                </div>
                <div class="col-lg-6 col-12 px-0">
                  <div class="md-form">
                    <div class="md-form">
                      <input type="email" required id="email1" name="email" class="form-control">
                      <label for="email1"><?= $contact_descriptions->email ?></label>
                    </div>

                  </div>
                </div>
                <div class="col-12 px-0">
                  <div class="md-form">
                    <select class="form-control" name="subject" id="subject1">
                      <?php foreach($franchise_subjects as $sub): ?>
                        <option value="<?= $sub->title ?>"><?= $sub->title ?></option>
                      <?php endforeach; ?>
                    </select>
                    <label for="subject1"><?= $contact_descriptions->subject ?></label>
                  </div>
                </div>
                <div class="col-12 px-0">
                  <div class="md-form">
                    <textarea id="message1" required name="message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="message1"><?= $contact_descriptions->message ?></label>
                  </div>
                </div>
                <div class="col-12 px-0">
                  <div class="form-check p-0 position-relative">
                    <div class="checkbox-border"></div>
                    <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1a" required>
                    <label class="form-check-label" for="rodo1a"><?= $settings->rodo ?></label>
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
    <?php endif; ?>

    
  </section>
</div>
</header>