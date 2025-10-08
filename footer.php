<?php
// footer.php – Phillip Clark
// Shared footer for all pages (dark theme, repeat background, Tawk.to live chat)

$year = date('Y');
?>

<!-- Footer -->
<footer class="py-5 bg-dark text-light darkRepeatBackground">
  <div class="container text-center small">
    <p class="m-0">
      &copy; <?= $year ?> Phillip Clark. All rights reserved.
    </p>
  </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


<!-- Core theme JS -->
<script src="/js/scripts.js"></script>

<!-- Start of Tawk.to Script -->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/61f4c2df9bd1f31184d9e8c9/1fqi1ieok';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!-- End of Tawk.to Script -->

</body>
</html>
