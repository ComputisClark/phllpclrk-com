<?php
// contact.php — Phillip Clark
// Contact form with basic validation, hCaptcha, and mail() hardening

$pageTitle = 'Contact – Phillip Clark';
$pageDesc  = 'Get in touch for web builds, performance/SEO, and site support.';
$ogImage   = '/assets/og-contact.jpg';
include 'header.php';

$responses = [];

// Honeypot (bots fill this; humans won’t)
$honeypot = $_POST['website'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email   = trim($_POST['email']   ?? '');
  $subject = trim($_POST['subject'] ?? '');
  $name    = trim($_POST['name']    ?? '');
  $msg     = trim($_POST['msg']     ?? '');
  $captcha = $_POST['h-captcha-response'] ?? '';

  if ($honeypot !== '') {
    $responses[] = 'Message could not be sent.';
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $responses[] = 'Email is not valid.';
    }
    if ($email === '' || $subject === '' || $name === '' || $msg === '') {
      $responses[] = 'Please complete all fields.';
    }

    // hCaptcha verification
    if (empty($captcha)) {
      $responses[] = 'Please complete the captcha.';
    } else {
      $secret = 'SecretKeyEnterHere';
      $verifyResponse = file_get_contents("https://hcaptcha.com/siteverify?secret={$secret}&response={$captcha}&remoteip=" . $_SERVER['REMOTE_ADDR']);
      $captchaSuccess = json_decode($verifyResponse);
      if (empty($captchaSuccess->success)) {
        $responses[] = 'Captcha verification failed. Please try again.';
      }
    }

    // Strip header injection
    $email   = str_replace(["\r", "\n"], '', $email);
    $subject = str_replace(["\r", "\n"], '', $subject);

    if (mb_strlen($subject) > 150) {
      $subject = mb_substr($subject, 0, 150) . '…';
    }

    if (!$responses) {
      $to   = 'phllpclrk@gmail.com';
      $from = 'noreply@phllpclrk.com';

      $bodyLines = [
        "Name: {$name}",
        "Email: {$email}",
        "Subject: {$subject}",
        "",
        $msg
      ];
      $message = wordwrap(implode("\r\n", $bodyLines), 70, "\r\n");

      $headers  = 'From: ' . $from . "\r\n";
      $headers .= 'Reply-To: ' . $email . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
      $headers .= 'X-Mailer: PHP/' . phpversion();

      if (@mail($to, $subject, $message, $headers)) {
        $responses[] = 'Message sent!';
      } else {
        $responses[] = 'Message could not be sent. Please try again later.';
      }
    }
  }
}
?>

<!-- Load hCaptcha -->
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>

<!-- Page Content -->
<div class="container py-5 container-narrow">
  <div class="panel panel--soft">
    <h1 class="text-center mb-4">Contact Me</h1>

    <?php if ($responses): ?>
      <div class="mb-3">
        <?php foreach ($responses as $r): ?>
          <?php $ok = (stripos($r, 'sent') !== false); ?>
          <div class="alert <?= $ok ? 'alert-success' : 'alert-warning' ?>" role="alert" aria-live="polite">
            <?= htmlspecialchars($r) ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form class="contact" method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate>
      <!-- Honeypot -->
      <div style="position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden;">
        <label for="website">Leave this field empty</label>
        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input class="form-control" id="email" type="email" name="email"
               placeholder="you@example.com" autocomplete="email" required>
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input class="form-control" id="name" type="text" name="name"
               placeholder="Your name" autocomplete="name" required>
      </div>

      <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input class="form-control" id="subject" type="text" name="subject"
               placeholder="Subject" autocomplete="off" required>
      </div>

      <div class="mb-3">
        <label for="msg" class="form-label">Message</label>
        <textarea class="form-control" id="msg" name="msg" rows="7"
                  placeholder="How can I help?" required></textarea>
      </div>

      <!-- hCaptcha widget -->
      <div class="h-captcha mb-3" data-sitekey="siteKeyEnterHere" data-theme="dark"></div>

      <button type="submit" class="submit">Send Message</button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>
