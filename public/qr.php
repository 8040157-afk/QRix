<!doctype html>
<html lang="en">
  <head>
    <?php
      $page_title = "QRix Rewards";
      $page_description = "QRix Rewards QR actions page.";
      $include_main_styles = false;
      include __DIR__ . '/partials/head.php';
    ?>
    <link rel="stylesheet" href="qr.css?v=20260216-1" />
  </head>
  <body>
    <main class="page">
      <section class="card">
        <header class="hero">
          <img class="hero__image" src="images/earn_bonuses.jpg" alt="Earn bonus points" />
        </header>

        <div class="about-project">
          <a href="https://www.qrix.ca" class="about-project__btn">About Project</a>
        </div>

        <div class="actions" id="actions" aria-live="polite"></div>

        <footer class="footer">
          <p class="footer__message">More rewards coming soon!</p>
        </footer>
      </section>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>
    <script src="qr.js"></script>
  </body>
</html>
