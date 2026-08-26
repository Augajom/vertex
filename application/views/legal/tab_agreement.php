<h3 class="fw-bold text-heading mb-3 pb-2 border-bottom"><?= $this->lang->line('tab_agreement_title'); ?></h3>
<p class="text-muted small mb-2"><?= $this->lang->line('agree_doc_date'); ?></p>
<p class="text-body fw-bold mb-4"><?= $this->lang->line('agree_doc_between'); ?></p>

<div class="row g-4 mb-4">
    <div class="col-md-6">
        <div class="p-3 rounded-3 h-100" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
            <h5 class="fw-bold text-primary mb-2"><?= $this->lang->line('agree_lender_title'); ?></h5>
            <p class="small text-body mb-1"><strong>ชื่อ:</strong> <?= $this->lang->line('agree_lender_name'); ?></p>
            <p class="small text-body mb-1"><strong>ที่อยู่:</strong> <?= $this->lang->line('agree_lender_addr'); ?></p>
            <p class="small text-body mb-1"><strong>ติดต่อ:</strong> <?= $this->lang->line('agree_lender_contact'); ?></p>
            <p class="small text-muted mb-0"><em>(<?= $this->lang->line('agree_lender_alias'); ?>)</em></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-3 rounded-3 h-100" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
            <h5 class="fw-bold text-primary mb-2"><?= $this->lang->line('agree_borrower_title'); ?></h5>
            <p class="small text-body mb-1"><strong>ชื่อ:</strong> <?= $this->lang->line('agree_borrower_name'); ?></p>
            <p class="small text-body mb-1"><strong>ที่อยู่:</strong> <?= $this->lang->line('agree_borrower_addr'); ?></p>
            <p class="small text-body mb-1"><strong>เลขบัตรประชาชน:</strong> <?= $this->lang->line('agree_borrower_id'); ?></p>
            <p class="small text-body mb-1"><strong>อีเมล:</strong> <?= $this->lang->line('agree_borrower_email'); ?></p>
            <p class="small text-body mb-1"><strong>โทร:</strong> <?= $this->lang->line('agree_borrower_phone'); ?></p>
            <p class="small text-muted mb-0"><em>(<?= $this->lang->line('agree_borrower_alias'); ?>)</em></p>
        </div>
    </div>
</div>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_important_title'); ?></h4>
<ol class="text-body mb-4" style="line-height: 1.8;">
    <?php $important_items = $this->lang->line('agree_important_items'); ?>
    <?php if (!empty($important_items)): foreach ($important_items as $imp): ?>
        <li><?= $imp; ?></li>
    <?php endforeach; endif; ?>
</ol>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art1_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art1_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art1_p2'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art1_p3'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art2_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art2_intro'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art2_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art2_p2'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art2_p3'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art2_p4'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art2_p5'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art2_p6'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art3_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art3_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art3_p2'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art3_p3'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art3_p4'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art3_p5'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art3_p6'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art3_p7'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art4_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p2'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p3'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p4'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p5'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p6'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p7'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p8'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p9'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p10'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p11'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art4_p12'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art5_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art5_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art5_p2'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art5_p3'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art5_p4'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art5_p5'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art5_p6'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art6_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art6_p1'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art6_p2'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art7_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art7_p1'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art7_p2'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art8_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art8_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art8_p2'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art8_p3'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art9_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art9_intro'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art9_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art9_p2'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art9_p3'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art10_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art10_p1'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art10_p2'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art11_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art11_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art11_p2'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art11_p3'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art12_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art12_p1'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art12_p2'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art13_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art13_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art13_p2'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art13_p3'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art14_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art14_p1'); ?></p>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('agree_art14_p2'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art14_p3'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('agree_art15_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('agree_art15_p1'); ?></p>

<div class="p-3 rounded-3" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
    <p class="text-body mb-1"><strong><?= $this->lang->line('agree_effective_date_label'); ?></strong> ____/_____/_____</p>
    <p class="text-body mb-0"><strong><?= $this->lang->line('agree_company_label'); ?></strong> <?= $this->lang->line('company_fullname'); ?></p>
</div>