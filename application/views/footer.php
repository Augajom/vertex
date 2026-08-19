        <!-- Footer -->
        <section id="footer">
            <div class="inner">
                <h2 class="major" id="contact"><?= $this->lang->line('contact_title'); ?></h2>
                
                <p>
                    <strong><?= $this->lang->line('company_fullname'); ?></strong><br>
                    <?= $this->lang->line('footer_desc'); ?><br>
                    <?= $this->lang->line('footer_license_note'); ?><br>
                    <?= $this->lang->line('btn_check_license_long'); ?>: <a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" style="color: #8ab4f8;"><?= $this->lang->line('license_check_url'); ?></a>
                </p>

                <div class="row" style="margin-bottom: 2.5em;">
                    <div class="col-6 col-12-medium">
                        <h4 style="color: #ffffff; margin-bottom: 0.75em;"><?= $this->lang->line('footer_heading_policy'); ?></h4>
                        <ul class="alt">
                            <li><a href="#policy" onclick="switchSolidTabDirect('tab-privacy')"><?= $this->lang->line('footer_link_privacy'); ?></a></li>
                            <li><a href="#policy" onclick="switchSolidTabDirect('tab-terms')"><?= $this->lang->line('footer_link_terms'); ?></a></li>
                            <li><a href="#policy" onclick="switchSolidTabDirect('tab-agreement')"><?= $this->lang->line('footer_link_agreement'); ?></a></li>
                            <li><a href="#policy"><?= $this->lang->line('footer_link_gov'); ?></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-12-medium">
                        <h4 style="color: #ffffff; margin-bottom: 0.75em;"><?= $this->lang->line('footer_heading_contact'); ?></h4>
                        <ul class="contact">
                            <li class="icon solid fa-home">
                                <?= $this->lang->line('company_fullname'); ?><br />
                                <?= $this->lang->line('company_address'); ?>
                            </li>
                            <li class="icon solid fa-envelope">
                                <?= $this->lang->line('label_email'); ?> : <a href="mailto:<?= $this->lang->line('company_email'); ?>" style="color: #8ab4f8;"><?= $this->lang->line('company_email'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- End #page-wrapper -->

    <!-- Scripts -->
    <script src="<?= site_assets_url('js/jquery.min.js') ?>"></script>
    <script src="<?= site_assets_url('js/jquery.scrollex.min.js') ?>"></script>
    <script src="<?= site_assets_url('js/browser.min.js') ?>"></script>
    <script src="<?= site_assets_url('js/breakpoints.min.js') ?>"></script>
    <script src="<?= site_assets_url('js/util.js') ?>"></script>
    <script src="<?= site_assets_url('js/main.js') ?>"></script>

    <!-- Interactive Tabs & Smooth Hash Scroll -->
    <script>
    function showSolidTab(tabId, btn) {
        // Remove active class from all panes
        var panes = document.querySelectorAll('.solid-tab-pane');
        panes.forEach(function(pane) {
            pane.classList.remove('active');
        });
        
        // Remove active class from all buttons
        var buttons = document.querySelectorAll('.solid-tabs button');
        buttons.forEach(function(b) {
            b.classList.remove('active');
        });
        
        // Activate target pane and button
        var targetPane = document.getElementById(tabId);
        if (targetPane) {
            targetPane.classList.add('active');
        }
        if (btn) {
            btn.classList.add('active');
        }
    }

    function switchSolidTabDirect(tabId) {
        var buttons = document.querySelectorAll('.solid-tabs button');
        if (tabId === 'tab-privacy' && buttons[0]) showSolidTab('tab-privacy', buttons[0]);
        if (tabId === 'tab-terms' && buttons[1]) showSolidTab('tab-terms', buttons[1]);
        if (tabId === 'tab-agreement' && buttons[2]) showSolidTab('tab-agreement', buttons[2]);
    }

    // Auto-close menu when clicking links
    $(function() {
        $('#menu .links a').on('click', function() {
            $('body').removeClass('is-menu-visible');
        });
    });
    </script>

</body>
</html>