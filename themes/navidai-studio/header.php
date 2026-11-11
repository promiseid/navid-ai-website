<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#080c18">
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.svg' ); ?>" type="image/svg+xml">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content">رفتن به محتوا</a>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="صفحه اصلی Navid AI">
      <span class="brand-mark" aria-hidden="true">N</span>
      <span class="brand-word">NAVID<span>AI</span></span>
    </a>
    <nav class="nav-links" data-menu aria-label="منوی اصلی">
      <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">خانه</a><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>">توانمندی‌ها</a><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">درباره ما</a><a href="<?php echo esc_url( home_url( '/#process' ) ); ?>">مسیر همکاری</a><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">ارتباط</a>
    </nav>
    <div class="nav-actions">
      <button class="icon-btn" type="button" data-theme-toggle aria-label="فعال‌سازی حالت روشن" aria-pressed="false" title="تغییر پوسته">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 15.2A8 8 0 0 1 8.8 4 8 8 0 1 0 20 15.2Z"/></svg>
      </button>
      <a class="btn btn-primary" href="https://github.com/promiseid" target="_blank" rel="noopener noreferrer">مشاهده پروژه‌ها <span aria-hidden="true">↗</span></a>
      <button type="button" class="icon-btn menu-toggle" data-menu-toggle aria-expanded="false" aria-label="باز کردن منو">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
      </button>
    </div>
  </div>
</header>
