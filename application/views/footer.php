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

<!-- Interactive FinTech Scripts & Micro-interactions -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    
    // 1. Interactive Loan Calculator
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

    let prevMonthly = 0;
    let prevPrincipal = 0;
    let prevInterest = 0;
    let prevTotal = 0;

    // High-Performance Smooth Number Odometer Engine
    function animateValue(element, startVal, endVal, duration = 320, prefix = '', suffix = '') {
        if (!element) return;
        if (startVal === endVal) {
            element.textContent = prefix + Math.round(endVal).toLocaleString('th-TH') + suffix;
            return;
        }

        const startTime = performance.now();
        const range = endVal - startVal;

        if (element._animId) cancelAnimationFrame(element._animId);

        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const ease = 1 - Math.pow(1 - progress, 3); // Cubic Ease Out
            const currentVal = startVal + range * ease;

            element.textContent = prefix + Math.round(currentVal).toLocaleString('th-TH') + suffix;

            if (progress < 1) {
                element._animId = requestAnimationFrame(updateCounter);
            } else {
                element.textContent = prefix + Math.round(endVal).toLocaleString('th-TH') + suffix;
                element._animId = null;
            }
        }

        element._animId = requestAnimationFrame(updateCounter);
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
            animateValue(monthlyDisplay, prevMonthly || roundMonthly * 0.75, roundMonthly, 350, '฿');
            animateValue(principalDisplay, prevPrincipal || P * 0.75, P, 320, '฿');
            animateValue(interestDisplay, prevInterest || roundInterest * 0.75, roundInterest, 320, '฿');
            animateValue(totalDisplay, prevTotal || roundTotal * 0.75, roundTotal, 350, '฿');
        } else {
            if (monthlyDisplay) monthlyDisplay.textContent = '฿' + roundMonthly.toLocaleString('th-TH');
            if (principalDisplay) principalDisplay.textContent = '฿' + P.toLocaleString('th-TH');
            if (interestDisplay) interestDisplay.textContent = '฿' + roundInterest.toLocaleString('th-TH');
            if (totalDisplay) totalDisplay.textContent = '฿' + roundTotal.toLocaleString('th-TH');
        }

        prevMonthly = roundMonthly;
        prevPrincipal = P;
        prevInterest = roundInterest;
        prevTotal = roundTotal;
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

    // 3. 3D Interactive Card Tilt & Cursor Spotlight (Desktop & Laptops)
    if (!window.matchMedia || !window.matchMedia('(pointer: coarse)').matches) {
        const tiltCards = document.querySelectorAll('.card-3d, .hero-terminal-card, .calc-workbench-card, .cyber-gallery-card, .cyber-bento-item');

        tiltCards.forEach(card => {
            let rect = null;

            function updateRect() {
                rect = card.getBoundingClientRect();
            }

            card.addEventListener('mouseenter', function () {
                updateRect();
                card.style.transition = 'transform 0.1s ease-out, box-shadow 0.25s ease';
            });

            card.addEventListener('mousemove', function (e) {
                if (!rect) updateRect();
                const mouseX = e.clientX - rect.left;
                const mouseY = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const percentX = (mouseX - centerX) / centerX;
                const percentY = (mouseY - centerY) / centerY;

                const rotateX = (-percentY * 5).toFixed(2);
                const rotateY = (percentX * 5).toFixed(2);

                card.style.setProperty('--mouse-x', `${mouseX}px`);
                card.style.setProperty('--mouse-y', `${mouseY}px`);
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.012, 1.012, 1.012)`;
                card.style.boxShadow = `0 24px 45px -15px rgba(11, 27, 52, 0.14), 0 0 25px rgba(102, 68, 236, 0.18)`;
            });

            card.addEventListener('mouseleave', function () {
                card.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.35s ease';
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
                card.style.boxShadow = '';
                rect = null;
            });

            window.addEventListener('resize', function () {
                rect = null;
            });
        });

        // 4. Magnetic Kinetic Button Attraction
        const magneticButtons = document.querySelectorAll('.btn-primary-3d, .btn-outline-3d, .btn-special-3d');

        magneticButtons.forEach(btn => {
            let btnRect = null;

            function updateBtnRect() {
                btnRect = btn.getBoundingClientRect();
            }

            btn.addEventListener('mouseenter', function () {
                updateBtnRect();
                btn.style.transition = 'transform 0.12s ease-out, box-shadow 0.2s ease';
            });

            btn.addEventListener('mousemove', function (e) {
                if (!btnRect) updateBtnRect();
                const mouseX = e.clientX - btnRect.left;
                const mouseY = e.clientY - btnRect.top;

                const centerX = btnRect.width / 2;
                const centerY = btnRect.height / 2;

                const deltaX = (mouseX - centerX) * 0.28;
                const deltaY = (mouseY - centerY) * 0.28;

                btn.style.transform = `translate3d(${deltaX.toFixed(2)}px, ${deltaY.toFixed(2)}px, 0) scale(1.035)`;
            });

            btn.addEventListener('mouseleave', function () {
                btn.style.transition = 'transform 0.45s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.3s ease';
                btn.style.transform = 'translate3d(0, 0, 0) scale(1)';
                btnRect = null;
            });

            window.addEventListener('resize', function () {
                btnRect = null;
            });
        });
    }
});
</script>

</body>
</html>