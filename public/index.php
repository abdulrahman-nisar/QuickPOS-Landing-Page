<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en" id="top">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QuickPOS — Modern Point of Sale</title>
  <meta name="description" content="QuickPOS is a modern POS system for retail and restaurants. Inventory, analytics, and faster checkout." />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./assets/css/style.css" />
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <?php require __DIR__ . '/../src/partials/header.php'; ?>

  <main id="main">
<section class="hero">
  <div class="container hero-inner">
    <div class="hero-copy">
      <p class="eyebrow">Built for modern businesses</p>

      <h1 class="hero-title">
        The last POS system you’ll ever need.
      </h1>

      <p class="hero-subtitle">
        QuickPOS brings fast checkout, real-time inventory, and sales analytics into one clean dashboard.
        Start free and upgrade when you’re ready.
      </p>

      <div class="hero-cta">
        <a class="btn btn-primary btn-lg" href="#contact">Get Started for Free</a>
        <a class="btn btn-ghost btn-lg" href="#features">See Features</a>
      </div>

      <dl class="hero-metrics" aria-label="Key metrics">
        <div class="metric">
          <dt class="metric-label">Setup time</dt>
          <dd class="metric-value">10 min</dd>
        </div>
        <div class="metric">
          <dt class="metric-label">Avg. checkout</dt>
          <dd class="metric-value">2x faster</dd>
        </div>
        <div class="metric">
          <dt class="metric-label">Uptime</dt>
          <dd class="metric-value">99.9%</dd>
        </div>
      </dl>

      <div class="trust">
        <span class="trust-pill">PCI-ready</span>
        <span class="trust-pill">Cloud sync</span>
        <span class="trust-pill">24/7 support</span>
      </div>
    </div>

    <div class="hero-media" aria-label="POS software preview image">
      <div class="mockup">
        <div class="mockup-topbar">
          <span class="dot dot-red" aria-hidden="true"></span>
          <span class="dot dot-yellow" aria-hidden="true"></span>
          <span class="dot dot-green" aria-hidden="true"></span>
          <span class="mockup-title">QuickPOS Dashboard</span>
        </div>

        <div class="mockup-body">
          <div class="mock-row">
            <div class="mock-kpi">
              <p class="kpi-label">Today</p>
              <p class="kpi-value">$12,480</p>
              <p class="kpi-sub">Revenue</p>
            </div>
            <div class="mock-kpi">
              <p class="kpi-label">Orders</p>
              <p class="kpi-value">148</p>
              <p class="kpi-sub">Transactions</p>
            </div>
          </div>

          <div class="mock-card wide"></div>

          <div class="mock-row">
            <div class="mock-card"></div>
            <div class="mock-card"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

  <?php require __DIR__ . '/../src/partials/footer.php'; ?>
  <script src="./assets/js/main.js" defer></script>

</body>
</html>