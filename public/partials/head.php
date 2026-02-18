    <?php
      $page_title = $page_title ?? "QRix — from packaging to digital channel";
      $page_description = $page_description ?? "QRix turns everyday packaging into a digital return channel: scan → action → bonus → repeat.";
      $include_main_styles = $include_main_styles ?? true;
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, "UTF-8"); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, "UTF-8"); ?>" />
    <link rel="icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png" />
    <?php if ($include_main_styles) : ?>
      <link rel="stylesheet" href="styles.css?v=20260216-7" />
    <?php endif; ?>
