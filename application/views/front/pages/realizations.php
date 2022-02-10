<?php $sections=[];
  if($value->ecommerce==1){
    $sections[]='eCommerce';
  }
  if($value->social_box==1){
    $sections[]='Social Box';
  }
  if($value->lead_generation==1){
    $sections[]='Lead Generation';
  }
  if($value->social_campaign==1){
    $sections[]='Social Campaign';
  }
?>

<main>
<div class="container-fluid">


  <?php $i=0; foreach($sections as $section): ?>
    <?php 
      if($section == "eCommerce"){
        $description = $value->ecommerce_desc;
        $tiles = $tiles_eCommerce;
        $title_images = $value->ecommerce_images_title;
        $images = $bestsellers;
        $gallery = $eCommerce_gallery;
      }
      else if($section == "Social Box"){
        $description = $value->social_box_desc;
        $tiles = $tiles_SocialBox;
        $title_images = $value->social_box_images_title;
        $images = $campaign;
        $gallery = $SocialBox_gallery;
      }
      else if($section == "Lead Generation"){
        $description = $value->lead_generation_desc;
        $tiles = $tiles_LeadGeneration;
        $title_images = $value->lead_generation_images_title;
        $images = $LeadGeneration_images;
        $gallery = $LeadGeneration_gallery;
      }
      else if($section == "Social Campaign"){
        $description = $value->social_campaign_desc;
        $tiles = $tiles_SocialCampaign;
        $title_images = $value->social_campaign_images_title;
        $images = $SocialCampaign_images;
        $gallery = $SocialCampaign_gallery;
      }
    ?>


    <?php if($i%2==0): ?>
      <section class="service_section">
      <div class="row service_row">
        <div class="col-xl-7 service_left service_white" style="background-image: url(<?= file_url(). $value->photo3 ?>);">
          <div class="service_left_content">
            <div class="title aqua_font"><?= $section ?></div>
            <div class="description"><?= $description ?></div>
            <div class="value_tiles_row d-flex flex-wrap">
              <?php foreach($tiles as $tile): ?>
                <div class="value_tile d-flex">
                <div class="value_tile_number my-auto"><?= $tile->number ?></div>
                  <div class="value_tile_text my-auto"><?= $tile->title ?></div>
                </div>
              <?php endforeach; ?>
            </div>
            <?php if(!empty($images)): ?>
              <h6 class="h6-center"><?= $title_images ?></h6>
              <div class="photo_tiles d-flex justify-content-stretch flex-wrap">
                <?php foreach($images as $item): ?>
                  <div class="photo_tile_item">
                    <div class="photo_tile_photo d-flex align-items-center">
                      <img src="<?= file_url(). $item->photo ?>" alt="<?= $item->alt ?>" class="img-fluid">
                    </div>
                    <div class="description">
                      <?= $item->alt ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xl-5 px-sm-5">
          <div class="mockup_carousel">
              <?php foreach($gallery as $item): ?>
                <div><img src="<?= file_url(). $item->photo ?>" class="img-fluid mockup_carousel_photo" alt="<?= $item->alt ?>"></div>
              <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>
    <?php else: ?>
      <section class="service_section">
      <div class="row service_row">
        <div class="col-xl-7 service_left service_aqua" style="background-image: url(<?= file_url(). $value->photo3 ?>);">
          <div class="service_left_content">
            <div class="title text-white"><?= $section ?></div>
            <div class="description trans_white_font"><?= $description ?></div>
            <div class="value_tiles_row d-flex flex-wrap">
            <?php foreach($tiles as $tile): ?>
                <div class="value_tile d-flex">
                  <div class="value_tile_number my-auto"><?= $tile->number ?></div>
                  <div class="value_tile_text my-auto"><?= $tile->title ?></div>
                </div>
              <?php endforeach; ?>
            </div>
            <?php if(!empty($images)): ?>
              <h6 class="text-white h6-center"><?= $title_images ?></h6>
              <div class="photo_tiles d-flex justify-content-stretch flex-wrap">
                <?php foreach($images as $item): ?>
                  <div class="photo_tile_item">
                    <div class="photo_tile_photo d-flex align-items-center">
                      <img src="<?= file_url(). $item->photo ?>" alt="<?= $item->alt ?>" class="img-fluid">
                    </div>
                    <div class="text-white description">
                      <?= $item->alt ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
          <?php endif; ?>
          </div>
        </div>
        <div class="col-xl-5 px-sm-5 service_right_aqua">
          <div class="mockup_carousel">
              <?php foreach($gallery as $item): ?>
                <div><img src="<?= file_url(). $item->photo ?>" class="img-fluid mockup_carousel_photo" alt="<?= $item->alt ?>"></div>
              <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>
    <?php endif; ?>
  <?php $i++; ?>
  <?php endforeach; ?>
  </div>
</main>

