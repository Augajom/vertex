<?php
$current_lang = $this->session->userdata('site_lang');
if (empty($current_lang)) {
    $current_lang = 'thai';
}
$is_th = ($current_lang == 'thai' || $current_lang == 'th');
$active_seg = $this->uri->segment(1);
?>
<!DOCTYPE html>
<html lang="<?= $is_th ? 'th' : 'en'; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('site_meta_title'); ?></title>
    <meta name="description" content="<?= $this->lang->line('site_meta_desc'); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png'); ?>">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6.4 Free CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Modern Cyber FinTech CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
<div class="main-wrapper">

<!-- Modern Floating Cyber Navbar (1 Row on Notebook & Desktop >= 992px) -->
<nav class="navbar navbar-expand-lg futuristic-nav" id="mainNavbar">
    <div class="container-fluid p-0">
        
        <!-- Brand Logo (Left) -->
        <a href="<?= site_root_url(); ?>" class="navbar-brand d-inline-flex align-items-center m-0 p-0 me-2 me-xl-3">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="<?= $this->lang->line('site_brand_name'); ?>" class="nav-brand-logo">
        </a>

        <!-- Mobile Toggle Button (Only on Mobile/Tablet < 992px) -->
        <button class="navbar-toggler border-0 shadow-none p-1 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fs-4 text-dark"></i>
        </button>

        <!-- Navigation Links & Actions (1 Row on >= 992px) -->
        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 flex-nowrap">
                <!-- Home -->
                <li class="nav-item">
                    <a href="<?= site_root_url(); ?>" class="nav-link-custom <?= ($active_seg == '' || $active_seg == 'home') ? 'active' : ''; ?>">
                        <i class="fas fa-house"></i> <?= $this->lang->line('nav_home'); ?>
                    </a>
                </li>
                <!-- About -->
                <li class="nav-item">
                    <a href="<?= site_root_url('about'); ?>" class="nav-link-custom <?= ($active_seg == 'about') ? 'active' : ''; ?>">
                        <i class="fas fa-building"></i> <?= $this->lang->line('nav_about'); ?>
                    </a>
                </li>
                <!-- Products & Services -->
                <li class="nav-item">
                    <a href="<?= site_root_url('services'); ?>" class="nav-link-custom <?= ($active_seg == 'services') ? 'active' : ''; ?>">
                        <i class="fas fa-hand-holding-dollar"></i> <?= $this->lang->line('nav_services'); ?>
                    </a>
                </li>
                                <!-- FAQ -->
                <li class="nav-item">
                    <a href="<?= site_root_url('faq'); ?>" class="nav-link-custom <?= ($active_seg == 'faq') ? 'active' : ''; ?>">
                        <i class="fas fa-circle-question"></i> <?= $this->lang->line('nav_faq'); ?>
                    </a>
                </li>
                <!-- Contact -->
                <li class="nav-item">
                    <a href="<?= site_root_url('contact'); ?>" class="nav-link-custom <?= ($active_seg == 'contact') ? 'active' : ''; ?>">
                        <i class="fas fa-headset"></i> <?= $this->lang->line('nav_contact'); ?>
                    </a>
                </li>
            </ul>

            <!-- Right Actions: Language Switcher + CTA Button -->
            <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0 flex-column flex-lg-row">
                <!-- Language Toggle Pill -->
                <div class="lang-toggle-pill">
                    <a href="<?= site_root_url('lang/switch/th'); ?>" class="<?= $is_th ? 'active' : ''; ?>" title="ภาษาไทย">TH</a>
                    <a href="<?= site_root_url('lang/switch/en'); ?>" class="<?= !$is_th ? 'active' : ''; ?>" title="English">EN</a>
                </div>
                <!-- CTA Button -->
                <a href="<?= site_root_url('services#apply'); ?>" class="btn-primary-3d">
                    <i class="fas fa-arrow-right-to-bracket"></i> <?= $this->lang->line('btn_apply_loan'); ?>
                </a>
            </div>
        </div>

    </div>
</nav>