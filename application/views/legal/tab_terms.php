<h3 class="fw-bold text-heading mb-3 pb-2 border-bottom"><?= $this->lang->line('tab_terms_title'); ?></h3>

<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('terms_p1'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_p2'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_eligible_title'); ?></h4>
<ul class="text-body mb-4" style="line-height: 1.8;">
    <?php $terms_elig = $this->lang->line('terms_eligible_items'); ?>
    <?php if (!empty($terms_elig)): foreach ($terms_elig as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec1_title'); ?></h4>
<ol class="text-body mb-4" style="line-height: 1.8;">
    <?php $sec1_defs = $this->lang->line('terms_sec1_items'); ?>
    <?php if (!empty($sec1_defs)): foreach ($sec1_defs as $def): ?>
        <li><?= $def; ?></li>
    <?php endforeach; endif; ?>
</ol>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec2_title'); ?></h4>
<p class="text-body mb-2" style="line-height: 1.85;"><?= $this->lang->line('terms_sec2_p1'); ?></p>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec2_p2'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec3_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec3_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec4_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec4_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec5_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec5_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec6_title'); ?></h4>
<ul class="text-body mb-4" style="line-height: 1.8;">
    <?php $sec6_methods = $this->lang->line('terms_sec6_items'); ?>
    <?php if (!empty($sec6_methods)): foreach ($sec6_methods as $method): ?>
        <li><?= $method; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec7_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec7_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec8_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec8_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec9_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec9_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec10_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec10_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec11_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec11_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec12_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec12_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec13_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec13_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec14_title'); ?></h4>
<p class="text-body mb-4" style="line-height: 1.85;"><?= $this->lang->line('terms_sec14_p1'); ?></p>

<h4 class="fw-bold text-heading mt-4 mb-2"><?= $this->lang->line('terms_sec15_title'); ?></h4>
<div class="p-3 rounded-3" style="background: var(--violet-subtle-bg); border: 1px solid var(--border-violet);">
    <p class="text-body mb-1"><strong>อีเมล:</strong> <?= $this->lang->line('terms_sec15_email'); ?></p>
    <p class="text-body mb-1"><strong>LINE:</strong> <?= $this->lang->line('terms_sec15_line'); ?></p>
    <p class="text-body mb-0"><strong>ที่อยู่:</strong> <?= $this->lang->line('terms_sec15_addr'); ?></p>
</div>