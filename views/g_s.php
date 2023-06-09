<div class="page-section" id="portfolio">
    <div class="container ">

        <h2 class="section-heading text-uppercase" style="color: #ad202c;">our beloved teacher and staff</h2>
        <div class="text-center">
            <img src="agency/assets/img/kelas1.jpg" style="text-align: center;" alt="">
        </div>

        <div class="row">

            <!-- Portfolio item 1-->
            <?php $i = 1; ?>
            <?php foreach ($gs as $gs) { ?>
                <div class="col-lg-2 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?= $i; ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="agency/assets/img/<?= $gs->tn; ?>" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?= $gs->Nama; ?> </div>
                            <div class="section-subheading text-muted"><?= $gs->jabatan; ?> </div>
                        </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="portfolioModal<?= $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-bs-dismiss="modal"><img src="agency/assets/img/close-icon.svg" alt="Close modal" /></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Project details-->
                                                <img class="img-fluid d-block mx-auto" src="agency/assets/img/<?= $gs->full; ?>" alt="..." />

                                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                    <i class="fas fa-times me-1"></i>
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php } ?>


        </div>
    </div>
</div>

<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->