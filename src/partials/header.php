<?php
declare(strict_types=1);
?>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="#top" aria-label="QuickPOS home">
      <span class="brand-mark" aria-hidden="true">QP</span>
      <span class="brand-name">QuickPOS</span>
    </a>

    <nav class="nav nav-desktop" aria-label="Primary navigation">
      <a class="nav-link" href="#features">Features</a>
      <a class="nav-link" href="#pricing">Pricing</a>
      <a class="nav-link" href="#contact">Contact</a>
    </nav>

    <div class="header-actions">
      <a class="btn btn-primary header-signup" href="#pricing">Sign Up</a>

      <button class="icon-btn nav-toggle"
              type="button"
              aria-label="Open menu"
              aria-controls="mobile-nav"
              aria-expanded="false">
        <span class="burger" aria-hidden="true"></span>
      </button>
    </div>
  </div>

  <nav id="mobile-nav" class="nav-mobile" aria-label="Mobile navigation">
    <a class="nav-mobile-link" href="#features">Features</a>
    <a class="nav-mobile-link" href="#pricing">Pricing</a>
    <a class="nav-mobile-link" href="#contact">Contact</a>
    <a class="nav-mobile-link nav-mobile-cta" href="#pricing">Sign Up</a>
  </nav>
</header>