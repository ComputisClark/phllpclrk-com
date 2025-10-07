<?php
// index.php – Phillip Clark

$pageTitle = 'Home – Phillip Clark';
$pageDesc  = 'Selected web projects, case studies, and recent experiments.';
$ogImage   = '/assets/og-home.jpg';
include 'header.php';
?>

<!-- Header -->
<header class="py-5">
  <div class="container px-lg-5">
    <div class="p-4 p-lg-5 bg-light rounded-3 text-center bg-dark text-white darkRepeatBackground">
      <div class="m-4 m-lg-5">
        <h1 class="display-5 fw-bold">A bit about me!</h1>
        <p class="fs-4">
          I’m a self-learner who’s been immersed in tech since the 5.25” floppy days.
          I now focus on web development, graphic design, and hardware/software repair.
        </p>
        <a class="btn btn-light btn-lg" href="resume.php" target="_blank" rel="noopener">View My Resume</a>
      </div>
    </div>
  </div>
</header>

<!-- Portfolio -->
<section aria-labelledby="portfolio-title">
  <div class="container">
    <h1 id="portfolio-title" class="text-center">Portfolio</h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 m-5 p-1 justify-content-around align-content-center">

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://www.computis.us/" target="_blank" rel="noopener" aria-label="Open Computis site in a new tab">
            <img src="images/Computis.png" class="card-img-top" alt="Computis website" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Computis</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built a custom WordPress site using Beaver Builder, Yoast SEO, and Wordfence for security and optimization.</p>
            <a href="https://www.computis.us/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Computis site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://www.lildustyonline.com/" target="_blank" rel="noopener" aria-label="Open Lil Dusty Auctions in a new tab">
            <img src="images/lilDusty4.png" class="card-img-top" alt="Lil Dusty Auctions site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Lil Dusty Auctions</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Migrated and debugged legacy SaaS, implemented a new solution, imported customer data, and set up Mailchimp.</p>
            <a href="https://www.lildustyonline.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Lil Dusty Auctions site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center%;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://madlantisrecords.com/" target="_blank" rel="noopener" aria-label="Open Madlantis Records in a new tab">
            <img src="images/MadlantisRecords.png" class="card-img-top" alt="Madlantis Records site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Madlantis Records</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built a WordPress site with custom PHP, integrated Bandcamp embeds, and optimized layout, SEO, and security setup.</p>
            <a href="https://madlantisrecords.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Madlantis Records site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://www.dkcapitalinc.com/" target="_blank" rel="noopener" aria-label="Open DK Capital in a new tab">
            <img src="images/DKCapital.png" class="card-img-top" alt="DK Capital site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">DK Capital</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Developed a WordPress site with theme customization and created branded web graphics for consistency.</p>
            <a href="https://www.dkcapitalinc.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View DK Capital site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://allestateservices.com/" target="_blank" rel="noopener" aria-label="Open All Estate Services in a new tab">
            <img src="images/AllEstateServices.png" class="card-img-top" alt="All Estate Services site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">All Estate Services</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built and launched WordPress site with Google Maps API, Ninja Forms, and a simple marketing plan.</p>
            <a href="https://allestateservices.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View All Estate Services site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://recordlabel.computis.us/" target="_blank" rel="noopener" aria-label="Open WooCommerce demo in a new tab">
            <img src="images/RecordARound.png" class="card-img-top" alt="WooCommerce demo" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">WooCommerce Demo</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Created an eCommerce demo using WooCommerce, theme edits, SSL, and Wordfence protection.</p>
            <a href="https://recordlabel.computis.us/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View WooCommerce demo site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://northernsludge.com/" target="_blank" rel="noopener" aria-label="Open Northern Sludge blog in a new tab">
            <img src="images/NorthernSludge.png" class="card-img-top" alt="Northern Sludge blog" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Northern Sludge</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built a WordPress blog with Yoast SEO, Wordfence, and customized theme layout for performance and readability.</p>
            <a href="https://northernsludge.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Northern Sludge blog">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://www.sunrisesocial.net/" target="_blank" rel="noopener" aria-label="Open Sunrise Social in a new tab">
            <img src="images/SunriseSocial.png" class="card-img-top" alt="Sunrise Social site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Sunrise Social</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Designed brand and logo, built WordPress site with Yoast SEO, Wordfence, and Limit Login Attempts.</p>
            <a href="https://www.sunrisesocial.net/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Sunrise Social site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://web.archive.org/web/20150302171231/http://eagleeyehomeimprovements.com/" target="_blank" rel="noopener" aria-label="Open Eagle Eye site (archived) in a new tab">
            <img src="images/EagleEyeHom Improvements.png" class="card-img-top" alt="Eagle Eye site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Eagle Eye</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built a static site, later migrated to WordPress, and designed print collateral and training materials.</p>
            <a href="https://web.archive.org/web/20150302171231/http://eagleeyehomeimprovements.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Eagle Eye site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://web.archive.org/web/20161002020107/http://hydro-phonicrecords.com/" target="_blank" rel="noopener" aria-label="Open Hydro-Phonic Records (archived) in a new tab">
            <img src="images/Hydro-PhonicRecords2.png" class="card-img-top" alt="Hydro-Phonic Records site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Hydro-Phonic Records</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built ZenCart eCommerce site with custom HTML front-end and full shipping module setup.</p>
            <a href="https://web.archive.org/web/20161002020107/http://hydro-phonicrecords.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Hydro-Phonic Records site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://disposal.computis.us/" target="_blank" rel="noopener" aria-label="Open Subscription Demo in a new tab">
            <img src="images/OscarsDisposal.png" class="card-img-top" alt="Subscription demo" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Subscription Demo</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built WordPress subscription demo with WooCommerce Subscriptions, Wordfence, and SSL.</p>
            <a href="https://disposal.computis.us/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Subscription Demo">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="http://www.salon.computis.us/" target="_blank" rel="noopener" aria-label="Open Small Business Demo in a new tab">
            <img src="images/CuteCornerCuts.png" class="card-img-top" alt="Small Business demo" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Small Business Demo</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Created small business WordPress demo with branded graphics, Wordfence, and SSL setup.</p>
            <a href="http://www.salon.computis.us/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Small Business Demo">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="https://web.archive.org/web/20161025094321/http://www.clarkscab.com/" target="_blank" rel="noopener" aria-label="Open Clark’s Cab (archived) in a new tab">
            <img src="images/ClarksCab.png" class="card-img-top" alt="Clark's Cab site" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Clark’s Cab</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Built WordPress site with custom theme work and managed Google Ads PPC campaigns.</p>
            <a href="https://web.archive.org/web/20161025094321/http://www.clarkscab.com/" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Clark’s Cab site">View Site</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="resume.php" target="_blank" rel="noopener" aria-label="Open resume for Physical Media samples in a new tab">
            <img src="images/PrintMedia.jpg" class="card-img-top" alt="Print Media samples" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Physical Media</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">CD templates, poster layouts, and screen-printing coordination for print and packaging runs.</p>
            <a href="resume.php" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Resume for Physical Media">View Resume</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="resume.php" target="_blank" rel="noopener" aria-label="Open resume for Video Production samples in a new tab">
            <img src="images/VideoMedia.jpg" class="card-img-top" alt="Video production" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Video Production</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Filming, directing, and editing projects using Avid, Vegas, and DaVinci Resolve suites.</p>
            <a href="resume.php" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Resume for Video Production">View Resume</a>
          </div>
        </div>
      </div>

      <div class="col mt-5 p-1 shadow" style="width:18rem;text-align:center;">
        <div class="card bg-dark text-white darkRepeatBackground">
          <a href="resume.php" target="_blank" rel="noopener" aria-label="Open resume for Web Graphics samples in a new tab">
            <img src="images/WebGraphics.jpg" class="card-img-top" alt="Web graphics" loading="lazy">
          </a>
          <div class="card-body">
            <h4 class="card-title">Web Graphics</h4>
            <h5>Tech &amp; Skills Used:</h5>
            <p class="card-text">Logo design, layout, and optimization for print and web using Photoshop &amp; Illustrator.</p>
            <a href="resume.php" class="btn btn-light" target="_blank" rel="noopener" aria-label="View Resume for Web Graphics">View Resume</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
