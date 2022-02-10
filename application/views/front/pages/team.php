
<main>
  <div class="container-fluid">
    <section class="team_container">
      <div class="row">
        <?php foreach($people as $person): ?>
          <div class="person_tile col-md-6">
            <div class="row">
              <div class="col-5">
                <img class="img-fluid" src="<?= file_url().$person->photo ?>" alt="<?= $person->alt ?>">
              </div>
              <div class="person_tile_right col-7">
                <h2><?= $person->title ?></h2>
                <h6><?= $person->subtitle ?></h6>
                <div class="description"><?= $person->description ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </div>
  <img class="lemon team_lemon1 small blur lazy" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
  <img class="lemon team_lemon2 big lazy" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
  <img class="lemon team_lemon3 small blur lazy" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
</main>