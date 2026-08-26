<?php
$active_tab = isset($active_tab) && !empty($active_tab) ? $active_tab : 'privacy';
if ($active_tab == 'gov' || $active_tab == 'index') {
    $active_tab = 'privacy';
}
?>
<!-- Policy Hero -->
<section class="hero-section-home position-relative" style="padding-top: 130px; padding-bottom: 60px;">
    <div class="hero-aura-blob-1"></div>
    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="text-center max-w-700 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-shield-halved"></i> Governance & Legal Policies
            </span>
            <h1 class="display-4 fw-extrabold text-heading mb-3"><?= $this->lang->line('gov_title'); ?></h1>
            <p class="lead text-primary fw-bold fs-4 mb-2"><?= $this->lang->line('gov_subtitle'); ?></p>
            <p class="text-muted fs-6"><?= $this->lang->line('gov_p1'); ?></p>
        </div>
    </div>
</section>

<!-- Governance & License Verification Section -->
<section class="py-5 position-relative" style="background: #FFFFFF;">
    <div class="container-xxl">
        
        <!-- License Card (Always visible on top) -->
        <div class="card-3d p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 mb-4">
                <div class="col-lg-8">
                    <h3 class="fw-bold text-heading mb-2 d-flex align-items-center gap-2">
                        <i class="fas fa-certificate text-primary"></i> <?= $this->lang->line('license_info_title'); ?>
                    </h3>
                    <p class="text-body fs-6 mb-2" style="line-height: 1.8;"><?= $this->lang->line('gov_p1'); ?></p>
                    <p class="text-body fs-6 mb-0" style="line-height: 1.8;"><?= $this->lang->line('gov_p2'); ?></p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="btn-primary-3d py-3 px-4">
                        <i class="fas fa-arrow-up-right-from-square"></i> <?= $this->lang->line('btn_check_license'); ?>
                    </a>
                </div>
            </div>

            <!-- License Specification Table -->
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-3 bg-white rounded-3 overflow-hidden shadow-sm">
                    <tbody>
                        <tr>
                            <td class="fw-bold text-heading" style="width: 32%;"><?= $this->lang->line('license_type_label'); ?></td>
                            <td class="text-body"><?= $this->lang->line('license_type_val'); ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-heading"><?= $this->lang->line('license_no_label'); ?></td>
                            <td><span class="badge" style="background: var(--violet-subtle-bg); color: var(--primary-violet); border: 1px solid var(--border-violet); font-size: 0.92rem;"><?= $this->lang->line('license_no_val'); ?></span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-heading"><?= $this->lang->line('license_date_label'); ?></td>
                            <td class="text-body"><?= $this->lang->line('license_date_val'); ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-heading"><?= $this->lang->line('license_auth_label'); ?></td>
                            <td class="text-body"><?= $this->lang->line('license_auth_val'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-3 rounded-3" style="background: rgba(102, 68, 236, 0.05); border: 1px solid var(--border-violet);">
                <small class="text-muted d-flex align-items-center gap-2">
                    <i class="fas fa-circle-info text-primary"></i> <?= $this->lang->line('license_check_text'); ?>
                </small>
            </div>
        </div>

        <!-- Section Heading for Legal Docs -->
        <div class="text-center max-w-700 mx-auto mb-4">
            <h2 class="display-6 fw-bold text-heading"><?= $this->lang->line('legal_docs_title'); ?></h2>
        </div>

        <!-- 3 Segmented Policy Tabs (Privacy, Terms, Agreement) -->
        <div class="segmented-tab-bar mb-4" id="policyTabs">
            <button class="segmented-tab-btn <?= ($active_tab == 'privacy') ? 'active' : ''; ?>" data-tab="tab-privacy">
                <i class="fas fa-user-shield"></i> <?= $this->lang->line('tab_privacy_title'); ?>
            </button>
            <button class="segmented-tab-btn <?= ($active_tab == 'terms') ? 'active' : ''; ?>" data-tab="tab-terms">
                <i class="fas fa-file-contract"></i> <?= $this->lang->line('tab_terms_title'); ?>
            </button>
            <button class="segmented-tab-btn <?= ($active_tab == 'agreement') ? 'active' : ''; ?>" data-tab="tab-agreement">
                <i class="fas fa-file-signature"></i> <?= $this->lang->line('tab_agreement_title'); ?>
            </button>
        </div>

        <!-- Tab 1: Privacy Policy -->
        <div class="policy-reader-box tab-content-pane <?= ($active_tab == 'privacy') ? '' : 'd-none'; ?>" id="tab-privacy">
            <?php $this->load->view('legal/tab_privacy'); ?>
        </div>

        <!-- Tab 2: Terms of Service -->
        <div class="policy-reader-box tab-content-pane <?= ($active_tab == 'terms') ? '' : 'd-none'; ?>" id="tab-terms">
            <?php $this->load->view('legal/tab_terms'); ?>
        </div>

        <!-- Tab 3: Loan Agreement -->
        <div class="policy-reader-box tab-content-pane <?= ($active_tab == 'agreement') ? '' : 'd-none'; ?>" id="tab-agreement">
            <?php $this->load->view('legal/tab_agreement'); ?>
        </div>

    </div>
</section>