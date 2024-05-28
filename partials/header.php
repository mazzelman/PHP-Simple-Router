<?php
# active class for the current page
function isActive($href) {
    return $_SERVER['REQUEST_URI'] === $href ? 'nav__link--active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/assets/css/main.css">
  <title><?php echo $title; ?></title>
</head>
<body>
  <header class="header">
    <a href="/" class="branding">
      <h1>PSR</h1>
    </a>
    <nav class="navbar">
        <ul class="navbar__ul">
          <li><a class="nav__link <?php echo isActive('/'); ?>" href="/">Home</a></li>
          <li><a class="nav__link <?php echo isActive('/work'); ?>" href="/work">Work</a></li>
          <li><a class="nav__link <?php echo isActive('/about'); ?>" href="/about">About</a></li>
        </ul>
    </nav>
  </header>