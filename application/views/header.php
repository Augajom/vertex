<?php
$current_lang = $this->session->userdata('site_lang');
if (empty($current_lang)) {
    $current_lang = 'thai';
}
$is_th = ($current_lang == 'thai' || $current_lang == 'th');
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="<?= $is_th ? 'th' : 'en'; ?>">
<head>
    <title><?= $this->lang->line('site_meta_title'); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="<?= $this->lang->line('site_meta_desc'); ?>" />
    <link rel="stylesheet" href="<?= site_assets_url('css/main.css') ?>" />
    <noscript><link rel="stylesheet" href="<?= site_assets_url('css/noscript.css') ?>" /></noscript>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>" />
</head>
<body class="is-preload">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="#banner"><img src="<?= base_url('assets/images/logo2.png') ?>" alt="<?= $this->lang->line('site_brand_name'); ?>" style="height: 28px; filter: brightness(0) invert(1); margin-right: 8px;"> <?= $this->lang->line('site_brand_name'); ?></a></h1>
            <nav>
                <div class="lang-switcher">
                    <a href="<?= site_root_url('lang/switch/th'); ?>" class="lang-btn <?= $is_th ? 'active' : ''; ?>" title="ภาษาไทย">TH</a>
                    <span class="lang-divider">|</span>
                    <a href="<?= site_root_url('lang/switch/en'); ?>" class="lang-btn <?= !$is_th ? 'active' : ''; ?>" title="English">EN</a>
                </div>
                <a href="#menu"><?= $this->lang->line('nav_menu'); ?></a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <div class="inner">
                <h2><?= $this->lang->line('nav_menu'); ?></h2>
                <ul class="links">
                    <li><a href="#banner"><?= $this->lang->line('nav_home'); ?></a></li>
                    <li><a href="#about"><?= $this->lang->line('nav_about'); ?></a></li>
                    <li><a href="#services"><?= $this->lang->line('nav_services'); ?></a></li>
                    <li><a href="#apply"><?= $this->lang->line('nav_apply'); ?></a></li>
                    <li><a href="#policy"><?= $this->lang->line('nav_policy'); ?></a></li>
                    <li><a href="#contact"><?= $this->lang->line('nav_contact'); ?></a></li>
                </ul>

                <a href="#" class="close"><?= $this->lang->line('nav_close'); ?></a>
            </div>
        </nav>