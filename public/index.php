<?php
declare(strict_types=1);

// Base page scaffold. Sections will be added via src/partials and src/sections in later tickets.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QuickPOS — Modern Point of Sale</title>
  <meta name="description" content="QuickPOS is a modern POS system for retail and restaurants. Inventory, analytics, and faster checkout." />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Optional premium font pair (safe, modern) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./assets/css/style.css" />
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header">
    <div class="container header-inner">
      <div class="brand">
        <div class="brand-mark" aria-hidden="true">QP</div>
        <span class="brand-name">QuickPOS</span>
      </div>

      <nav class="nav" aria-label="Primary navigation">
        <a class="nav-link" href="#features">Features</a>
        <a class="nav-link" href="#pricing">Pricing</a>
        <a class="nav-link" href="#contact">Contact</a>
      </nav>

      <a class="btn btn-primary" href="#pricing">Sign Up</a>
    </div>
  </header>

  <main id="main">
    <section class="hero">
      <div class="container hero-inner">
        <div class="hero-copy">
          <p class="eyebrow">Built for modern businesses</p>
          <h1 class="hero-title">The last POS system you’ll ever need.</h1>
          <p class="hero-subtitle">
            Fast checkout, real-time inventory, and smart analytics in one clean dashboard.
            Launch in minutes—no complicated setup.
          </p>

          <div class="hero-cta">
            <a class="btn btn-primary btn-lg" href="#contact">Get Started for Free</a>
            <a class="btn btn-ghost btn-lg" href="#features">See Features</a>
          </div>

          <div class="trust">
            <span class="trust-pill">PCI-ready</span>
            <span class="trust-pill">Cloud sync</span>
            <span class="trust-pill">24/7 support</span>
          </div>
        </div>

        <div class="hero-media" aria-label="POS software preview image">
          <!-- Placeholder “mockup” (we’ll replace with real image later) -->
          <div class="mockup">
            <div class="mockup-topbar"></div>
            <div class="mockup-body">
              <div class="mock-card"></div>
              <div class="mock-card"></div>
              <div class="mock-card"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Placeholders: later tickets will replace these with real sections -->
    <section id="features" class="section">
      <div class="container">
        <h2 class="section-title">Features</h2>
        <p class="section-subtitle">Everything you need to sell smarter and manage faster.</p>
      </div>
    </section>

    <section id="pricing" class="section section-alt">
      <div class="container">
        <h2 class="section-title">Pricing</h2>
        <p class="section-subtitle">Simple plans that scale with your business.</p>
      </div>
    </section>

    <section id="contact" class="section">
      <div class="container">
        <h2 class="section-title">Contact</h2>
        <p class="section-subtitle">Questions? Send a message and we’ll get back to you.</p>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <p class="footer-copy">© <?php echo date('Y'); ?> QuickPOS. All rights reserved.</p>
      <div class="footer-links">
        <a href="#" class="footer-link">Twitter</a>
        <a href="#" class="footer-link">LinkedIn</a>
        <a href="#" class="footer-link">Facebook</a>
      </div>
    </div>
  </footer>
</body>
</html>