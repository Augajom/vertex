        <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <div class="logo">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="VERTEX CAPITAL" style="max-height: 80px; filter: brightness(0) invert(1); margin-bottom: 20px;">
                </div>
                <h2><?= $this->lang->line('home_hero_title'); ?></h2>
                <p style="font-size: 1.25em; font-weight: 600; color: #8ab4f8; margin-bottom: 1em; letter-spacing: 0.05em;"><?= $this->lang->line('home_hero_subtitle'); ?></p>
                <p style="margin-bottom: 0.8em;"><?= $this->lang->line('home_hero_desc1'); ?></p>
                <p style="margin-bottom: 1.2em;"><?= $this->lang->line('home_hero_desc2'); ?></p>
                <p style="color: #c4b5fd; font-weight: 600; margin-bottom: 2em;"><?= $this->lang->line('home_license_note'); ?></p>
                
                <ul class="actions special">
                    <li><a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="button special icon solid fa-certificate"><?= $this->lang->line('btn_check_license_long'); ?></a></li>
                    <li><a href="<?= $this->lang->line('app_download_url'); ?>" class="button icon brands fa-google-play"><?= $this->lang->line('btn_google_play'); ?></a></li>
                </ul>
            </div>
        </section>

        <!-- Wrapper -->
        <section id="wrapper">

            <!-- One: เกี่ยวกับเรา (Spotlight Style 1) -->
            <section id="about" class="wrapper spotlight style1">
                <div class="inner">
                    <a href="#" class="image"><img src="<?= base_url('assets/images/pic01.png') ?>" alt="VERTEX CAPITAL" /></a>
                    <div class="content">
                        <h2 class="major"><?= $this->lang->line('about_title'); ?></h2>
                        <h3 style="color: #ffffff; margin-bottom: 0.25em;"><?= $this->lang->line('company_intro_title'); ?></h3>
                        <p style="color: #c4b5fd; font-weight: 600; margin-bottom: 1em;"><?= $this->lang->line('company_intro_tagline'); ?></p>
                        <p><?= $this->lang->line('company_intro_p1'); ?></p>
                        <p><?= $this->lang->line('company_intro_p2'); ?></p>
                        
                        <h4 style="color: #ffffff; margin-top: 1.5em; margin-bottom: 0.5em;"><?= $this->lang->line('about_belief_head'); ?></h4>
                        <p style="font-style: italic; color: #cbd5e1;">"<?= $this->lang->line('about_belief_text'); ?>"</p>
                        
                        <h4 style="color: #ffffff; margin-top: 1.5em; margin-bottom: 0.5em;"><?= $this->lang->line('about_vision_title'); ?></h4>
                        <p><?= $this->lang->line('about_vision_text'); ?></p>
                        
                        <a href="#services" class="special"><?= $this->lang->line('nav_services'); ?></a>
                    </div>
                </div>
            </section>

            <!-- Two: พันธกิจ & จุดเด่น (Spotlight Style 2 Alt) -->
            <section id="mission" class="wrapper alt spotlight style2">
                <div class="inner">
                    <a href="#" class="image"><img src="<?= base_url('assets/images/pic02.jpg') ?>" alt="Mission & Core Values" /></a>
                    <div class="content">
                        <h2 class="major"><?= $this->lang->line('about_mission_title'); ?></h2>
                        <p><strong><?= $this->lang->line('about_mission_1_title'); ?></strong><br><?= $this->lang->line('about_mission_1_desc'); ?></p>
                        <p><strong><?= $this->lang->line('about_mission_2_title'); ?></strong><br><?= $this->lang->line('about_mission_2_desc'); ?></p>
                        <p><strong><?= $this->lang->line('about_mission_3_title'); ?></strong><br><?= $this->lang->line('about_mission_3_desc'); ?></p>
                        <p><strong><?= $this->lang->line('about_mission_4_title'); ?></strong><br><?= $this->lang->line('about_mission_4_desc'); ?></p>
                        
                        <hr style="border-color: rgba(255,255,255,0.15); margin: 2em 0;">
                        
                        <h3 style="color: #ffffff; margin-bottom: 0.25em;"><?= $this->lang->line('core_values_head1'); ?></h3>
                        <p style="color: #8ab4f8; font-weight: 600; margin-bottom: 1.2em;"><?= $this->lang->line('core_values_head2'); ?></p>
                        
                        <p><strong><?= $this->lang->line('val_easy_apply_title'); ?></strong>: <?= $this->lang->line('val_easy_apply_desc'); ?></p>
                        <p><strong><?= $this->lang->line('val_accessible_title'); ?></strong>: <?= $this->lang->line('val_accessible_desc'); ?></p>
                        <p><strong><?= $this->lang->line('val_transparent_title'); ?></strong>: <?= $this->lang->line('val_transparent_desc'); ?></p>
                        <p><strong><?= $this->lang->line('val_responsible_title'); ?></strong>: <?= $this->lang->line('val_responsible_desc'); ?></p>
                    </div>
                </div>
            </section>

            <!-- Three: ผลิตภัณฑ์ของเรา (Spotlight Style 3) -->
            <section id="services" class="wrapper spotlight style3">
                <div class="inner">
                    <a href="#" class="image"><img src="<?= base_url('assets/images/pic03.jpg') ?>" alt="Services" /></a>
                    <div class="content">
                        <h2 class="major"><?= $this->lang->line('services_title'); ?></h2>
                        <h3 style="color: #ffffff; margin-bottom: 0.25em;"><?= $this->lang->line('services_prod_name'); ?></h3>
                        <p style="color: #c4b5fd; font-weight: 600; margin-bottom: 1em;"><?= $this->lang->line('services_prod_sub'); ?></p>
                        <p><?= $this->lang->line('services_prod_desc'); ?></p>
                        
                        <h4 style="color: #ffffff; margin-top: 1.5em; margin-bottom: 1em;"><?= $this->lang->line('loan_features_title'); ?></h4>
                        
                        <div class="box" style="background: #112344; border: 1px solid rgba(102, 68, 236, 0.4); padding: 1.5em; margin-bottom: 1.5em;">
                            <p style="margin-bottom: 1em;">
                                <strong>- <?= $this->lang->line('feat_limit_title'); ?></strong><br>
                                <span style="color: #8ab4f8; font-size: 1.15em; font-weight: 700;"><?= $this->lang->line('feat_limit_val'); ?></span><br>
                                <?= $this->lang->line('feat_limit_desc'); ?>
                            </p>
                            <p style="margin-bottom: 1em;">
                                <strong>- <?= $this->lang->line('feat_rate_title'); ?></strong><br>
                                <span style="color: #8ab4f8; font-size: 1.15em; font-weight: 700;"><?= $this->lang->line('feat_rate_val'); ?></span><br>
                                <?= $this->lang->line('feat_rate_desc'); ?>
                            </p>
                            <p style="margin-bottom: 1em;">
                                <strong>- <?= $this->lang->line('feat_term_title'); ?></strong><br>
                                <span style="color: #8ab4f8; font-size: 1.15em; font-weight: 700;"><?= $this->lang->line('feat_term_val'); ?></span><br>
                                <?= $this->lang->line('feat_term_desc'); ?>
                            </p>
                            <p style="margin-bottom: 0;">
                                <strong>- <?= $this->lang->line('feat_trans_title'); ?></strong><br>
                                <?= $this->lang->line('feat_trans_desc'); ?>
                            </p>
                        </div>
                        
                        <a href="#apply" class="special"><?= $this->lang->line('nav_apply'); ?></a>
                    </div>
                </div>
            </section>

            <!-- Four: ขั้นตอนการสมัคร & เอกสาร (Features Grid Style 1 Alt) -->
            <section id="apply" class="wrapper alt style1">
                <div class="inner">
                    <h2 class="major"><?= $this->lang->line('apply_title'); ?></h2>
                    <h3 style="color: #ffffff; margin-bottom: 0.25em;"><?= $this->lang->line('apply_subtitle_1'); ?></h3>
                    <p style="color: #8ab4f8; font-weight: 600; margin-bottom: 2em;"><?= $this->lang->line('apply_subtitle_2'); ?></p>
                    
                    <section class="features">
                        <!-- Step 01 -->
                        <article>
                            <a href="#" class="image"><img src="<?= base_url('assets/images/pic04.jpg') ?>" alt="STEP 01" /></a>
                            <span class="step-counter"><?= $this->lang->line('step_1_num'); ?></span>
                            <h3 class="major"><?= $this->lang->line('step_1_title'); ?></h3>
                            <p><?= $this->lang->line('step_1_desc'); ?></p>
                        </article>
                        
                        <!-- Step 02 -->
                        <article>
                            <a href="#" class="image"><img src="<?= base_url('assets/images/pic05.jpg') ?>" alt="STEP 02" /></a>
                            <span class="step-counter"><?= $this->lang->line('step_2_num'); ?></span>
                            <h3 class="major"><?= $this->lang->line('step_2_title'); ?></h3>
                            <p><?= $this->lang->line('step_2_desc'); ?></p>
                        </article>
                        
                        <!-- Step 03 -->
                        <article>
                            <a href="#" class="image"><img src="<?= base_url('assets/images/pic06.jpg') ?>" alt="STEP 03" /></a>
                            <span class="step-counter"><?= $this->lang->line('step_3_num'); ?></span>
                            <h3 class="major"><?= $this->lang->line('step_3_title'); ?></h3>
                            <p><?= $this->lang->line('step_3_desc'); ?></p>
                        </article>
                        
                        <!-- Step 04 -->
                        <article>
                            <a href="#" class="image"><img src="<?= base_url('assets/images/pic07.jpg') ?>" alt="STEP 04" /></a>
                            <span class="step-counter"><?= $this->lang->line('step_4_num'); ?></span>
                            <h3 class="major"><?= $this->lang->line('step_4_title'); ?></h3>
                            <p><?= $this->lang->line('step_4_desc'); ?></p>
                        </article>
                        
                        <!-- Step 05 -->
                        <article>
                            <a href="#" class="image"><img src="<?= base_url('assets/images/pic08.jpg') ?>" alt="STEP 05" /></a>
                            <span class="step-counter"><?= $this->lang->line('step_5_num'); ?></span>
                            <h3 class="major"><?= $this->lang->line('step_5_title'); ?></h3>
                            <p><?= $this->lang->line('step_5_desc'); ?></p>
                        </article>
                        
                        <!-- Step 06 -->
                        <article>
                            <a href="#" class="image"><img src="<?= base_url('assets/images/pic09.jpg') ?>" alt="STEP 06" /></a>
                            <span class="step-counter"><?= $this->lang->line('step_6_num'); ?></span>
                            <h3 class="major"><?= $this->lang->line('step_6_title'); ?></h3>
                            <p><?= $this->lang->line('step_6_desc'); ?></p>
                        </article>
                        
                        <!-- Step 07 (Final Completion Step) -->
                        <article class="step-final-card">
                            <div class="step-final-inner">
                                <div class="step-final-img">
                                    <a href="#" class="image"><img src="<?= base_url('assets/images/pic10.jpg') ?>" alt="STEP 07" /></a>
                                </div>
                                <div class="step-final-content">
                                    <span class="step-counter" style="background: linear-gradient(135deg, #6644ec, #2f5eeb);"><?= $this->lang->line('step_7_num'); ?></span>
                                    <h3 class="major" style="margin-bottom: 0.4em;"><?= $this->lang->line('step_7_title'); ?></h3>
                                    <p style="margin-bottom: 0.8em;"><?= $this->lang->line('step_7_desc'); ?></p>
                                    <div style="font-size: 0.88em; color: #8ab4f8; display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check-circle" style="color: #38bdf8; font-size: 1.1em;"></i>
                                        <span><?= $this->lang->line('step_7_tip'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>

                    <ul class="actions" style="margin-top: 2.5em; text-align: center; justify-content: center;">
                        <li><a href="<?= $this->lang->line('app_download_url'); ?>" class="button primary icon solid fa-download"><?= $this->lang->line('apply_cta_btn'); ?></a></li>
                    </ul>

                    <!-- Eligibility & Requirements Boxes -->
                    <div class="row" style="margin-top: 3em;">
                        
                        <!-- Box 1: คุณสมบัติเบื้องต้น -->
                        <div class="col-6 col-12-medium">
                            <div class="box" style="background: #112344; border: 1px solid rgba(102, 68, 236, 0.35); height: 100%;">
                                <h3 class="major" style="margin-bottom: 1em;"><?= $this->lang->line('eligibility_title'); ?></h3>
                                <ul style="margin-bottom: 1.5em;">
                                    <?php foreach($this->lang->line('eligibility_items') as $item): ?>
                                        <li><?= ltrim($item, '- '); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <p style="font-size: 0.85em; color: #cbd5e1; margin-bottom: 0; font-style: italic;">
                                    * <?= $this->lang->line('eligibility_note'); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Box 2: เอกสารประกอบการสมัคร -->
                        <div class="col-6 col-12-medium">
                            <div class="box" style="background: #112344; border: 1px solid rgba(102, 68, 236, 0.35); height: 100%;">
                                <h3 class="major" style="margin-bottom: 0.5em;"><?= $this->lang->line('docs_title'); ?></h3>
                                <p style="color: #8ab4f8; font-size: 0.9em; font-weight: 600; margin-bottom: 1em;"><?= $this->lang->line('docs_sub1'); ?><br><?= $this->lang->line('docs_sub2'); ?></p>
                                
                                <h4 style="color: #ffffff; margin-bottom: 0.5em;"><?= $this->lang->line('docs_main_head'); ?></h4>
                                <ul style="margin-bottom: 1.2em;">
                                    <li><?= $this->lang->line('docs_main_1'); ?></li>
                                    <li style="color: #cbd5e1; font-size: 0.85em;"><?= $this->lang->line('docs_main_2'); ?></li>
                                </ul>
                                
                                <h4 style="color: #ffffff; margin-bottom: 0.5em;"><?= $this->lang->line('docs_consider_head'); ?></h4>
                                <ul style="margin-bottom: 1.2em;">
                                    <?php foreach($this->lang->line('docs_consider_items') as $doc_item): ?>
                                        <li><?= $doc_item; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                
                                <p style="font-size: 0.85em; color: #cbd5e1; margin-bottom: 0; font-style: italic;">
                                    <?= $this->lang->line('docs_note'); ?>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Five: การกำกับดูแล & นโยบาย (Style 2) -->
            <section id="policy" class="wrapper style2">
                <div class="inner">
                    <h2 class="major"><?= $this->lang->line('gov_title'); ?></h2>
                    <h3 style="color: #ffffff; margin-bottom: 1em;"><?= $this->lang->line('gov_subtitle'); ?></h3>
                    <p><?= $this->lang->line('gov_p1'); ?></p>
                    <p><?= $this->lang->line('gov_p2'); ?></p>

                    <!-- License Table -->
                    <div class="table-wrapper" style="margin-top: 2em; margin-bottom: 3em;">
                        <h3 class="major" style="margin-bottom: 1em;"><?= $this->lang->line('license_info_title'); ?></h3>
                        <table class="alt">
                            <tbody>
                                <tr>
                                    <td style="font-weight: 700; width: 35%;"><?= $this->lang->line('license_type_label'); ?></td>
                                    <td><?= $this->lang->line('license_type_val'); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 700;"><?= $this->lang->line('license_no_label'); ?></td>
                                    <td><?= $this->lang->line('license_no_val'); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 700;"><?= $this->lang->line('license_date_label'); ?></td>
                                    <td><?= $this->lang->line('license_date_val'); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 700;"><?= $this->lang->line('license_auth_label'); ?></td>
                                    <td><?= $this->lang->line('license_auth_val'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="margin-top: 1em;">
                            <?= $this->lang->line('license_check_text'); ?>
                        </p>
                        <ul class="actions">
                            <li><a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="button special icon solid fa-certificate" style="background: linear-gradient(135deg, #7c3aed 0%, #9333ea 100%); border: 1px solid #c084fc; font-weight: 700; box-shadow: 0 4px 18px rgba(147, 51, 234, 0.45); color: #ffffff;"><?= $this->lang->line('btn_check_license'); ?></a></li>
                        </ul>
                    </div>

                    <!-- Legal Document Reader Tabs -->
                    <h3 class="major" style="margin-top: 3em; margin-bottom: 1em;"><?= $this->lang->line('legal_docs_title'); ?></h3>
                    
                    <ul class="solid-tabs">
                        <li><button type="button" class="active" onclick="showSolidTab('tab-privacy', this)"><i class="fas fa-user-shield"></i> <?= $this->lang->line('tab_privacy_title'); ?></button></li>
                        <li><button type="button" onclick="showSolidTab('tab-terms', this)"><i class="fas fa-file-contract"></i> <?= $this->lang->line('tab_terms_title'); ?></button></li>
                        <li><button type="button" onclick="showSolidTab('tab-agreement', this)"><i class="fas fa-file-signature"></i> <?= $this->lang->line('tab_agreement_title'); ?></button></li>
                    </ul>

                    <div class="legal-scroll-box">
                        
                        <!-- Tab 1: Privacy Policy -->
                        <div id="tab-privacy" class="solid-tab-pane active">
                            <?php $this->load->view('legal/tab_privacy'); ?>
                        </div>

                        <!-- Tab 2: Terms of Service -->
                        <div id="tab-terms" class="solid-tab-pane">
                            <?php $this->load->view('legal/tab_terms'); ?>
                        </div>

                        <!-- Tab 3: Loan Agreement -->
                        <div id="tab-agreement" class="solid-tab-pane">
                            <?php $this->load->view('legal/tab_agreement'); ?>
                        </div>

                    </div>

                </div>
            </section>

        </section>