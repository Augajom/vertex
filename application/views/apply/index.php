<!-- Apply Hero -->
<section class="hero-section-home position-relative" style="padding-top: 130px; padding-bottom: 60px;">
    <div class="hero-aura-blob-1"></div>
    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="text-center max-w-700 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-list-check"></i> PICO Finance Application
            </span>
            <h1 class="display-4 fw-extrabold text-heading mb-3"><?= $this->lang->line('apply_title'); ?></h1>
            <p class="lead text-primary fw-bold fs-4 mb-2"><?= $this->lang->line('apply_subtitle_1'); ?></p>
            <p class="text-muted fs-6"><?= $this->lang->line('apply_subtitle_2'); ?></p>
        </div>
    </div>
</section>

<!-- 7-Step Cyber Gallery Cards -->
<section class="py-5 position-relative" style="background: #FFFFFF;">
    <div class="container-xxl">
        
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
        <div class="row g-4">
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

    </div>
</section>