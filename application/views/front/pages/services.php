
<main>
<div class="container-fluid p-0">
    <section class="photo_carousel_section">
        <div class="section_header">
            <h2><?= $header_1->title ?></h2>
            <h3><?= $header_1->subtitle ?></h3>
        </div>
        <div class="aligner">
              <div class="owl-carousel owl-theme">
                <?php foreach($gallery as $photo): ?>
                  <div class="item">
                  <!-- <a href="<?= file_url().$photo->photo ?>" data-lightbox="gallery"> -->
                    <img src="<?= file_url().$photo->photo ?>" alt="<?= $photo->alt ?>">
                  <!-- </a> -->
                </div>
                  <?php endforeach; ?>
                
              </div>
            </div>
    </section>
<div class="container-fluid">
  <?php if(!empty($tiles)): ?>
    <section class="attributes_section">
        <div class="section_header">
            <h2><?= $header_2->title ?></h2>
            <h3><?= $header_2->subtitle ?></h3>
        </div>
        <div class="section_container">
            <div class="row">
            <?php $i=1; foreach($tiles as $tile): ?>
              <?php if($i==1): ?>
                <div class="col-lg-6 attributes_tile ">
                    <div class="tile_bg aqua_tile d-sm-flex">
                        <div class="attributes_icon my-auto text-center pb-4 pb-sm-0"><img src="<?= file_url().$tile->photo ?>" alt="<?= $tile->alt ?>"></div>
                        <div class="description pl-sm-4 my-auto"><?= $tile->description ?></div>
                    </div>
                </div>
              <?php elseif($i==2): ?>
                <div class="col-lg-6 attributes_tile ">
                    <div class="tile_bg yellow_tile d-sm-flex">
                        <div class="attributes_icon my-auto text-center pb-4 pb-sm-0 order-lg-2 pr-4 pr-lg-0"><img src="<?= file_url().$tile->photo ?>" alt="<?= $tile->alt ?>"></div>
                        <div class="description pr-lg-4 my-auto"><?= $tile->description ?></div>
                        
                    </div>

                </div>
              <?php elseif($i==3): ?>
                <div class="col-lg-6 attributes_tile">
                    <div class="tile_bg yellow_tile aqua_lg_tile d-sm-flex">
                        <div class="attributes_icon my-auto text-center pb-4 pb-sm-0 "><img src="<?= file_url().$tile->photo ?>" alt="<?= $tile->alt ?>"></div>
                        <div class="description pl-sm-4 my-auto"><?= $tile->description ?></div>
                    </div>
                </div>
              <?php elseif($i==4): ?>
                <div class="col-lg-6 attributes_tile">
                    <div class="tile_bg aqua_tile yellow_lg_tile d-sm-flex">
                        <div class="attributes_icon my-auto text-center pb-4 pb-sm-0 order-lg-2 pr-4 pr-lg-0"><img src="<?= file_url().$tile->photo ?>" alt="<?= $tile->alt ?>"></div>
                        <div class="description pr-lg-4 my-auto"><?= $tile->description ?></div>
                        
                    </div>
                </div>
              <?php endif; $i++; ?>
              <?php if($i==5){
                $i=1;
              }?>
              
            <?php endforeach; ?>
            </div>
        </div>
    </section>
  <?php endif; ?>
  <?php if(!empty($columns)): ?>
    <section class="">
        <div class="section_header">
            <h2><?= $header_3->title ?></h2>
            <h3><?= $header_3->subtitle ?></h3>
        </div>
        <div class="section_container small_device_container">
          <div class="row text-center social_media_row">
            <?php foreach($columns as $column): ?>
              <div class="col-lg-4 social_media_box">
                  <div class="social_media_icon"><img src="<?= file_url().$column->photo ?>" alt="<?= $column->photo ?>" class="img-fluid"></div>
                  <div class="social_media_title"><?= $column->title ?></div>
                  <div class="social_media_description"><?= $column->description ?></div>
              </div>
            <?php endforeach; ?>
              
          </div>
        </div>
        
    </section>
    <?php endif; ?>

    <!-- <section class="">
        <div class="section_header">
            <h2>Cennik</h2>
            <h3>Pakiety na okres 12 miesięcy</h3>
        </div>
        <div class="section_container small_device_container">
          <div class="price_list mx-auto">
              <div class="price_list_row">
                  <div class="price_list_cell price_list_head">Social Media</div>
                  <div class="price_list_cell price_list_head">PAKIET MINI</div>
                  <div class="price_list_cell price_list_head">PAKIET BASIC</div>
                  <div class="price_list_cell price_list_head">PAKIET BUSINESS</div>
                  <div class="price_list_cell price_list_head">PAKIET VIP</div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell yellow_cell">FACEBOOK</div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">1 Post w tygodniu</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">3 Posty w tygodniu</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">3 Posty w tygodniu</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">4 Posty w tygodniu</div></div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell yellow_cell">INSTAGRAM</div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">1 Post w tygodniu</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">3 Posty w tygodniu</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">3 Posty w tygodniu</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">4 Posty w tygodniu</div></div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell yellow_cell">RELACJE FB/IG</div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">1 RELACJA FB/IG</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">2 RELACJE FB/IG</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">3 RELACJA FB/IG</div></div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell yellow_cell">YOUTUBE</div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto"></div></div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell yellow_cell">WYŚWIETLEŃ SPOTU</div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">10 000</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">20 000</div></div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell yellow_cell">BUDŻET MEDIOWY</div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">100 ZŁ</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">250 ZŁ</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">500 ZŁ</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center"><div class="my-auto">900 ZŁ</div></div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell yellow_cell">CENA</div>
                  <div class="price_list_cell dark_cell">642 ZŁ</div>
                  <div class="price_list_cell dark_cell">884 ZŁ</div>
                  <div class="price_list_cell dark_cell">1408 ZŁ</div>
                  <div class="price_list_cell dark_cell">2380 ZŁ</div>
              </div>
          </div>
        </div>
    </section> -->
    <section class="">
        <div class="section_header">
            <h2><?= $header_4->title ?></h2>
            <h3><?= $header_4->subtitle ?></h3>
        </div>
        <!-- <div class="section_container small_device_container">
          <div class="price_list mx-auto">
              <div class="price_list_row">
                  <div class="price_list_cell price_list_head order-md-12">PAKIET VIP</div>
                  <div class="price_list_cell price_list_head order-md-11">PAKIET BUSINESS</div>
                  <div class="price_list_cell price_list_head order-md-10">PAKIET BASIC</div>
                  <div class="price_list_cell price_list_head order-md-9">PAKIET MINI</div>
                  <div class="price_list_cell price_list_head order-md-8">Social Media</div>
              </div>
              <div class="price_list_row">
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-12"><div class="my-auto">4 Posty w tygodniu</div></div>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-11"><div class="my-auto">3 Posty w tygodniu</div></div>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-10"><div class="my-auto">3 Posty w tygodniu</div></div>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-9"><div class="my-auto">1 Post w tygodniu</div></div>
                    <div class="price_list_cell yellow_cell order-md-8">FACEBOOK</div>

              </div>
              <div class="price_list_row">
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-12"><div class="my-auto">4 Posty w tygodniu</div></div>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-11"><div class="my-auto">3 Posty w tygodniu</div></div>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-10"><div class="my-auto">3 Posty w tygodniu</div></div>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-9"><div class="my-auto">1 Post w tygodniu</div></div>
                    <div class="price_list_cell yellow_cell order-md-8">INSTAGRAM</div>
              </div>
              <div class="price_list_row">
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-12"><div class="my-auto">3 RELACJA FB/IG</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-11"><div class="my-auto">2 RELACJE FB/IG</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-10"><div class="my-auto">1 RELACJE FB/IG</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-9"><div class="my-auto"></div></div>
                  <div class="price_list_cell yellow_cell order-md-8">RELACJE FB/IG</div>


              </div>
              <div class="price_list_row">
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-12"><div class="my-auto rotate_check">&#10003</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-11"><div class="my-auto rotate_check">&#10003</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-10"><div class="my-auto rotate_check"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-9"><div class="my-auto rotate_check"></div></div>
                  <div class="price_list_cell yellow_cell order-md-8">YOUTUBE</div>

              </div>
              <div class="price_list_row">
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-12"><div class="my-auto">20 000</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-11"><div class="my-auto">10 000</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-10"><div class="my-auto"></div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-9"><div class="my-auto"></div></div>
                  <div class="price_list_cell yellow_cell order-md-8">WYŚWIETLEŃ SPOTU</div>

              </div>
              <div class="price_list_row">
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-12"><div class="my-auto">900 ZŁ</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-11"><div class="my-auto">500 ZŁ</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-10"><div class="my-auto">250 ZŁ</div></div>
                  <div class="price_list_cell gray_cell d-flex justify-content-center order-md-9"><div class="my-auto">100 ZŁ</div></div>
                  <div class="price_list_cell yellow_cell order-md-8">BUDŻET MEDIOWY</div>

              </div>
              <div class="price_list_row">
                    <div class="price_list_cell dark_cell order-md-12">2380 ZŁ</div>
                    <div class="price_list_cell dark_cell order-md-11">1408 ZŁ</div>
                    <div class="price_list_cell dark_cell order-md-10">884 ZŁ</div>
                    <div class="price_list_cell dark_cell order-md-9">642 ZŁ</div>
                  <div class="price_list_cell yellow_cell order-md-8">CENA</div>

              </div>
          </div>
        </div> -->
        <div class="section_container small_device_container">
          <div class="price_list mx-auto">
            <?php $i=0;foreach($price_list as $row): ?>
                <?php if($i==0): ?>
                    <div class="price_list_row">
                      <?php if ($row->column_5 != ''): ?>
                      <div class="price_list_cell price_list_head order-md-12"><?= $row->column_5 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_4 != ''): ?>
                      <div class="price_list_cell price_list_head order-md-11"><?= $row->column_4 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_3 != ''): ?>
                      <div class="price_list_cell price_list_head order-md-10"><?= $row->column_3 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_2 != ''): ?>
                      <div class="price_list_cell price_list_head order-md-9"><?= $row->column_2 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_1 != ''): ?>
                      <div class="price_list_cell price_list_head order-md-8"><?= $row->column_1 ?></div>
                      <?php endif; ?>
                    </div>
                <?php elseif($row==end($price_list)): ?>
                  <div class="price_list_row">
                    <?php if ($row->column_5 != ''): ?>
                    <div class="price_list_cell dark_cell order-md-12"><?= $row->column_5 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_4 != ''): ?>
                    <div class="price_list_cell dark_cell order-md-11"><?= $row->column_4 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_3 != ''): ?>
                    <div class="price_list_cell dark_cell order-md-10"><?= $row->column_3 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_2 != ''): ?>
                    <div class="price_list_cell dark_cell order-md-9"><?= $row->column_2 ?></div>
                      <?php endif; ?>
                      <?php if ($row->column_1 != ''): ?>
                    <div class="price_list_cell yellow_cell order-md-8"><?= $row->column_1 ?></div>
                      <?php endif; ?>
                </div>
                <?php else: ?>
                  <div class="price_list_row">
                    <?php if ($row->column_5 != ''): ?>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-12"><div class="my-auto"><?= $row->column_5 ?></div></div>
                    <?php endif; ?>
                    <?php if ($row->column_4 != ''): ?>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-11"><div class="my-auto"><?= $row->column_4 ?></div></div>
                    <?php endif; ?>
                    <?php if ($row->column_3 != ''): ?>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-10"><div class="my-auto"><?= $row->column_3 ?></div></div>
                    <?php endif; ?>
                    <?php if ($row->column_2 != ''): ?>
                    <div class="price_list_cell gray_cell d-flex justify-content-center order-md-9"><div class="my-auto"><?= $row->column_2 ?></div></div>
                    <?php endif; ?>
                    <?php if ($row->column_1 != ''): ?>
                    <div class="price_list_cell yellow_cell order-md-8"><?= $row->column_1 ?></div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              <?php $i++; ?>
            <?php endforeach; ?>
          </div>
        </div>
    </section>
    <section class="contact_section">
    <div class="d-flex flex-wrap w-100 contact-form">
    <div class="col-12 col-lg-6 mt-5">
      <div class="d-flex flex-column">
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


    </section>
    </div>
  <img class="lemon service_lemon1 small blur lazy" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
  <img class="lemon service_lemon2 small blur lazy" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
  <img class="lemon service_lemon3 big lazy" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
  <img class="lemon service_lemon4 small blur lazy" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
</main>