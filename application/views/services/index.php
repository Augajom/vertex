<!-- Services Hero -->
<section class="hero-section-home position-relative" style="padding-top: 130px; padding-bottom: 60px;">
    <div class="hero-aura-blob-1"></div>
    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="text-center max-w-700 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-building-columns"></i> PICO Finance Regulated
            </span>
            <h1 class="display-4 fw-extrabold text-heading mb-3"><?= $this->lang->line('services_title'); ?></h1>
            <p class="lead text-primary fw-bold fs-4 mb-2"><?= $this->lang->line('services_prod_name'); ?></p>
            <p class="text-muted fs-6"><?= $this->lang->line('services_prod_sub'); ?></p>
        </div>
    </div>
</section>

<!-- Product Feature Card -->
<section class="py-5 position-relative" style="background: #FFFFFF;">
    <div class="container-xxl">
        
        <div class="card-3d p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <div class="overflow-hidden rounded-4">
                        <img src="<?= base_url('assets/images/pic03.jpg'); ?>" alt="<?= $this->lang->line('services_prod_name'); ?>" class="img-fluid w-100" style="max-height: 320px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h3 class="fw-bold text-heading mb-2"><?= $this->lang->line('services_prod_name'); ?></h3>
                    <p class="text-primary fw-bold fs-6 mb-3"><?= $this->lang->line('services_prod_sub'); ?></p>
                    <p class="text-body fs-6 mb-4" style="line-height: 1.85;"><?= $this->lang->line('services_prod_desc'); ?></p>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
                                <small class="text-muted d-block"><?= $this->lang->line('feat_limit_title'); ?></small>
                                <strong class="text-primary fs-6"><?= $this->lang->line('feat_limit_val'); ?></strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
                                <small class="text-muted d-block"><?= $this->lang->line('feat_rate_title'); ?></small>
                                <strong class="text-primary fs-6"><?= $this->lang->line('feat_rate_val'); ?></strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
                                <small class="text-muted d-block"><?= $this->lang->line('feat_term_title'); ?></small>
                                <strong class="text-primary fs-6"><?= $this->lang->line('feat_term_val'); ?></strong>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
                                <small class="text-muted d-block"><?= $this->lang->line('feat_trans_title'); ?></small>
                                <strong class="text-primary fs-6"><?= $this->lang->line('val_transparent_title'); ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interactive Workbench Card -->
        <div class="calc-workbench-card p-4 p-md-5 mb-5">
            <div class="row g-4 align-items-stretch">
                
                <!-- Left: Sliders & Controls -->
                <div class="col-lg-7">
                    <h3 class="fw-bold text-heading mb-4 d-flex align-items-center gap-2">
                        <i class="fas fa-sliders text-primary"></i> <?= $this->lang->line('loan_features_title'); ?>
                    </h3>

                    <!-- Slider 1: Loan Amount -->
                    <div class="calc-slider-group">
                        <div class="calc-slider-header">
                            <div>
                                <label class="fw-bold text-heading d-block mb-1"><?= $this->lang->line('feat_limit_title'); ?></label>
                                <span class="small text-muted">5,000 - 50,000 บาท</span>
                            </div>
                            <span class="calc-slider-val-badge">฿<span id="calcAmountDisplay">20,000</span></span>
                        </div>
                        <input type="range" class="form-range" id="calcLoanAmount" min="5000" max="50000" step="1000" value="20000">
                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <button type="button" class="preset-chip-btn" data-amount-preset="10000">10,000</button>
                            <button type="button" class="preset-chip-btn active" data-amount-preset="20000">20,000</button>
                            <button type="button" class="preset-chip-btn" data-amount-preset="30000">30,000</button>
                            <button type="button" class="preset-chip-btn" data-amount-preset="50000">50,000</button>
                        </div>
                    </div>

                    <!-- Slider 2: Loan Term -->
                    <div class="calc-slider-group">
                        <div class="calc-slider-header">
                            <div>
                                <label class="fw-bold text-heading d-block mb-1"><?= $this->lang->line('feat_term_title'); ?></label>
                                <span class="small text-muted">3 - 6 เดือน</span>
                            </div>
                            <span class="calc-slider-val-badge"><span id="calcTermDisplay">6</span> เดือน</span>
                        </div>
                        <input type="range" class="form-range" id="calcLoanTerm" min="3" max="6" step="1" value="6">
                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <button type="button" class="preset-chip-btn" data-term-preset="3">3 เดือน</button>
                            <button type="button" class="preset-chip-btn active" data-term-preset="6">6 เดือน</button>
                        </div>
                    </div>

                    <div class="p-3 rounded-3" style="background: rgba(102, 68, 236, 0.05); border: 1px solid var(--border-violet);">
                        <small class="text-muted d-block">
                            * <?= $this->lang->line('feat_rate_desc'); ?> (<?= $this->lang->line('feat_rate_val'); ?>)
                        </small>
                    </div>
                </div>

                <!-- Right: Digital Receipt Summary Card -->
                <div class="col-lg-5">
                    <div class="calc-receipt-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom border-secondary">
                                <span class="text-white-50 small text-uppercase">ESTIMATED SUMMARY</span>
                                <span class="badge" style="background: rgba(56, 189, 248, 0.2); color: #38BDF8;">Effective Rate</span>
                            </div>
                            <span class="text-white-50 small">ยอดผ่อนชำระโดยประมาณ</span>
                            
                            <div class="calc-receipt-highlight">
                                <div class="calc-monthly-amount" id="calcMonthlyPayment">฿3,680</div>
                                <span class="small text-white-50">/ เดือน</span>
                            </div>

                            <ul class="list-unstyled d-flex flex-column gap-2 small text-light mb-4">
                                <li class="d-flex justify-content-between">
                                    <span><?= $this->lang->line('feat_limit_title'); ?> (เงินต้น):</span>
                                    <strong class="text-white" id="calcPrincipalVal">฿20,000</strong>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span><?= $this->lang->line('feat_rate_title'); ?> (โดยประมาณ):</span>
                                    <strong class="text-white" id="calcInterestVal">฿2,080</strong>
                                </li>
                                <li class="d-flex justify-content-between pt-2 border-top border-secondary">
                                    <span class="fw-bold">ยอดชำระรวมทั้งสัญญา:</span>
                                    <strong class="text-white fs-6" id="calcTotalVal">฿22,080</strong>
                                </li>
                            </ul>
                        </div>

                        <a href="#apply" class="btn-primary-3d w-100 py-3 text-center justify-content-center">
                            <i class="fas fa-arrow-down"></i> <?= $this->lang->line('nav_apply'); ?>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     SECTION: ขั้นตอนการสมัครสินเชื่อ (Anchor #apply)
     ========================================== -->
<section class="py-5 position-relative" id="apply" style="background: var(--bg-page); scroll-margin-top: 80px;">
    <div class="container-xxl">
        
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge-pico mb-2">
                <i class="fas fa-list-check"></i> Application Process
            </span>
            <h2 class="display-6 fw-bold text-heading"><?= $this->lang->line('apply_title'); ?></h2>
            <p class="text-primary fw-semibold fs-5 mb-1"><?= $this->lang->line('apply_subtitle_1'); ?></p>
            <p class="text-muted fs-6"><?= $this->lang->line('apply_subtitle_2'); ?></p>
        </div>

        <!-- 7-Step Cyber Gallery Cards -->
        <div class="row g-4 mb-5">
            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="cyber-gallery-card">
                    <img src="<?= base_url('assets/images/pic04.jpg'); ?>" alt="STEP 01" class="cyber-gallery-img">
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="cyber-step-badge mb-2"><?= $this->lang->line('step_1_num'); ?></span>
                            <h5 class="fw-bold text-heading mt-2 mb-2"><?= $this->lang->line('step_1_title'); ?></h5>
                            <p class="small text-body mb-0"><?= $this->lang->line('step_1_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="cyber-gallery-card">
                    <img src="<?= base_url('assets/images/pic05.jpg'); ?>" alt="STEP 02" class="cyber-gallery-img">
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="cyber-step-badge mb-2"><?= $this->lang->line('step_2_num'); ?></span>
                            <h5 class="fw-bold text-heading mt-2 mb-2"><?= $this->lang->line('step_2_title'); ?></h5>
                            <p class="small text-body mb-0"><?= $this->lang->line('step_2_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="cyber-gallery-card">
                    <img src="<?= base_url('assets/images/pic06.jpg'); ?>" alt="STEP 03" class="cyber-gallery-img">
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="cyber-step-badge mb-2"><?= $this->lang->line('step_3_num'); ?></span>
                            <h5 class="fw-bold text-heading mt-2 mb-2"><?= $this->lang->line('step_3_title'); ?></h5>
                            <p class="small text-body mb-0"><?= $this->lang->line('step_3_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="cyber-gallery-card">
                    <img src="<?= base_url('assets/images/pic07.jpg'); ?>" alt="STEP 04" class="cyber-gallery-img">
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="cyber-step-badge mb-2"><?= $this->lang->line('step_4_num'); ?></span>
                            <h5 class="fw-bold text-heading mt-2 mb-2"><?= $this->lang->line('step_4_title'); ?></h5>
                            <p class="small text-body mb-0"><?= $this->lang->line('step_4_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="cyber-gallery-card">
                    <img src="<?= base_url('assets/images/pic08.jpg'); ?>" alt="STEP 05" class="cyber-gallery-img">
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="cyber-step-badge mb-2"><?= $this->lang->line('step_5_num'); ?></span>
                            <h5 class="fw-bold text-heading mt-2 mb-2"><?= $this->lang->line('step_5_title'); ?></h5>
                            <p class="small text-body mb-0"><?= $this->lang->line('step_5_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="cyber-gallery-card">
                    <img src="<?= base_url('assets/images/pic09.jpg'); ?>" alt="STEP 06" class="cyber-gallery-img">
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="cyber-step-badge mb-2"><?= $this->lang->line('step_6_num'); ?></span>
                            <h5 class="fw-bold text-heading mt-2 mb-2"><?= $this->lang->line('step_6_title'); ?></h5>
                            <p class="small text-body mb-0"><?= $this->lang->line('step_6_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 7 (Full Width Completion Step) -->
            <div class="col-12">
                <div class="cyber-gallery-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-4">
                            <img src="<?= base_url('assets/images/pic10.jpg'); ?>" alt="STEP 07" class="img-fluid w-100" style="height: 100%; min-height: 220px; object-fit: cover;">
                        </div>
                        <div class="col-lg-8 p-4 p-md-5">
                            <span class="cyber-step-badge mb-2"><?= $this->lang->line('step_7_num'); ?></span>
                            <h4 class="fw-bold text-heading mt-2 mb-2"><?= $this->lang->line('step_7_title'); ?></h4>
                            <p class="text-body mb-3 fs-6"><?= $this->lang->line('step_7_desc'); ?></p>
                            <div class="p-3 rounded-3 d-flex align-items-center gap-2" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
                                <i class="fas fa-circle-check text-primary fs-5"></i>
                                <span class="small fw-bold text-primary"><?= $this->lang->line('step_7_tip'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Eligibility & Requirements 2-Box System -->
        <div class="row g-4 mb-5">
            <!-- Box 1: คุณสมบัติเบื้องต้น -->
            <div class="col-lg-6">
                <div class="card-3d p-4 h-100">
                    <h4 class="fw-bold text-heading mb-3 d-flex align-items-center gap-2">
                        <i class="fas fa-user-check text-primary"></i> <?= $this->lang->line('eligibility_title'); ?>
                    </h4>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <?php foreach($this->lang->line('eligibility_items') as $item): ?>
                            <li class="d-flex align-items-start gap-2 fs-6 text-body">
                                <i class="fas fa-check text-success mt-1"></i>
                                <span><?= ltrim($item, '- '); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <p class="small text-muted fst-italic mb-0">
                        * <?= $this->lang->line('eligibility_note'); ?>
                    </p>
                </div>
            </div>

            <!-- Box 2: เอกสารประกอบการสมัคร -->
            <div class="col-lg-6">
                <div class="card-3d p-4 h-100">
                    <h4 class="fw-bold text-heading mb-2 d-flex align-items-center gap-2">
                        <i class="fas fa-file-invoice text-primary"></i> <?= $this->lang->line('docs_title'); ?>
                    </h4>
                    <p class="small text-primary fw-bold mb-3"><?= $this->lang->line('docs_sub1'); ?> - <?= $this->lang->line('docs_sub2'); ?></p>
                    
                    <h6 class="fw-bold text-heading mb-2"><?= $this->lang->line('docs_main_head'); ?></h6>
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-3 small text-body">
                        <li class="d-flex align-items-center gap-2"><i class="fas fa-angle-right text-primary"></i> <?= $this->lang->line('docs_main_1'); ?></li>
                        <li class="d-flex align-items-center gap-2"><i class="fas fa-angle-right text-primary"></i> <?= $this->lang->line('docs_main_2'); ?></li>
                    </ul>

                    <h6 class="fw-bold text-heading mb-2"><?= $this->lang->line('docs_consider_head'); ?></h6>
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-3 small text-body">
                        <?php foreach($this->lang->line('docs_consider_items') as $doc_item): ?>
                            <li class="d-flex align-items-center gap-2"><i class="fas fa-angle-right text-primary"></i> <?= $doc_item; ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <p class="small text-muted fst-italic mb-0"><?= $this->lang->line('docs_note'); ?></p>
                </div>
            </div>
        </div>

        <!-- CTA Action Banner -->
        <div class="hero-terminal-card p-4 p-md-5 text-center">
            <h2 class="display-6 fw-extrabold text-white mb-3"><?= $this->lang->line('apply_subtitle_1'); ?></h2>
            <p class="text-white-50 fs-5 max-w-700 mx-auto mb-4"><?= $this->lang->line('apply_subtitle_2'); ?></p>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                <a href="<?= $this->lang->line('app_download_url'); ?>" class="btn-special-3d py-3 px-5 fs-6">
                    <i class="fab fa-google-play"></i> <?= $this->lang->line('btn_google_play'); ?>
                </a>
                <a href="<?= site_root_url('contact'); ?>" class="btn-outline-3d py-3 px-5 fs-6">
                    <i class="fas fa-headset"></i> <?= $this->lang->line('nav_contact'); ?>
                </a>
            </div>
        </div>

    </div>
</section>