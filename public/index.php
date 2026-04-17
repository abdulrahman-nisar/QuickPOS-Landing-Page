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
    <div class="section-head">
      <h2 class="section-title">Features</h2>
      <p class="section-subtitle">Run sales, inventory, and insights from one beautiful dashboard.</p>
    </div>

    <div class="features-grid">
      <article class="feature-card">
        <div class="feature-icon" aria-hidden="true">
          <!-- box icon -->
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 7.5L12 3l8 4.5v9L12 21l-8-4.5v-9Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
            <path d="M12 21v-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M4 7.5l8 4.5 8-4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="feature-title">Inventory Management</h3>
        <p class="feature-desc">Track stock in real time, get low‑inventory alerts, and sync across locations.</p>
      </article>

      <article class="feature-card">
        <div class="feature-icon" aria-hidden="true">
          <!-- chart icon -->
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 19V5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M4 19h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M8 15l3-3 3 2 5-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="feature-title">Sales Analytics</h3>
        <p class="feature-desc">Understand best sellers, peak hours, and profit trends with clear reporting.</p>
      </article>

      <article class="feature-card">
        <div class="feature-icon" aria-hidden="true">
          <!-- plug icon -->
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 7v6m6-6v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M7 11h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M12 13v3a4 4 0 0 1-4 4h-1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M12 13v3a4 4 0 0 0 4 4h1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="feature-title">Easy Integrations</h3>
        <p class="feature-desc">Connect payments, receipts, and accounting tools without messy workflows.</p>
      </article>

      <article class="feature-card">
        <div class="feature-icon" aria-hidden="true">
          <!-- shield icon -->
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3l8 4v6c0 5-3.5 8-8 8s-8-3-8-8V7l8-4Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
            <path d="M9.5 12l1.8 1.8L15.5 9.6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="feature-title">Secure by Design</h3>
        <p class="feature-desc">Role-based access, audit trails, and a security-first approach for peace of mind.</p>
      </article>
    </div>
  </div>
</section>

<section id="pricing" class="section section-alt">
  <div class="container">
    <div class="section-head">
      <h2 class="section-title">Pricing</h2>
      <p class="section-subtitle">Simple plans that scale with your business—upgrade anytime.</p>
    </div>

    <div class="pricing-grid">
      <article class="pricing-card">
        <header class="pricing-top">
          <h3 class="plan-name">Basic</h3>
          <p class="plan-price"><span class="price">$0</span><span class="per">/mo</span></p>
          <p class="plan-note">For trying QuickPOS with core features.</p>
        </header>

        <ul class="plan-list">
          <li>1 register</li>
          <li>Basic inventory</li>
          <li>Daily sales summary</li>
          <li>Email support</li>
        </ul>

        <a class="btn btn-ghost plan-cta" href="#contact">Start Free</a>
      </article>

      <article class="pricing-card pricing-card-featured" aria-label="Pro plan (Most Popular)">
        <div class="plan-badge">Most Popular</div>

        <header class="pricing-top">
          <h3 class="plan-name">Pro</h3>
          <p class="plan-price"><span class="price">$29</span><span class="per">/mo</span></p>
          <p class="plan-note">Best for growing stores needing analytics.</p>
        </header>

        <ul class="plan-list">
          <li>Unlimited registers</li>
          <li>Advanced inventory + alerts</li>
          <li>Sales analytics dashboard</li>
          <li>Integrations (payments/accounting)</li>
        </ul>

        <a class="btn btn-primary plan-cta" href="#contact">Get Started</a>
      </article>

      <article class="pricing-card">
        <header class="pricing-top">
          <h3 class="plan-name">Enterprise</h3>
          <p class="plan-price"><span class="price">$99</span><span class="per">/mo</span></p>
          <p class="plan-note">For multi-location teams and custom needs.</p>
        </header>

        <ul class="plan-list">
          <li>Multi-location reporting</li>
          <li>Roles + permissions</li>
          <li>Priority support (24/7)</li>
          <li>Dedicated onboarding</li>
        </ul>

        <a class="btn btn-ghost plan-cta" href="#contact">Talk to Sales</a>
      </article>
    </div>

    <p class="pricing-footnote">
      Prices shown in USD. Cancel anytime. Need a custom plan? <a class="inline-link" href="#contact">Contact us</a>.
    </p>
  </div>
</section>
<section id="contact" class="section">
  <div class="container">
    <div class="section-head">
      <h2 class="section-title">Contact</h2>
      <p class="section-subtitle">Questions? Send a message and we’ll get back to you shortly.</p>
    </div>

    <?php
      $contactError = $_GET['contact_error'] ?? '';
      $contactOk = $_GET['contact_ok'] ?? '';
    ?>

    <?php if ($contactError): ?>
      <div class="alert alert-error" role="alert">
        <?php echo htmlspecialchars($contactError, ENT_QUOTES, 'UTF-8'); ?>
      </div>
    <?php endif; ?>

    <?php if ($contactOk): ?>
      <div class="alert alert-success" role="status">
        <?php echo htmlspecialchars($contactOk, ENT_QUOTES, 'UTF-8'); ?>
      </div>
    <?php endif; ?>

    <div class="contact-grid">
      <form class="contact-card" method="post" action="./contact-submit.php" novalidate>
        <div class="field">
          <label class="label" for="name">Name</label>
          <input class="input" id="name" name="name" type="text" placeholder="Your name" required />
        </div>

        <div class="field">
          <label class="label" for="email">Email</label>
          <input class="input" id="email" name="email" type="email" placeholder="you@example.com" required />
        </div>

        <div class="field">
          <label class="label" for="message">Message</label>
          <textarea class="textarea" id="message" name="message" rows="5" placeholder="How can we help?" required></textarea>
        </div>

        <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
        <p class="form-note">By submitting, you agree to be contacted about QuickPOS.</p>
      </form>

      <aside class="contact-aside">
        <div class="contact-info">
          <h3 class="contact-title">Talk to a QuickPOS specialist</h3>
          <p class="contact-desc">We usually respond within 1 business day.</p>

          <ul class="contact-list">
            <li><span class="contact-label">Email:</span> support@quickpos.example</li>
            <li><span class="contact-label">Phone:</span> +1 (555) 123-4567</li>
            <li><span class="contact-label">Hours:</span> Mon–Fri, 9am–6pm</li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>
  </main>

  <?php require __DIR__ . '/../src/partials/footer.php'; ?>
  <script src="./assets/js/main.js" defer></script>

</body>
</html>