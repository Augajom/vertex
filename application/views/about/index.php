<!-- About Hero -->
<section class="hero-section-home position-relative" style="padding-top: 130px; padding-bottom: 60px;">
    <div class="hero-aura-blob-1"></div>
    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="text-center max-w-700 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-building-columns"></i> PICO Finance Regulated
            </span>
            <h1 class="display-4 fw-extrabold text-heading mb-3"><?= $this->lang->line('about_title'); ?></h1>
            <p class="lead text-primary fw-bold fs-4 mb-2"><?= $this->lang->line('company_intro_title'); ?></p>
            <p class="text-muted fs-6"><?= $this->lang->line('company_intro_tagline'); ?></p>
        </div>
    </div>
</section>

<!-- Company Details & Belief Section -->
<section class="py-5 position-relative" style="background: #FFFFFF;">
    <div class="container-xxl">
        <div class="row g-4 align-items-stretch">
            
            <!-- Column 1: Company Profile Image + Detail Paragraphs -->
            <div class="col-lg-6">
                <div class="card-3d p-4 h-100 d-flex flex-column">
                    <div class="mb-4 overflow-hidden rounded-4">
                        <img src="<?= base_url('assets/images/pic01.png'); ?>" alt="<?= $this->lang->line('company_fullname'); ?>" class="img-fluid w-100" style="height: 280px; object-fit: cover;">
                    </div>
                    <h4 class="fw-bold text-heading mb-3 border-start border-4 border-primary ps-3">
                        <?= $this->lang->line('company_fullname'); ?>
                    </h4>
                    <p class="text-body fs-6 mb-3" style="line-height: 1.85;">
                        <?= $this->lang->line('company_intro_p1'); ?>
                    </p>
                    <p class="text-body fs-6 mb-4" style="line-height: 1.85;">
                        <?= $this->lang->line('company_intro_p2'); ?>
                    </p>

                    <div class="d-flex flex-column gap-3 flex-grow-1 justify-content-between">
                        <!-- Belief Card -->
                        <div class="p-3 rounded-3 flex-grow-1 d-flex flex-column justify-content-center" style="background: var(--violet-subtle-bg); border-left: 4px solid var(--primary-violet);">
                            <h6 class="fw-bold text-heading mb-1 d-flex align-items-center gap-2">
                                <i class="fas fa-quote-left text-primary"></i> <?= $this->lang->line('about_belief_head'); ?>
                            </h6>
                            <p class="small text-body mb-0 fst-italic" style="line-height: 1.7;">
                                "<?= $this->lang->line('about_belief_text'); ?>"
                            </p>
                        </div>

                        <!-- Vision Card -->
                        <div class="p-3 rounded-3 flex-grow-1 d-flex flex-column justify-content-center" style="background: var(--violet-subtle-bg); border-left: 4px solid var(--secondary-cobalt);">
                            <h6 class="fw-bold text-heading mb-1 d-flex align-items-center gap-2">
                                <i class="fas fa-eye text-primary"></i> <?= $this->lang->line('about_vision_title'); ?>
                            </h6>
                            <p class="small text-body mb-0" style="line-height: 1.7;">
                                <?= $this->lang->line('about_vision_text'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2: Mission Image + 4-Step Mission Matrix -->
            <div class="col-lg-6">
                <div class="card-3d p-4 h-100 d-flex flex-column">
                    <div class="mb-4 overflow-hidden rounded-4">
                        <img src="<?= base_url('assets/images/pic02.jpg'); ?>" alt="<?= $this->lang->line('about_mission_title'); ?>" class="img-fluid w-100" style="height: 280px; object-fit: cover;">
                    </div>
                    <h4 class="fw-bold text-heading mb-3"><?= $this->lang->line('about_mission_title'); ?></h4>

                    <div class="d-flex flex-column gap-3 flex-grow-1 justify-content-between">
                        <!-- Mission 01 -->
                        <div class="mission-matrix-card flex-grow-1 d-flex flex-column justify-content-center">
                            <span class="mission-num-badge"><?= $this->lang->line('about_mission_1_title'); ?></span>
                            <p class="small text-body mb-0" style="line-height: 1.6;"><?= $this->lang->line('about_mission_1_desc'); ?></p>
                        </div>
                        <!-- Mission 02 -->
                        <div class="mission-matrix-card flex-grow-1 d-flex flex-column justify-content-center">
                            <span class="mission-num-badge"><?= $this->lang->line('about_mission_2_title'); ?></span>
                            <p class="small text-body mb-0" style="line-height: 1.6;"><?= $this->lang->line('about_mission_2_desc'); ?></p>
                        </div>
                        <!-- Mission 03 -->
                        <div class="mission-matrix-card flex-grow-1 d-flex flex-column justify-content-center">
                            <span class="mission-num-badge"><?= $this->lang->line('about_mission_3_title'); ?></span>
                            <p class="small text-body mb-0" style="line-height: 1.6;"><?= $this->lang->line('about_mission_3_desc'); ?></p>
                        </div>
                        <!-- Mission 04 -->
                        <div class="mission-matrix-card flex-grow-1 d-flex flex-column justify-content-center">
                            <span class="mission-num-badge"><?= $this->lang->line('about_mission_4_title'); ?></span>
                            <p class="small text-body mb-0" style="line-height: 1.6;"><?= $this->lang->line('about_mission_4_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4 Core Values Bento Box -->
<section class="py-5 position-relative" style="background: var(--bg-page);">
    <div class="container-xxl">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge-pico mb-2">
                <i class="fas fa-gem"></i> Core Values
            </span>
            <h2 class="display-6 fw-bold text-heading"><?= $this->lang->line('core_values_head1'); ?></h2>
            <p class="text-primary fw-semibold fs-5"><?= $this->lang->line('core_values_head2'); ?></p>
        </div>

        <div class="row g-4 mb-5">
            <!-- 1. สมัครง่าย -->
            <div class="col-lg-6 col-md-6">
                <div class="card-3d p-4 h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-mobile-screen-button"></i>
                        </div>
                        <h4 class="fw-bold mb-0 text-heading"><?= $this->lang->line('val_easy_apply_title'); ?></h4>
                    </div>
                    <p class="text-body mb-0 fs-6" style="line-height: 1.75;"><?= $this->lang->line('val_easy_apply_desc'); ?></p>
                </div>
            </div>

            <!-- 2. เข้าถึงง่าย -->
            <div class="col-lg-6 col-md-6">
                <div class="card-3d p-4 h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-handshake-angle"></i>
                        </div>
                        <h4 class="fw-bold mb-0 text-heading"><?= $this->lang->line('val_accessible_title'); ?></h4>
                    </div>
                    <p class="text-body mb-0 fs-6" style="line-height: 1.75;"><?= $this->lang->line('val_accessible_desc'); ?></p>
                </div>
            </div>

            <!-- 3. โปร่งใส -->
            <div class="col-lg-6 col-md-6">
                <div class="card-3d p-4 h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-scale-balanced"></i>
                        </div>
                        <h4 class="fw-bold mb-0 text-heading"><?= $this->lang->line('val_transparent_title'); ?></h4>
                    </div>
                    <p class="text-body mb-0 fs-6" style="line-height: 1.75;"><?= $this->lang->line('val_transparent_desc'); ?></p>
                </div>
            </div>

            <!-- 4. รับผิดชอบ -->
            <div class="col-lg-6 col-md-6">
                <div class="card-3d p-4 h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-heart-pulse"></i>
                        </div>
                        <h4 class="fw-bold mb-0 text-heading"><?= $this->lang->line('val_responsible_title'); ?></h4>
                    </div>
                    <p class="text-body mb-0 fs-6" style="line-height: 1.75;"><?= $this->lang->line('val_responsible_desc'); ?></p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="<?= site_root_url('services'); ?>" class="btn-primary-3d py-3 px-5 fs-6">
                <i class="fas fa-hand-holding-dollar"></i> <?= $this->lang->line('nav_services'); ?>
            </a>
        </div>
    </div>
</section>