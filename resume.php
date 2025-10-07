<?php
// Resume.php – Phillip Clark
// Displays embedded PDF resume

$pageTitle = 'Resume – Phillip Clark';
$pageDesc  = 'Work history, skills, and tools: WordPress, performance/SEO, and client services.';
$ogImage   = '/assets/og-resume.jpg';
include 'header.php';
?>

<!-- Page Content -->
<div class="d-flex flex-row mt-5" style="justify-content: space-around; align-content: center;">
  <object data="images/Resume.pdf" type="application/pdf" width="600px" height="800px">
    <p>
      It appears you don't have a PDF plugin for this browser.<br>
      You can <a href="images/Resume.pdf" target="_blank" rel="noopener">click here to download the PDF file.</a>
    </p>
  </object>
</div>

<?php include 'footer.php'; ?>
