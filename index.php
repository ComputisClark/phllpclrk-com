<?php
// =============================================================
// index.php — Phillip Clark
// Dynamic portfolio homepage
// =============================================================

// TEMP: show PHP errors while testing (remove once stable)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Meta setup
$pageTitle = 'Home – Phillip Clark';
$pageDesc  = 'Selected web projects, case studies, and recent experiments.';
$ogImage   = '/assets/og-home.jpg';

// Header include
include 'header.php';

// =============================================================
// Load project data from /data/projects.php
// =============================================================
$projects = [];
$projectsPath = __DIR__ . '/data/projects.php';

if (is_file($projectsPath)) {
  include $projectsPath; // defines $projects array
} else {
  // Fallback so the page still renders
  $projects = [[
    'title'    => 'Placeholder Project',
    'img'      => 'images/Computis.png',
    'alt'      => 'Placeholder',
    'url'      => '#',
    'desc'     => 'Upload /data/projects.php to enable portfolio grid.',
    'button'   => 'OK',
    'external' => false,
    'year'     => 2099,
    'month'    => 1,
  ]];
}

// Ensure valid array
if (!is_array($projects)) $projects = [];

// Sort projects newest → oldest by year + month
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

<!-- =============================================================
     Hero / Intro Section
     ============================================================= -->
<header class="py-5">
  <div class="container px-lg-5">
    <div class="p-4 p-lg-5 bg-light rounded-3 text-center bg-dark text-white darkRepeatBackground">
      <div class="m-4 m-lg-5">
        <h1 class="display-5 fw-bold">A bit about me!</h1>
        <p class="fs-4">
          I’m a self-learner who’s been immersed in tech since the 5.25” floppy days.
          I now focus on web development, graphic design, and hardware/software repair.
        </p>
        <a class="btn btn-light btn-lg" href="resume.php" target="_blank" rel="noopener">
          View My Resume
        </a>
      </div>
    </div>
  </div>
</header>

<!-- =============================================================
     Portfolio Grid
     ============================================================= -->
<h1 class="text-center">Portfolio</h1>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 m-5 p-1"
     style="justify-content:space-around; align-content:center;">

  <?php foreach ($projects as $p): ?>
    <?php
      // Skip if image file is missing
      $imgPath = __DIR__ . '/' . $p['img'];
      if (!file_exists($imgPath)) continue;
    ?>
    <div class="col mt-5 p-1 shadow" style="width:18rem; text-align:center;">
      <div class="card bg-dark text-white darkRepeatBackground">
        <a href="<?= htmlspecialchars($p['url']) ?>"
           target="<?= !empty($p['external']) ? '_blank' : '_self' ?>"
           rel="<?= !empty($p['external']) ? 'noopener' : '' ?>">
          <img src="<?= htmlspecialchars($p['img']) ?>"
               class="card-img-top"
               alt="<?= htmlspecialchars($p['alt']) ?>"
               loading="lazy">
        </a>
        <div class="card-body">
          <h4 class="card-title"><?= htmlspecialchars($p['title']) ?></h4>
          <h5>Tech &amp; Skills Used:</h5>
          <p class="card-text"><?= htmlspecialchars($p['desc']) ?></p>
          <a href="<?= htmlspecialchars($p['url']) ?>"
             class="btn btn-light"
             target="<?= !empty($p['external']) ? '_blank' : '_self' ?>"
             rel="<?= !empty($p['external']) ? 'noopener' : '' ?>">
            <?= htmlspecialchars($p['button']) ?>
          </a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>

<?php include 'footer.php'; ?>
