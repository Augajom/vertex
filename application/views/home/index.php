<!-- Hero Section (Split Command Center Layout) -->
<section class="hero-section-home position-relative">
    <div class="hero-aura-blob-1"></div>
    <div class="hero-aura-blob-2"></div>

    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Title, Subtitle, Description & Action Buttons -->
            <div class="col-lg-7">
                <div class="d-inline-flex align-items-center gap-2 badge-pico mb-3">
                    <i class="fas fa-building-columns"></i>
                    <span>PICO Finance Regulated</span>
                </div>
                
                <h1 class="display-4 fw-extrabold text-heading mb-3" style="line-height: 1.25;">
                    <?= $this->lang->line('home_hero_title'); ?>
                </h1>
                
                <p class="lead text-primary fw-bold fs-4 mb-3">
                    <?= $this->lang->line('home_hero_subtitle'); ?>
                </p>
                
                <p class="text-body fs-6 mb-2" style="line-height: 1.8;">
                    <?= $this->lang->line('home_hero_desc1'); ?>
                </p>
                
                <p class="text-body fs-6 mb-4" style="line-height: 1.8;">
                    <?= $this->lang->line('home_hero_desc2'); ?>
                </p>
                
                <div class="p-3 rounded-4 mb-4" style="background: rgba(102, 68, 236, 0.06); border: 1px solid var(--border-violet);">
                    <small class="text-primary fw-bold d-flex align-items-center gap-2">
                        <i class="fas fa-certificate text-primary"></i> <?= $this->lang->line('home_license_note'); ?>
                    </small>
                </div>

                <!-- CTA Buttons -->
                <div class="d-flex flex-wrap gap-3">
                    <a href="<?= site_root_url('services#apply'); ?>" class="btn-primary-3d py-3 px-4 fs-6">
                        <i class="fas fa-paper-plane"></i> <?= $this->lang->line('btn_apply_loan'); ?>
                    </a>
                    <a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="btn-outline-3d py-3 px-4 fs-6">
                        <i class="fas fa-shield-halved"></i> <?= $this->lang->line('btn_check_license'); ?>
                    </a>
                    <a href="<?= $this->lang->line('app_download_url'); ?>" class="btn-special-3d py-3 px-4 fs-6">
                        <i class="fab fa-google-play"></i> <?= $this->lang->line('btn_google_play'); ?>
                    </a>
                </div>
            </div>

            <!-- Right Column: Cyber Terminal Showcase Card -->
            <div class="col-lg-5">
                <div class="hero-terminal-card">
                    <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3" style="border-color: rgba(255, 255, 255, 0.12) !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="hero-radar-dot"></span>
                            <span class="small text-white-50 text-uppercase fw-bold" style="letter-spacing: 0.05em;">VERTEX LIVE STATUS</span>
                        </div>
                        <span class="badge" style="background: rgba(56, 189, 248, 0.2); color: #38BDF8; border: 1px solid rgba(56, 189, 248, 0.4);">PICO Finance</span>
                    </div>

                    <!-- Max Limit Highlight -->
                    <div class="text-center py-3 mb-3 rounded-4" style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08);">
                        <small class="text-white-50 text-uppercase fw-bold"><?= $this->lang->line('feat_limit_title'); ?></small>
                        <h2 class="display-6 fw-extrabold text-white mb-0 mt-1" style="color: #38BDF8 !important;">
                            <?= $this->lang->line('feat_limit_val'); ?>
                        </h2>
                    </div>

                    <!-- Spec Grid -->
                    <div class="row g-2 mb-4">
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.06);">
                                <small class="text-white-50 d-block"><?= $this->lang->line('feat_rate_title'); ?></small>
                                <strong class="text-white fs-6" style="color: #C4B5FD !important;"><?= $this->lang->line('feat_rate_val'); ?></strong>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.06);">
                                <small class="text-white-50 d-block"><?= $this->lang->line('feat_term_title'); ?></small>
                                <strong class="text-white fs-6" style="color: #C4B5FD !important;"><?= $this->lang->line('feat_term_val'); ?></strong>
                            </div>
                        </div>
                    </div>

                    <a href="<?= site_root_url('services'); ?>" class="btn btn-sm btn-outline-info rounded-pill py-2 w-100 fw-bold">
                        <i class="fas fa-calculator me-1"></i> <?= $this->lang->line('loan_features_title'); ?>
                    </a>
                </div>
            </div>

        </div>

        <!-- 4-Block Cyber Bento Grid Metrics -->
        <div class="cyber-bento-grid">
            <div class="row g-3 text-start">
                <div class="col-lg-3 col-md-6">
                    <div class="cyber-bento-item">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-building-columns"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-heading"><?= $this->lang->line('feat_limit_title'); ?></h6>
                            <span class="small text-muted"><?= $this->lang->line('feat_limit_val'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cyber-bento-item">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-percent"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-heading"><?= $this->lang->line('feat_rate_title'); ?></h6>
                            <span class="small text-muted"><?= $this->lang->line('feat_rate_val'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cyber-bento-item">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-heading"><?= $this->lang->line('feat_term_title'); ?></h6>
                            <span class="small text-muted"><?= $this->lang->line('feat_term_val'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cyber-bento-item">
                        <div class="card-icon-wrapper mb-0">
                            <i class="fas fa-scale-balanced"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-heading"><?= $this->lang->line('feat_trans_title'); ?></h6>
                            <span class="small text-muted"><?= $this->lang->line('val_transparent_title'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Company Intro Highlight Strip -->
<section class="py-5 position-relative" style="background: #FFFFFF;">
    <div class="container-xxl">
        <div class="card-3d p-4 p-md-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <div class="overflow-hidden rounded-4">
                        <img src="<?= base_url('assets/images/pic01.png'); ?>" alt="<?= $this->lang->line('company_fullname'); ?>" class="img-fluid w-100" style="max-height: 280px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <span class="badge-pico mb-2">
                        <i class="fas fa-building"></i> <?= $this->lang->line('about_title'); ?>
                    </span>
                    <h2 class="display-6 fw-bold text-heading mb-3"><?= $this->lang->line('company_intro_title'); ?></h2>
                    <p class="text-primary fw-semibold fs-5 mb-3"><?= $this->lang->line('company_intro_tagline'); ?></p>
                    <p class="text-body fs-6 mb-3" style="line-height: 1.85;"><?= $this->lang->line('company_intro_p1'); ?></p>
                    <p class="text-body fs-6 mb-4" style="line-height: 1.85;"><?= $this->lang->line('company_intro_p2'); ?></p>
                    
                    <a href="<?= site_root_url('about'); ?>" class="btn-outline-3d py-2 px-4">
                        <i class="fas fa-circle-info"></i> <?= $this->lang->line('nav_about'); ?>
                    </a>
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

        <div class="row g-4">
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
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-5 position-relative" style="background: var(--bg-page);">
    <div class="container-xxl">
        <div class="hero-terminal-card p-4 p-md-5 text-center">
            <h2 class="display-6 fw-extrabold text-white mb-3"><?= $this->lang->line('apply_subtitle_1'); ?></h2>
            <p class="text-white-50 fs-5 max-w-700 mx-auto mb-4"><?= $this->lang->line('apply_subtitle_2'); ?></p>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                <a href="<?= site_root_url('services#apply'); ?>" class="btn-primary-3d py-3 px-5 fs-6">
                    <i class="fas fa-arrow-right"></i> <?= $this->lang->line('apply_cta_btn'); ?>
                </a>
                <a href="<?= site_root_url('contact'); ?>" class="btn-outline-3d py-3 px-5 fs-6">
                    <i class="fas fa-headset"></i> <?= $this->lang->line('nav_contact'); ?>
                </a>
            </div>
        </div>
    </div>
</section>