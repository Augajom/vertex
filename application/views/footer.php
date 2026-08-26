<!-- Site Footer -->
<footer class="site-footer">
    <div class="container-xxl">
        <div class="row g-4 justify-content-between">
            
            <!-- Col 1: Brand & Slogan -->
            <div class="col-lg-4 col-md-6">
                <a href="<?= site_root_url(); ?>" class="d-inline-block mb-3 bg-white p-2 rounded-3">
                    <img src="<?= base_url('assets/images/logo.png'); ?>" alt="<?= $this->lang->line('site_brand_name'); ?>" style="height: 40px; object-fit: contain;">
                </a>
                <h5 class="fw-bold mb-2"><?= $this->lang->line('company_fullname'); ?></h5>
                <p class="text-white small mb-2 fw-semibold"><em><?= $this->lang->line('company_slogan'); ?></em></p>
                <p class="small text-light mb-3" style="line-height: 1.7;"><?= $this->lang->line('footer_desc'); ?></p>
                <p class="small text-white-50 mb-0"><?= $this->lang->line('footer_license_note'); ?></p>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <h5><?= $this->lang->line('nav_menu'); ?></h5>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="<?= site_root_url(); ?>"><i class="fas fa-angle-right me-1 text-primary"></i> <?= $this->lang->line('nav_home'); ?></a></li>
                    <li><a href="<?= site_root_url('about'); ?>"><i class="fas fa-angle-right me-1 text-primary"></i> <?= $this->lang->line('nav_about'); ?></a></li>
                    <li><a href="<?= site_root_url('services'); ?>"><i class="fas fa-angle-right me-1 text-primary"></i> <?= $this->lang->line('nav_services'); ?></a></li>
                    <li><a href="<?= site_root_url('faq'); ?>"><i class="fas fa-angle-right me-1 text-primary"></i> <?= $this->lang->line('nav_faq'); ?></a></li>
                    <li><a href="<?= site_root_url('policy'); ?>"><i class="fas fa-angle-right me-1 text-primary"></i> <?= $this->lang->line('nav_policy'); ?></a></li>
                    <li><a href="<?= site_root_url('contact'); ?>"><i class="fas fa-angle-right me-1 text-primary"></i> <?= $this->lang->line('nav_contact'); ?></a></li>
                </ul>
            </div>

            <!-- Col 3: Policy & Legal Links -->
            <div class="col-lg-3 col-md-6 col-6">
                <h5><?= $this->lang->line('footer_heading_policy'); ?></h5>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="<?= site_root_url('policy/gov'); ?>"><i class="fas fa-shield-halved me-1 text-primary"></i> <?= $this->lang->line('footer_link_gov'); ?></a></li>
                    <li><a href="<?= site_root_url('policy/privacy'); ?>"><i class="fas fa-user-shield me-1 text-primary"></i> <?= $this->lang->line('footer_link_privacy'); ?></a></li>
                    <li><a href="<?= site_root_url('policy/terms'); ?>"><i class="fas fa-file-contract me-1 text-primary"></i> <?= $this->lang->line('footer_link_terms'); ?></a></li>
                    <li><a href="<?= site_root_url('policy/agreement'); ?>"><i class="fas fa-file-signature me-1 text-primary"></i> <?= $this->lang->line('footer_link_agreement'); ?></a></li>
                </ul>
            </div>

            <!-- Col 4: Contact & Verification -->
            <div class="col-lg-3 col-md-6">
                <h5><?= $this->lang->line('footer_heading_contact'); ?></h5>
                <p class="small text-light mb-2"><i class="fas fa-location-dot me-2 text-primary"></i> <?= $this->lang->line('company_address'); ?></p>
                <p class="small text-light mb-3"><i class="fas fa-envelope me-2 text-primary"></i> <a href="mailto:<?= $this->lang->line('company_email'); ?>" class="text-white"><?= $this->lang->line('company_email'); ?></a></p>
                <a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="btn btn-sm btn-outline-info rounded-pill py-2 px-3 w-100 fw-bold">
                    <i class="fas fa-certificate me-1"></i> <?= $this->lang->line('btn_check_license'); ?>
                </a>
            </div>

        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom-bar d-flex flex-wrap align-items-center justify-content-between gap-2 small">
            <p class="mb-0">&copy; <?= date('Y'); ?> <?= $this->lang->line('company_fullname'); ?>. <?= $this->lang->line('footer_rights'); ?></p>
            <div class="d-flex gap-3">
                <a href="<?= site_root_url('policy/privacy'); ?>"><?= $this->lang->line('tab_privacy_title'); ?></a>
                <span>&bull;</span>
                <a href="<?= site_root_url('policy/terms'); ?>"><?= $this->lang->line('tab_terms_title'); ?></a>
            </div>
        </div>
    </div>
</footer>

</div> <!-- End .main-wrapper -->

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Interactive FinTech Scripts & Cyber Micro-interactions -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    
    // 1. Interactive Loan Calculator with Digital Matrix Decrypt Counter
    const amountSlider = document.getElementById('calcLoanAmount');
    const termSlider = document.getElementById('calcLoanTerm');
    const amountDisplay = document.getElementById('calcAmountDisplay');
    const termDisplay = document.getElementById('calcTermDisplay');
    const monthlyDisplay = document.getElementById('calcMonthlyPayment');
    const principalDisplay = document.getElementById('calcPrincipalVal');
    const interestDisplay = document.getElementById('calcInterestVal');
    const totalDisplay = document.getElementById('calcTotalVal');

    function updateTrack(slider) {
        if (!slider) return;
        const min = parseFloat(slider.min) || 0;
        const max = parseFloat(slider.max) || 100;
        const val = parseFloat(slider.value) || 0;
        const pct = ((val - min) / (max - min)) * 100;
        slider.style.background = `linear-gradient(to right, #6644EC 0%, #2F5EEB ${pct}%, #CBD5E1 ${pct}%, #CBD5E1 100%)`;
    }

    // High-Speed Cyber Matrix Decrypt Counter Engine (Unique to Vertex)
    function animateMatrixCounter(element, targetVal, duration = 280, prefix = '', suffix = '') {
        if (!element) return;
        const targetNum = Math.round(targetVal);
        const targetStr = targetNum.toLocaleString('th-TH');
        const matrixChars = '0123456789%#@*&';
        const startTime = performance.now();

        if (element._matrixAnimId) cancelAnimationFrame(element._matrixAnimId);

        function frame(now) {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);

            if (progress < 1) {
                let scrambled = '';
                for (let i = 0; i < targetStr.length; i++) {
                    if (targetStr[i] === ',') {
                        scrambled += ',';
                    } else if (Math.random() < progress * 1.2) {
                        scrambled += targetStr[i];
                    } else {
                        scrambled += matrixChars[Math.floor(Math.random() * matrixChars.length)];
                    }
                }
                element.textContent = prefix + scrambled + suffix;
                element._matrixAnimId = requestAnimationFrame(frame);
            } else {
                element.textContent = prefix + targetStr + suffix;
                element._matrixAnimId = null;
            }
        }

        element._matrixAnimId = requestAnimationFrame(frame);
    }

    function calculateLoan(animate = false) {
        if (!amountSlider || !termSlider) return;
        const P = parseFloat(amountSlider.value) || 20000;
        const n = parseInt(termSlider.value) || 6;
        const annualRate = 0.3580; // 35.80% Max Effective Rate

        updateTrack(amountSlider);
        updateTrack(termSlider);

        if (amountDisplay) amountDisplay.textContent = P.toLocaleString('th-TH');
        if (termDisplay) termDisplay.textContent = n;

        // Effective Rate Reducing Balance Installment Formula: PMT = P * (r*(1+r)^n) / ((1+r)^n - 1)
        const r = annualRate / 12;
        const monthlyPayment = (P * (r * Math.pow(1 + r, n))) / (Math.pow(1 + r, n) - 1);
        const totalRepay = monthlyPayment * n;
        const totalInterest = totalRepay - P;

        const roundMonthly = Math.round(monthlyPayment);
        const roundInterest = Math.round(totalInterest);
        const roundTotal = Math.round(totalRepay);

        if (animate) {
            animateMatrixCounter(monthlyDisplay, roundMonthly, 300, '฿');
            animateMatrixCounter(principalDisplay, P, 260, '฿');
            animateMatrixCounter(interestDisplay, roundInterest, 260, '฿');
            animateMatrixCounter(totalDisplay, roundTotal, 300, '฿');
        } else {
            if (monthlyDisplay) monthlyDisplay.textContent = '฿' + roundMonthly.toLocaleString('th-TH');
            if (principalDisplay) principalDisplay.textContent = '฿' + P.toLocaleString('th-TH');
            if (interestDisplay) interestDisplay.textContent = '฿' + roundInterest.toLocaleString('th-TH');
            if (totalDisplay) totalDisplay.textContent = '฿' + roundTotal.toLocaleString('th-TH');
        }
    }

    if (amountSlider && termSlider) {
        amountSlider.addEventListener('input', function() { calculateLoan(false); });
        termSlider.addEventListener('input', function() { calculateLoan(false); });
        calculateLoan(true);
    }

    // Amount Presets
    const presetButtons = document.querySelectorAll('[data-amount-preset]');
    presetButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            presetButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            if (amountSlider) {
                amountSlider.value = this.dataset.amountPreset;
                calculateLoan(true);
            }
        });
    });

    // Term Presets
    const termPresetButtons = document.querySelectorAll('[data-term-preset]');
    termPresetButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            termPresetButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            if (termSlider) {
                termSlider.value = this.dataset.termPreset;
                calculateLoan(true);
            }
        });
    });

    // 2. Segmented Policy Tabs Switcher
    const policyTabs = document.querySelectorAll('.segmented-tab-btn');
    const policyPanes = document.querySelectorAll('.tab-content-pane');

    policyTabs.forEach(btn => {
        btn.addEventListener('click', function () {
            const targetTab = this.dataset.tab;
            policyTabs.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            policyPanes.forEach(pane => {
                if (pane.id === targetTab) {
                    pane.classList.remove('d-none');
                } else {
                    pane.classList.add('d-none');
                }
            });
        });
    });

    // 3. Cyber Liquid Neon Ripple on Click
    const cyberButtons = document.querySelectorAll('.btn-primary-3d, .btn-outline-3d, .btn-special-3d');
    cyberButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            const rect = btn.getBoundingClientRect();
            const circle = document.createElement('span');
            const diameter = Math.max(rect.width, rect.height);
            const radius = diameter / 2;

            circle.style.width = circle.style.height = `${diameter}px`;
            circle.style.left = `${e.clientX - rect.left - radius}px`;
            circle.style.top = `${e.clientY - rect.top - radius}px`;
            circle.classList.add('cyber-ripple');

            const existing = btn.querySelector('.cyber-ripple');
            if (existing) existing.remove();

            btn.appendChild(circle);
        });
    });
});
</script>

</body>
</html>