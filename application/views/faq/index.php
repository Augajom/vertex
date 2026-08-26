<!-- FAQ Hero -->
<section class="hero-section-home position-relative" style="padding-top: 130px; padding-bottom: 60px;">
    <div class="hero-aura-blob-1"></div>
    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="text-center max-w-700 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-circle-question"></i> FAQ Center
            </span>
            <h1 class="display-4 fw-extrabold text-heading mb-3"><?= $this->lang->line('faq_title'); ?></h1>
            <p class="lead text-primary fw-bold fs-5 mb-0"><?= $this->lang->line('faq_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- FAQ Accordion Content Section -->
<section class="py-5 position-relative" style="background: #FFFFFF;">
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- ==========================================
                     CATEGORY 1: ข้อมูลพื้นฐานเกี่ยวกับสินเชื่อ
                     ========================================== -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4 pb-2 border-bottom">
                        <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                            <i class="fas fa-building-columns"></i>
                        </div>
                        <h3 class="fw-bold text-heading mb-0 fs-4"><?= $this->lang->line('faq_cat_1_title'); ?></h3>
                    </div>

                    <div class="accordion custom-faq-accordion" id="accordionCat1">
                        <!-- Q1 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ1">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ1" aria-expanded="false" aria-controls="collapseQ1">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q1_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ1" class="accordion-collapse collapse" aria-labelledby="headingQ1" data-bs-parent="#accordionCat1">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-2"><?= $this->lang->line('faq_a1_p1'); ?></p>
                                    <p class="mb-2"><?= $this->lang->line('faq_a1_p2'); ?></p>
                                    <p class="mb-2"><?= $this->lang->line('faq_a1_p3'); ?></p>
                                    <p class="mb-0 fw-semibold text-primary"><?= $this->lang->line('faq_a1_p4'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ2">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ2" aria-expanded="false" aria-controls="collapseQ2">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q2_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ2" class="accordion-collapse collapse" aria-labelledby="headingQ2" data-bs-parent="#accordionCat1">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-2"><?= $this->lang->line('faq_a2_p1'); ?></p>
                                    <p class="mb-0"><?= $this->lang->line('faq_a2_p2'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ3">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ3" aria-expanded="false" aria-controls="collapseQ3">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q3_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ3" class="accordion-collapse collapse" aria-labelledby="headingQ3" data-bs-parent="#accordionCat1">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <div class="p-3 rounded-3 mb-2" style="background: var(--violet-subtle-bg); border-left: 4px solid var(--primary-violet);">
                                        <strong class="text-primary d-block mb-1"><i class="fas fa-coins me-1"></i> <?= $this->lang->line('faq_a3_limit'); ?></strong>
                                        <strong class="text-primary d-block"><i class="fas fa-calendar-days me-1"></i> <?= $this->lang->line('faq_a3_term'); ?></strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ4">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ4" aria-expanded="false" aria-controls="collapseQ4">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q4_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ4" class="accordion-collapse collapse" aria-labelledby="headingQ4" data-bs-parent="#accordionCat1">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-2"><?= $this->lang->line('faq_a4_p1'); ?></p>
                                    <p class="mb-0 text-danger fw-semibold"><?= $this->lang->line('faq_a4_p2'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==========================================
                     CATEGORY 2: คุณสมบัติในการสมัคร
                     ========================================== -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4 pb-2 border-bottom">
                        <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h3 class="fw-bold text-heading mb-0 fs-4"><?= $this->lang->line('faq_cat_2_title'); ?></h3>
                    </div>

                    <div class="accordion custom-faq-accordion" id="accordionCat2">
                        <!-- Q5 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ5">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ5" aria-expanded="false" aria-controls="collapseQ5">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q5_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ5" class="accordion-collapse collapse" aria-labelledby="headingQ5" data-bs-parent="#accordionCat2">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a5_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ6">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ6" aria-expanded="false" aria-controls="collapseQ6">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q6_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ6" class="accordion-collapse collapse" aria-labelledby="headingQ6" data-bs-parent="#accordionCat2">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a6_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ7">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ7" aria-expanded="false" aria-controls="collapseQ7">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q7_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ7" class="accordion-collapse collapse" aria-labelledby="headingQ7" data-bs-parent="#accordionCat2">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a7_p1'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==========================================
                     CATEGORY 3: เอกสารประกอบการสมัคร
                     ========================================== -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4 pb-2 border-bottom">
                        <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <h3 class="fw-bold text-heading mb-0 fs-4"><?= $this->lang->line('faq_cat_3_title'); ?></h3>
                    </div>

                    <div class="accordion custom-faq-accordion" id="accordionCat3">
                        <!-- Q8 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ8">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ8" aria-expanded="false" aria-controls="collapseQ8">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q8_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ8" class="accordion-collapse collapse" aria-labelledby="headingQ8" data-bs-parent="#accordionCat3">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a8_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q9 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ9">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ9" aria-expanded="false" aria-controls="collapseQ9">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q9_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ9" class="accordion-collapse collapse" aria-labelledby="headingQ9" data-bs-parent="#accordionCat3">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                                        <li class="p-2 rounded-2" style="background: var(--violet-subtle-bg);"><?= $this->lang->line('faq_a9_step1'); ?></li>
                                        <li class="p-2 rounded-2" style="background: var(--violet-subtle-bg);"><?= $this->lang->line('faq_a9_step2'); ?></li>
                                        <li class="p-2 rounded-2" style="background: var(--violet-subtle-bg);"><?= $this->lang->line('faq_a9_step3'); ?></li>
                                        <li class="p-2 rounded-2" style="background: var(--violet-subtle-bg);"><?= $this->lang->line('faq_a9_step4'); ?></li>
                                        <li class="p-2 rounded-2" style="background: var(--violet-subtle-bg);"><?= $this->lang->line('faq_a9_step5'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Q10 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ10">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ10" aria-expanded="false" aria-controls="collapseQ10">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q10_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ10" class="accordion-collapse collapse" aria-labelledby="headingQ10" data-bs-parent="#accordionCat3">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a10_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q11 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ11">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ11" aria-expanded="false" aria-controls="collapseQ11">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q11_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ11" class="accordion-collapse collapse" aria-labelledby="headingQ11" data-bs-parent="#accordionCat3">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a11_p1'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==========================================
                     CATEGORY 4: รายละเอียดอัตราดอกเบี้ย
                     ========================================== -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4 pb-2 border-bottom">
                        <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                            <i class="fas fa-percent"></i>
                        </div>
                        <h3 class="fw-bold text-heading mb-0 fs-4"><?= $this->lang->line('faq_cat_4_title'); ?></h3>
                    </div>

                    <div class="accordion custom-faq-accordion" id="accordionCat4">
                        <!-- Q12 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ12">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ12" aria-expanded="false" aria-controls="collapseQ12">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q12_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ12" class="accordion-collapse collapse" aria-labelledby="headingQ12" data-bs-parent="#accordionCat4">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a12_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q13 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ13">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ13" aria-expanded="false" aria-controls="collapseQ13">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q13_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ13" class="accordion-collapse collapse" aria-labelledby="headingQ13" data-bs-parent="#accordionCat4">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a13_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q14 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ14">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ14" aria-expanded="false" aria-controls="collapseQ14">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q14_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ14" class="accordion-collapse collapse" aria-labelledby="headingQ14" data-bs-parent="#accordionCat4">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="fw-bold text-primary mb-2"><?= $this->lang->line('faq_a14_intro'); ?></p>
                                    <ul class="list-unstyled d-flex flex-column gap-1 mb-2">
                                        <li><i class="fas fa-check-circle text-success me-1"></i> <?= $this->lang->line('faq_a14_item1'); ?></li>
                                        <li><i class="fas fa-check-circle text-success me-1"></i> <?= $this->lang->line('faq_a14_item2'); ?></li>
                                        <li><i class="fas fa-check-circle text-success me-1"></i> <?= $this->lang->line('faq_a14_item3'); ?></li>
                                        <li><i class="fas fa-check-circle text-success me-1"></i> <strong><?= $this->lang->line('faq_a14_item4'); ?></strong></li>
                                    </ul>
                                    <p class="small text-muted mb-0 fst-italic"><?= $this->lang->line('faq_a14_note'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q15 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ15">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ15" aria-expanded="false" aria-controls="collapseQ15">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q15_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ15" class="accordion-collapse collapse" aria-labelledby="headingQ15" data-bs-parent="#accordionCat4">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a15_p1'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==========================================
                     CATEGORY 5: วิธีการชำระเงินคืน
                     ========================================== -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4 pb-2 border-bottom">
                        <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                            <i class="fas fa-qrcode"></i>
                        </div>
                        <h3 class="fw-bold text-heading mb-0 fs-4"><?= $this->lang->line('faq_cat_5_title'); ?></h3>
                    </div>

                    <div class="accordion custom-faq-accordion" id="accordionCat5">
                        <!-- Q16 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ16">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ16" aria-expanded="false" aria-controls="collapseQ16">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q16_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ16" class="accordion-collapse collapse" aria-labelledby="headingQ16" data-bs-parent="#accordionCat5">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a16_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q17 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ17">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ17" aria-expanded="false" aria-controls="collapseQ17">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q17_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ17" class="accordion-collapse collapse" aria-labelledby="headingQ17" data-bs-parent="#accordionCat5">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a17_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q18 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ18">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ18" aria-expanded="false" aria-controls="collapseQ18">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q18_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ18" class="accordion-collapse collapse" aria-labelledby="headingQ18" data-bs-parent="#accordionCat5">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a18_p1'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q19 -->
                        <div class="accordion-item card-3d mb-3 border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingQ19">
                                <button class="accordion-button collapsed fw-bold text-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ19" aria-expanded="false" aria-controls="collapseQ19">
                                    <i class="fas fa-question-circle text-primary me-2"></i> <?= $this->lang->line('faq_q19_title'); ?>
                                </button>
                            </h2>
                            <div id="collapseQ19" class="accordion-collapse collapse" aria-labelledby="headingQ19" data-bs-parent="#accordionCat5">
                                <div class="accordion-body text-body" style="line-height: 1.85;">
                                    <p class="mb-0"><?= $this->lang->line('faq_a19_p1'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Still have questions card -->
                <div class="card-3d p-4 p-md-5 text-center mt-5">
                    <div class="card-icon-wrapper mx-auto mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="fw-bold text-heading mb-2"><?= $this->lang->line('faq_still_have_questions'); ?></h3>
                    <p class="text-muted max-w-700 mx-auto mb-4"><?= $this->lang->line('faq_contact_support'); ?></p>
                    <a href="<?= site_root_url('contact'); ?>" class="btn-primary-3d py-3 px-5 fs-6">
                        <i class="fas fa-envelope me-1"></i> <?= $this->lang->line('nav_contact'); ?>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>