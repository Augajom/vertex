<!-- Contact Hero -->
<section class="hero-section-home position-relative" style="padding-top: 130px; padding-bottom: 60px;">
    <div class="hero-aura-blob-1"></div>
    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="text-center max-w-700 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-headset"></i> Get In Touch
            </span>
            <h1 class="display-4 fw-extrabold text-heading mb-3"><?= $this->lang->line('contact_title'); ?></h1>
            <p class="lead text-primary fw-bold fs-4 mb-2"><?= $this->lang->line('company_fullname'); ?></p>
            <p class="text-muted fs-6"><?= $this->lang->line('company_slogan'); ?></p>
        </div>
    </div>
</section>

<!-- Contact Details & Verification Card -->
<section class="py-5 position-relative" style="background: #FFFFFF;">
    <div class="container-xxl">
        <div class="row g-4 justify-content-center">
            
            <div class="col-lg-8">
                <div class="card-3d p-4 p-md-5">
                    <h4 class="fw-bold text-heading mb-4 border-start border-4 border-primary ps-3">
                        <?= $this->lang->line('company_fullname'); ?>
                    </h4>
                    
                    <div class="d-flex flex-column gap-4 mb-5">
                        <!-- Address -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="card-icon-wrapper mb-0">
                                <i class="fas fa-location-dot"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-heading mb-1"><?= $this->lang->line('footer_heading_contact'); ?> (ที่อยู่สำนักงาน)</h6>
                                <p class="text-body mb-0 fs-6" style="line-height: 1.75;"><?= $this->lang->line('company_address'); ?></p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="card-icon-wrapper mb-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-heading mb-1"><?= $this->lang->line('label_email'); ?></h6>
                                <p class="text-body mb-0 fs-6">
                                    <a href="mailto:<?= $this->lang->line('company_email'); ?>" class="fw-semibold text-primary">
                                        <?= $this->lang->line('company_email'); ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- License Status -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="card-icon-wrapper mb-0">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-heading mb-1"><?= $this->lang->line('license_info_title'); ?></h6>
                                <p class="text-body mb-0 fs-6"><?= $this->lang->line('footer_license_note'); ?></p>
                            </div>
                        </div>
                    </div>

                    <a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="btn-primary-3d w-100 py-3 text-center justify-content-center">
                        <i class="fas fa-arrow-up-right-from-square"></i> <?= $this->lang->line('btn_check_license'); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>