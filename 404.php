<?php
// 404.php – Phillip Clark
// Custom not-found page with dark background and consistent styling
$pageTitle = 'Page Not Found – Phillip Clark';
$pageDesc  = 'The page you requested could not be found.';
include 'header.php';
?>

<div class="container text-center py-5">
  <h1 class="display-4 text-warning">404</h1>
  <p class="fs-5 mb-4">Looks like this page doesn’t exist.</p>
  <a href="index.php" class="btn btn-light">Back to Home</a>
</div>

<?php include 'footer.php'; ?>
