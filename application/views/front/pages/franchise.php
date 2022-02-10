<section class="franchise">
    <section class="models">
        <div class="d-flex w-100 flex-column align-items-center">
            <h2 class="section-title"><?= $franchise_model->title ?></h2>
            <div class="section-subtitle text-center"><?= $franchise_model->subtitle ?></div>
        </div>

        <div class="d-flex flex-wrap models-icons-row">
            <div class="col-12 col-lg-6 px-0 d-flex flex-column align-items-center text-center">
                <div class="model-icon-container">
                    <img data-src="<?= file_url() . $franchise_model->photo ?>" alt="<?= $franchise_model->alt ?>"
                        class="lazy">
                    <div><?= $franchise_model->franchisee ?></div>
                </div>
                <img class="lazy yellow-brace brace" data-src="<?= file_url() . $franchise_model->photo3 ?>"
                    alt="<?= $franchise_model->alt3 ?>">

                <div class="models-line mobile d-flex d-lg-none">
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_1) ?></div>
                    <div class="yellow w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo5 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt5 ?>" class="lazy circle">
                    </div>
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_2) ?></div>
                    <div class="yellow w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo5 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt5 ?>" class="lazy circle">
                    </div>
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_3) ?></div>
                    <div class="yellow w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo5 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt5 ?>" class="lazy circle">
                    </div>
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_4) ?></div>
                    <div class="yellow w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo5 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt5 ?>" class="lazy circle">
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-6 px-0 d-flex flex-column align-items-center text-center">
                <div class="model-icon-container">
                    <img data-src="<?= file_url() . $franchise_model->photo2 ?>" alt="<?= $franchise_model->alt2 ?>"
                        class="lazy">
                    <div><?= $franchise_model->website ?></div>
                </div>
                <img class="lazy blue-brace brace" data-src="<?= file_url() . $franchise_model->photo4 ?>"
                    alt="<?= $franchise_model->alt4 ?>">
                <div class="models-line mobile d-flex d-lg-none">
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_4) ?></div>
                    <div class="blue w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 0;"
                            alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                    </div>
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_5) ?></div>
                    <div class="blue w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                    </div>
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_6) ?></div>
                    <div class="blue w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                    </div>
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_7) ?></div>
                    <div class="blue w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                    </div>
                    <div class="text-left models-line-text"><?= strip_tags($franchise_model->attr_8) ?></div>
                    <div class="blue w-100">
                        <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 0"
                            alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                    </div>
                </div>
            </div>
        </div>

        <div class="models-line d-none d-lg-flex">
            <div class="yellow">
                <img data-src="<?= file_url() . $franchise_model->photo5 ?>" style="left: 0" alt="żołta kropka"
                    class="lazy circle">
                <img data-src="<?= file_url() . $franchise_model->photo5 ?>" style="left: 33.3%" alt="żołta kropka"
                    class="lazy circle">
                <img data-src="<?= file_url() . $franchise_model->photo5 ?>" style="left: 66.6%" alt="żołta kropka"
                    class="lazy circle">
                <img data-src="<?= file_url() . $franchise_model->photo7 ?>" style="left: 100%"
                    alt="<?= $franchise_model->alt7 ?>" class="lazy circle">
            </div>
            <div class="blue">
                <img data-src="<?= file_url() . $franchise_model->photo7 ?>" style="left: 0"
                    alt="<?= $franchise_model->alt7 ?>" class="lazy circle">
                <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 25%"
                    alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 50%"
                    alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 75%"
                    alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
                <img data-src="<?= file_url() . $franchise_model->photo6 ?>" style="left: 100%"
                    alt="<?= $franchise_model->alt6 ?>" class="lazy circle">
            </div>
            <div class="content">
                <div style="width: 16.5%; transform: translateX(-10px);"><?= $franchise_model->attr_1 ?></div>
                <div style="width: 16.5%; transform: translateX(-10px);"><?= $franchise_model->attr_2 ?></div>
                <div style="width: 11%; transform: translateX(-10px);"><?= $franchise_model->attr_3 ?></div>
                <div class="text-center" style="width: 12.5%"><?= $franchise_model->attr_4 ?></div>
                <div class="text-right" style="width: 6.25%; transform: translateX(10px);">
                    <?= $franchise_model->attr_5 ?></div>
                <div class="text-right" style="width: 12.5%; transform: translateX(10px);">
                    <?= $franchise_model->attr_6 ?></div>
                <div class="text-right" style="width: 12.5%; transform: translateX(10px);">
                    <?= $franchise_model->attr_7 ?></div>
                <div class="text-right" style="width: 12.5%; transform: translateX(10px);">
                    <?= $franchise_model->attr_8 ?></div>
            </div>
        </div>
    </section>

    <section class="benefits pt-0">
        <div class="d-flex w-100 flex-column align-items-center">
            <h2 class="section-title"><?= $franchise_benefits_desc->title ?></h2>
        </div>

        <div class="d-flex justify-content-center flex-wrap benefits-row mt-4">

            <?php foreach ($franchise_benefits as $i => $benefit) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center d-flex flex-column align-items-center">
                <div class="benefit-icon-container">
                    <img data-src="<?= file_url() . $benefit->photo ?>" alt="<?= $benefit->alt ?>" class="lazy">
                </div>
                <div class="benefit-title"><?= $benefit->title ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="dynamics p-0">
        <div class="bg-picture dynamics-bg lazy" title="<?= $franchise_blue_section_bg->alt ?>"
            data-bg="<?= file_url() . $franchise_blue_section_bg->photo ?>">
            <div class="mask"></div>
            <div class="position-relative text-center dynamics-content h-100">
                <div class="d-flex w-100 flex-column align-items-center">
                    <h2 class="section-title"><?= $franchise_business->title ?></h2>
                    <div class="section-subtitle text-center"><?= $franchise_business->subtitle ?></div>

                </div>
                <img class="lazy dynamics-photo" data-src="<?= file_url() . $franchise_business->photo ?>"
                    alt="<?= $franchise_business->alt ?>">

                <div class="d-flex w-100 flex-column align-items-center">
                    <h2 class="section-title"><?= $franchise_support_desc->title ?></h2>
                    <div class="section-subtitle text-center"><?= $franchise_support_desc->subtitle ?></div>

                </div>

                <div class="d-flex flex-wrap mt-5">

                    <?php $row = 0;
					foreach ($franchise_support as $i => $support) : $i++ ?>
                    <div class="support-column" style="<?php if ($row == 0) echo 'width: 20%';
															elseif ($row == 1) echo 'width: 35%;';
															else echo 'width: 45%; padding-left: 3rem;' ?>">
                        <div class="d-flex support-content">
                            <img data-src="<?= file_url() . $support->photo ?>" alt="<?= $support->alt ?>"
                                class="lazy support-icon">
                            <div class="d-flex align-items-center support-title text-left"><?= $support->title ?></div>
                        </div>
                    </div>
                    <?php if ($row == 2) $row = 0;
						else $row++;
					endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cooperation">
        <div class="d-flex w-100 flex-column align-items-center">
            <h2 class="section-title"><?= $franchise_cooperation_desc->title ?></h2>
            <div class="section-subtitle text-center"><?= $franchise_cooperation_desc->subtitle ?></div>

        </div>

        <div class="d-flex flex-wrap mt-5">
            <?php $row = 0;
			foreach ($franchise_cooperation as $i => $coop) : $i++; ?>
            <div class="support-column" style="<?php if ($row == 0) echo 'width: 20%';
													elseif ($row == 1) echo 'width: 35%;';
													else echo 'width: 45%; padding-left: 3rem;' ?>">
                <div class="d-flex support-content">
                    <img data-src="<?= file_url() . $coop->photo ?>" alt="<?= $coop->alt ?>" class="lazy support-icon">
                    <div class="d-flex align-items-center support-title text-left"><?= $coop->title ?></div>
                </div>
            </div>
            <?php if ($row == 2) $row = 0;
				else $row++;
			endforeach; ?>
        </div>
    </section>

    <section class="simulation">
        <div class="simulation-outer-border">
            <div class="simulation-photo-container">
                <div class="d-flex w-100 flex-column align-items-center section-content">
                    <h2 class="section-title"><?= $franchise_simulation->title ?></h2>
                    <div class="section-subtitle text-center"><?= $franchise_simulation->subtitle ?></div>
                </div>
                <img data-src="<?= file_url() . $franchise_simulation->photo ?>" alt="<?= $franchise_simulation->alt ?>"
                    class="lazy">
            </div>
        </div>
    </section>

    <section class="partners text-white">
        <div class="bg-picture lazy" style="border-radius: 49px" title="<?= $franchise_partners_desc->alt ?>"
            data-bg="<?= file_url() . $franchise_partners_desc->photo  ?>">
            <h2 class="section-title text-white"><?= $franchise_partners_desc->title ?></h2>
            <div class="section-subtitle text-white text-center mb-5"><?= $franchise_partners_desc->subtitle ?></div>


            <div class="d-flex flex-wrap justify-content-center">
                <?php foreach ($franchise_partners as $partner) : ?>
                <div class="col-12 col-lg-4 text-center position-relative mb-5 mb-lg-0">
                    <div class="quote"><?= strip_tags($franchise_partners_desc->quote) ?></div>
                    <img class="lazy" data-src="<?= file_url() . $partner->photo ?>" alt="<?= $partner->alt ?>">
                    <h3 class="name"><?= $partner->name ?></h3>
                    <div class="description">
                        <?= $partner->description ?>
                    </div>

                    <div class="phone"><?= $franchise_partners_desc->phone ?><a class="link"
                            href="tel:<?= $partner->phone ?>"><?= $partner->phone ?></a>
                    </div>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="questions">
        <div class="d-flex w-100 flex-column align-items-center">
            <h2 class="section-title"><?= $franchise_questions->title ?></h2>
            <div class="section-subtitle text-center"><?= $franchise_questions->subtitle ?></div>
        </div>

        <div class="d-flex flex-wrap questions-row">
            <?php foreach ($franchise_representatives as $rep) : ?>
            <div class="col-12 col-lg-4 text-center">
                <img class="lazy" data-src="<?= file_url() . $rep->photo ?>" alt="<?= $rep->alt ?>">

                <h4 class="questions-title"><?= $rep->title ?></h4>
                <p class="questions-subtitle"><?= $rep->subtitle ?></p>
                <div class="questions-link-container"><?= $franchise_questions->phone ?><a class="questions-link"
                        href="tel:<?= $rep->phone ?>"><?= $rep->phone ?></a></div>
                <div class="questions-link-container"><?= $franchise_questions->email ?> <a class="questions-link"
                        href="mailto:<?= $rep->email ?>"><?= $rep->email ?></a></div>

            </div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="franchise-contact-form pb-0">
        <div class="d-flex flex-wrap franchise-row justify-content-between px-3 px-lg-4 bg-picture lazy"
            title="<?= $franchise_yellow_form->alt2 ?>" data-bg="<?= file_url() . $franchise_yellow_form->photo2 ?>"
            style="z-index: 1">
            <div class="col-12 col-lg-6 position-relative text-center text-lg-right">
                <div class="franchise-text-block mt-5 text-center ml-lg-auto mx-auto mx-lg-0"
                    style="line-height: 52px; width: fit-content">
                    <div class="first"><?= $franchise_headers->title4 ?></div>
                </div>
                <img class="lazy header-daniel" data-src="<?= file_url() . $franchise_yellow_form->photo ?>"
                    alt="<?= $franchise_yellow_form->alt ?>">
            </div>
            <div class="col-12 col-lg-5 pl-0">
                <form id="contact-form2" action="<?= base() . 'franchise_mailer/send' ?>" method="post">
                    <div class="contact-form-container">
                        <div class="d-flex w-100 flex-wrap">
                            <div class="col-6 pl-0 ">
                                <div class="md-form">
                                    <input type="text" required id="name2" name="name" class="form-control">
                                    <label for="name2"><?= $contact_descriptions->full_name ?></label>
                                </div>
                            </div>
                            <div class="col-6 px-0">
                                <div class="md-form">
                                    <input type="text" required id="city2" name="city" class="form-control">
                                    <label for="city2"><?= $contact_descriptions->city ?></label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 pl-0 contact-phone">
                                <div class="md-form">
                                    <input type="text" required id="phone2" name="phone" class="form-control">
                                    <label for="phone2"><?= $contact_descriptions->phone ?></label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 px-0">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="email" required id="email2" name="email" class="form-control">
                                        <label for="email2"><?= $contact_descriptions->email ?></label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <div class="md-form">
                                    <select class="form-control" name="subject" id="subject2">
                                        <?php foreach ($franchise_subjects as $sub) : ?>
                                        <option value="<?= $sub->title ?>"><?= $sub->title ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="subject2"><?= $contact_descriptions->subject ?></label>
                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <div class="md-form">
                                    <textarea id="message2" required name="message" class="md-textarea form-control"
                                        rows="3"></textarea>
                                    <label for="message2"><?= $contact_descriptions->message ?></label>
                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <div class="form-check p-0 position-relative">
                                    <div class="checkbox-border"></div>
                                    <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1b" required>
                                    <label class="form-check-label" for="rodo1b"><?= $settings->rodo ?></label>
                                </div>
                            </div>
                            <div class="col-12 px-0 mb-5">
                                <div class="float-right mt-4">
                                    <button type="submit"
                                        class="button submit-form"><?= $contact_descriptions->button_name ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>