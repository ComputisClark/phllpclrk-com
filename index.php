<?php
// ================================================
// index.php — Phillip Clark
// Portfolio homepage (data-driven)
// Notes to self: keep copy neutral/evergreen
// ================================================

// Page meta
$pageTitle = 'Home – Phillip Clark';
$pageDesc  = 'Selected web projects, case studies, and recent experiments.';
$ogImage   = '/assets/og-home.jpg';

// Shared header
include 'header.php';

// Load projects from /data/projects.php (defines $projects)
$projects = [];
$projectsPath = __DIR__ . '/data/projects.php';
if (is_file($projectsPath)) {
  include $projectsPath;
} else {
  // Safe fallback so page still renders if data file is missing
  $projects = [[
    'title'    => 'Placeholder Project',
    'img'      => 'images/Computis.png',
    'alt'      => 'Placeholder',
    'url'      => '#',
    'desc'     => 'Add /data/projects.php to enable the portfolio grid.',
    'button'   => 'OK',
    'external' => false,
    'year'     => 2099,
    'month'    => 1,
  ]];
}

// Guard: make sure we have an array
if (!is_array($projects)) { $projects = []; }

// Sort newest → oldest by (year, month)
usort($projects, function ($a, $b) {
  $ay = $a['year']  ?? null;
  $by = $b['year']  ?? null;
  $am = $a['month'] ?? 0;
  $bm = $b['month'] ?? 0;

  if ($ay === $by) return $bm <=> $am;
  if ($ay === null) return 1;
  if ($by === null) return -1;
  return $by <=> $ay;
});
?>

<!-- Hero -->
<header class="py-5">
  <div class="container px-lg-5">
    <div class="p-4 p-lg-5 bg-light rounded-3 text-center bg-dark text-white darkRepeatBackground">
      <div class="m-4 m-lg-5">
        <h1 class="display-5 fw-bold">The work I do</h1>
        <p class="fs-4">
          I build fast, usable websites with clean code and clear design.  
          My work spans WordPress development, performance and SEO, and client support,  
          with a focus on practical results and long-term maintainability.
        </p>
        <a class="btn btn-light btn-lg" href="resume.php" rel="noopener">
          About &amp; Experience
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Portfolio -->
<h1 class="text-center">Portfolio</h1>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 m-5 p-1"
     style="justify-content:space-around; align-content:center;">

  <?php foreach ($projects as $p): ?>
    <?php
      // Skip if thumbnail missing (keeps grid clean)
      $imgPath = __DIR__ . '/' . ($p['img'] ?? '');
      if (!is_string($p['img'] ?? null) || !file_exists($imgPath)) { continue; }

      // Link target/rel for external vs internal
      $isExternal = !empty($p['external']);
      $target     = $isExternal ? '_blank' : '_self';
      $rel        = $isExternal ? 'noopener' : '';
    ?>
    <div class="col mt-5 p-1 shadow" style="width:18rem; text-align:center;">
      <div class="card bg-dark text-white darkRepeatBackground">
        <a href="<?= htmlspecialchars($p['url'] ?? '#') ?>"
           target="<?= $target ?>" rel="<?= $rel ?>">
          <img
            src="<?= htmlspecialchars($p['img']) ?>"
            class="card-img-top"
            alt="<?= htmlspecialchars($p['alt'] ?? $p['title'] ?? 'Project') ?>"
            loading="lazy">
        </a>
        <div class="card-body">
          <h4 class="card-title"><?= htmlspecialchars($p['title'] ?? 'Untitled') ?></h4>
          <h5>Tech &amp; Skills Used:</h5>
          <p class="card-text"><?= htmlspecialchars($p['desc'] ?? '') ?></p>
          <a href="<?= htmlspecialchars($p['url'] ?? '#') ?>"
             class="btn btn-light"
             target="<?= $target ?>" rel="<?= $rel ?>">
            <?= htmlspecialchars($p['button'] ?? 'View') ?>
          </a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>

<?php include 'footer.php'; ?>
