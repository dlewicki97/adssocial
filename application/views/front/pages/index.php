<main>
    <section id="realizacje" class="realizations">
        <div class="d-flex w-100 flex-column align-items-center">
            <h2 class="section-title"><?= $realizations_descriptions->title ?></h2>
            <p class="section-subtitle"><?= $realizations_descriptions->subtitle ?></p>
        </div>
        <div class="d-flex w-100 filter-box justify-content-center mt-2">
            <p class="filter-title"><?= $realizations_descriptions->filter ?> </p>
            <?php foreach ($filters as $i => $filter) : ?>
            <button
                class="button outline filter <?php if ($i != count($realizations_filters) - 1) echo 'mr-2' ?>"><?= $filter->title ?></button>
            <?php endforeach ?>
        </div>
        <div class="owl-carousel1 owl-carousel owl-theme">

            <?php foreach ($realizations as $realization) : ?>
            <div class="lazy bg-picture realization <?= getFilters($realization, $realizations_filters) ?>"
                data-bg="<?= file_url() . $realization->photo ?>">
                <a href="<?= create_link('realizacje', $realization->name, $realization->id) ?>">
                    <div class="mask">
                        <div>
                            <?php if ($realization->photo2) : ?>
                            <img class="realizations-logo lazy" data-src="<?= file_url() . $realization->photo2 ?>"
                                alt="<?= $realization->alt ?>">
                            <?php endif; ?>
                            <p class="realizations-title"><?= $realization->title ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach ?>

            <div class="lazy bg-picture realization" style="opacity: 0" data-bg="<?= assets() ?>img/realizations-5.png">
                <div class="mask">
                    <div>
                        <p class="realizations-title"></p>
                    </div>
                </div>
            </div>

        </div>
        <!-- <a target="_blank" href="<?= $realizations_descriptions->link ?>">
			<button class="button outline primary-button more"><?= $realizations_descriptions->button_name ?></button>
		</a> -->

        <img class="realizations-lemon lazy" data-src="<?= file_url() . $lemon->photo ?>" alt="<?= $lemon->alt ?>">
        <img data-src="<?= file_url() . $lemon->photo ?>" alt="<?= $lemon->alt ?>" class="realizations-lemon-blur lazy">

    </section>

    <section class="realizations pt-0">
        <a href="<?= base() . 'franczyza' ?>">
            <img data-src="<?= base_url('assets/front/img/adsocial_baner_franchising4.png'); ?>" class="img-fluid lazy"
                style="z-index: 999">
        </a>
    </section>

    <section id="zespol" class="team">
        <div class="d-flex w-100 flex-column align-items-center">
            <h2 class="section-title">Zespół</h2>
            <p class="section-subtitle">Poznaj lepiej ekipę Ad Social!</p>
        </div>
        <div class="owl-carousel2 owl-carousel owl-theme">
            <?php foreach ($team as $member) : ?>
            <div class="team-content">
                <img src="<?= file_url() . $member->photo ?>.webp" class="img-fluid team-img" alt="<?= $member->alt ?>">
                <h2 class="team-name"><?= $member->title ?></h2>
                <div class="team-title">
                    <div class="team-navigation">
                        <img class="prev" src="<?= assets() ?>img/prev.svg" />
                        <img class="next" src="<?= assets() ?>img/next.svg" />
                    </div>
                    <?= $member->subtitle ?>
                </div>
                <div class="team-desc"><?= $member->description ?></div>
            </div>
            <?php endforeach ?>

        </div>
        <div class="team-descriptions">
            <div class="team-descriptions-content"></div>
        </div>
        <div class="text-center">
            <a href="<?= base_url() . 'zespol' ?>">
                <button class="button outline primary-button more">ZOBACZ WIĘCEJ</button>
            </a>
        </div>
    </section>

    <section id="uslugi" class="services lazy bg-picture" data-bg="<?= file_url() . $services_descriptions->photo ?>">
        <div class="mask"></div>
        <div class="position-relative">
            <div class="d-flex w-100 flex-column align-items-center services-descriptions">
                <h2 class="section-title"><?= $services_descriptions->title ?></h2>
                <p class="section-subtitle"><?= $services_descriptions->subtitle ?></p>
            </div>
        </div>

        <div class="d-flex flex-wrap w-100 services-wrapper">

            <?php foreach ($services as $service) : ?>
            <div class="col-12 col-lg-6">
                <div class="service-bg"></div>
                <div class="services-content">
                    <div>
                        <h1 class="services-title"><?= $service->title ?></h1>
                        <?= $service->description ?>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="<?= create_link('uslugi', $service->name, $service->id) ?>">
                                <button class="button"><?= $service->button_name ?></button>
                            </a>
                        </div>
                        <img class="lazy services-icon" data-src="<?= file_url() . $service->photo ?>"
                            alt="<?= $service->alt ?>">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </section>
    <img class="circle-blue big circle lazy" data-src="<?= file_url() . $circle_blue->photo ?>"
        alt="<?= $circle_blue->alt ?>">
    <img class="circle-blue small circle lazy" data-src="<?= file_url() . $circle_blue->photo ?>"
        alt="<?= $circle_blue->alt ?>">
    <img class="circle-grey small circle lazy" data-src="<?= file_url() . $circle_grey->photo ?>"
        alt="<?= $circle_grey->alt ?>">
    <img class="circle-grey big circle lazy" data-src="<?= file_url() . $circle_grey->photo ?>"
        alt="<?= $circle_grey->alt ?>">
    <img class="lemon team lazy" data-src="<?= file_url() . $lemon->photo ?>" alt="<?= $lemon->alt ?>">
    <img class="circle-grey small under circle lazy" data-src="<?= file_url() . $circle_grey->photo ?>"
        alt="<?= $circle_grey->alt ?>">
    <img class="circle-blue small under circle lazy" data-src="<?= file_url() . $circle_blue->photo ?>"
        alt="<?= $circle_blue->alt ?>">
    <img class="lemon services-lemon blur big lazy" data-src="<?= file_url() . $lemon->photo ?>"
        alt="<?= $lemon->alt ?>">
    <img class="lemon services-lemon big lazy" data-src="<?= file_url() . $lemon->photo ?>" alt="<?= $lemon->alt ?>">
    <!-- <img class="lemon services-lemon small blur lazy" data-src="<?= file_url() . $lemon->photo ?>"
        alt="<?= $lemon->alt ?>">
    <img class="lemon services-lemon small lazy" data-src="<?= file_url() . $lemon->photo ?>" alt="<?= $lemon->alt ?>"> -->
</main>