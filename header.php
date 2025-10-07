<?php
// ========================================
// header.php – Rebuilt by Phillip Clark
// Modernized for SEO, accessibility, and long-term maintainability
// Adds dynamic titles/descriptions, canonical URLs, OG/Twitter tags,
// JSON-LD schema, GA4 tracking, and sticky navigation
// ========================================

// Per-page overrides (set BEFORE including this file)
// Example:
// $pageTitle = 'Home – Phillip Clark';
// $pageDesc  = 'Selected web projects, case studies, and recent experiments.';
// $ogImage   = '/assets/og-home.jpg';
// $baseUrl   = 'https://phllpclrk.com';

// Default fallbacks
$pageTitle = $pageTitle ?? 'Phillip Clark – Web Developer & Designer';
$pageDesc  = $pageDesc  ?? 'WordPress development, performance/SEO, and client services support. Portfolio, case studies, and contact info.';
$ogImage   = $ogImage   ?? '/assets/og-image.jpg';

// Detect base URL if not manually set
if (!isset($baseUrl)) {
  $scheme  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host    = $_SERVER['HTTP_HOST'] ?? 'phllpclrk.com';
  $baseUrl = $scheme . '://' . $host;
}

// Canonical URL
$reqUri    = $_SERVER['REQUEST_URI'] ?? '/';
$canonical = rtrim($baseUrl, '/') . $reqUri;

// Helper for active nav links
$current = strtolower(basename($_SERVER['SCRIPT_NAME'] ?? 'index.php'));
function is_active($file) {
  global $current;
  return $current === strtolower($file) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>" />
  <meta name="referrer" content="strict-origin-when-cross-origin">

  <!-- Canonical -->
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />

  <!-- Favicons / PWA -->
  <link rel="icon" href="/assets/favicon.ico" sizes="any">
  <link rel="icon" href="/assets/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/assets/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Browser UI color -->
  <meta name="theme-color" content="#111111">

  <!-- Open Graph / Twitter -->
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Google Analytics 4 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5XK388WH6T"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-5XK388WH6T', { anonymize_ip: true });
  </script>

  <!-- Bootstrap Icons -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Core CSS -->
  <link href="/css/styles.css" rel="stylesheet">
  <link href="/css/main.css" rel="stylesheet">
</head>
<body>

  <!-- Main Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark darkRepeatBackground sticky-top">
    <div class="container px-lg-5">
      <a class="navbar-brand" href="/index.php">Phillip Clark</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
              aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <?php $isHome = is_active('index.php'); ?>
            <a class="nav-link <?= $isHome ?>" <?= $isHome ? 'aria-current="page"' : '' ?> href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <?php $isResume = is_active('resume.php'); ?>
            <a class="nav-link <?= $isResume ?>" <?= $isResume ? 'aria-current="page"' : '' ?> href="/resume.php">Resume</a>
          </li>
          <li class="nav-item">
            <?php $isContact = is_active('contact.php'); ?>
            <a class="nav-link <?= $isContact ?>" <?= $isContact ? 'aria-current="page"' : '' ?> href="/contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Main Navbar -->

  <!-- JSON-LD schema for SEO and search visibility -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Phillip Clark",
    "jobTitle": "Web Developer & Designer",
    "url": "<?= htmlspecialchars(rtrim($baseUrl,'/')) ?>/",
    "image": "<?= htmlspecialchars(rtrim($baseUrl,'/')) ?>/assets/profile.jpg",
    "sameAs": [
      "https://github.com/ComputisClark"
    ],
    "knowsAbout": ["WordPress","SEO","Performance","Bootstrap","Analytics","Client Services"]
  }
  </script>
