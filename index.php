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
  // Fallback so the page still renders if data file is missing
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

// Guard: ensure array
if (!is_array($projects)) { $projects = []; }

// Sort: live first, then offline; within each group newest → oldest by (year, month)
usort($projects, function ($a, $b) {
  $aOff = !empty($a['offline']);
  $bOff = !empty($b['offline']);
  if ($aOff !== $bOff) return $aOff ? 1 : -1;

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
      $imgRel  = $p['img'] ?? '';
      $imgPath = $imgRel ? (__DIR__ . '/' . $imgRel) : '';
      if (!$imgRel || !file_exists($imgPath)) continue;

      $title    = $p['title']  ?? 'Untitled';
      $alt      = $p['alt']    ?? $title;
      $url      = $p['url']    ?? '#';
      $desc     = $p['desc']   ?? '';
      $button   = $p['button'] ?? (!empty($p['offline']) ? 'Unavailable' : 'View');
      $external = !empty($p['external']);
      $offline  = !empty($p['offline']);
      $archUrl  = $p['archived_url'] ?? null;

      $target = $external ? '_blank' : '_self';
      $rel    = $external ? 'noopener' : '';
    ?>
    <div class="col mt-5 p-1 shadow" style="width:18rem; text-align:center;">
      <div class="card bg-dark text-white darkRepeatBackground <?= $offline ? 'card--offline' : '' ?>">
        <div class="card-media-wrap">
          <?php if ($offline): ?>
            <span class="badge-offline" aria-label="This project is offline">Offline</span>
            <img
              src="<?= htmlspecialchars($imgRel) ?>"
              class="card-img-top"
              alt="<?= htmlspecialchars($alt) ?>"
              loading="lazy">
          <?php else: ?>
            <a href="<?= htmlspecialchars($url) ?>" target="<?= $target ?>" rel="<?= $rel ?>">
              <img
                src="<?= htmlspecialchars($imgRel) ?>"
                class="card-img-top"
                alt="<?= htmlspecialchars($alt) ?>"
                loading="lazy">
            </a>
          <?php endif; ?>
        </div>

        <div class="card-body" style="display:flex;flex-direction:column;">
          <h4 class="card-title"><?= htmlspecialchars($title) ?></h4>
          <h5>Tech &amp; Skills Used:</h5>
          <p class="card-text"><?= htmlspecialchars($desc) ?></p>

          <?php if ($offline): ?>
            <span class="btn btn-light disabled" aria-disabled="true" title="This project is currently offline">
              <?= htmlspecialchars($button) ?>
            </span>
            <?php if (!empty($archUrl)): ?>
              <div class="mt-2 small">
                <a href="<?= htmlspecialchars($archUrl) ?>" target="_blank" rel="noopener" class="link-light">
                  View Archive
                </a>
              </div>
            <?php else: ?>
              <div class="mt-2 small text-muted">Temporarily offline</div>
            <?php endif; ?>
          <?php else: ?>
            <a href="<?= htmlspecialchars($url) ?>"
               class="btn btn-light"
               target="<?= $target ?>" rel="<?= $rel ?>">
              <?= htmlspecialchars($button) ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>

<?php include 'footer.php'; ?>
