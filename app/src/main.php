<header>
    <div class="header_topBar">
        <div class="container">
            <div class="row no-gutters justify-content-center justify-content-lg-between align-items-end align-items-md-center">
                <div class="col-7 col-md-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto px-xl-4 px-xxl-5 py-4 py-xl-0 d-lg-none d-xl-block">
                    <?= renderImg("accreditation.png", "logo", "px-md-3") ?>
                </div>
                <div class="col-lg-3">
                    <div class="row gx-3 header_topBarButtons">
                        <div class="col-6">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-dark">
                                Call <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#form" class="btn btn-primary">
                                Book Online
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-none d-lg-block d-xl-none pt-5">
                <?= renderImg("accreditation.png", "logo") ?>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container h-100 position-relative">
            <div class="row h-100 align-items-center banner_main">
                <div class="col-12 col-xl-7 px-3">
                    <div class="banner_heroHeading">
                        Bathroom &amp; Kitchen Remodelling
                    </div>
                    <div class="banner_subHeading">
                        Book A No Obligation Inspection Today
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-2 col-md-auto pr-2 pr-md-3">
                            <?= renderImg("banner-dollar.png", "icons") ?>
                        </div>
                        <div class="col">
                            <div class="banner_subHeadingPricing">Pricing by the job, not by the hour</div>
                            <div class="font-roboto pt-2 text-dark-grey banner_subHeadingTagSm">No matter how long the job ends up taking us, you still pay the same price</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right d-md-none">
            <?= renderImg("banner_sm.png", "background") ?>
        </div>
        <div class="text-right d-none d-md-block d-xl-none">
            <?= renderImg("banner.png", "background") ?>
        </div>
    </div>
</header>

<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-lg-between align-items-center">
			<div class="col-auto">
				<div class="row gx-2 gx-md-3 text-white justify-content-center">
					<div class="col-12 text-center pb-3 d-lg-none">
						<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims.png", "logo") ?>
						</a>
					</div>
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center">All Rights Reserved
					</div>
				</div>
			</div>
			<div class="col-auto d-none d-lg-block">
				<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
					<?= renderImg("aiims.png", "logo") ?>
				</a>
			</div>
		</div>
	</div>
</footer>