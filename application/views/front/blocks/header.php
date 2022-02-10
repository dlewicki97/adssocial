<header>
	<video src="<?= file_url(). $banner->video ?>" autoplay loop muted>
	</video>
	<div class="header-mask"></div>

	<nav id="nav" class="navbar navbar-expand-lg navbar-dark py-5">
		<div class="d-flex justify-content-between w-100">
			<a class="navbar-brand" href="#"><img class="lazy logo" data-src="<?= file_url(). $settings->logo ?>" alt="logo"></a>

			<button class="navbar-toggler" id="nav-button" type="button" data-toggle="collapse" data-target="#basicExampleNav"
			aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon" ></span>
		</button>
		<button class="navbar-toggler" style="display: none;" id="nav-button-close" type="button" data-toggle="collapse" data-target="#basicExampleNav"
		aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		<img class="lazy img-fluid"   data-src="<?= assets() ?>img/close.svg" alt="zamknij">
	</button>

</div>

<div class="collapse navbar-collapse w-100 justify-content-between mt-0" id="basicExampleNav">

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

<section class="title">
	<div class="d-flex flex-column">
		<div class="mb-5">
			<h2 class="title-title"><?= $banner->title ?></h2>
			<p class="title-subtitle"><?= $banner->subtitle ?></p>
		</div>
		<div class="d-flex mb-5">
			<a href="<?= $banner->link1 ?>">
				<button class="button outline mr-2"><?= $banner->button_name1 ?></button>
			</a>
			<a href="<?= $banner->link2 ?>">
				<button class="button ml-2"><?= $banner->button_name2 ?></button>
			</a>
		</div>
		<div class="d-flex justify-content-center mt-3">
			<?php foreach($partners as $partner): ?>
			<img data-src="<?= file_url(). $partner->photo ?>" class="lazy banner-partners" alt="<?= $partner->alt ?>">
			<?php endforeach ?>
		</div>
	</div>
</section>
<img class="lazy header-lemon" data-src="<?= file_url(). $lemon->photo ?>" alt="<?= $lemon->alt ?>">
</header>