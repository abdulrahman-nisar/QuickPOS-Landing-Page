<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: /#contact');
  exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
  $err = urlencode('Please fill in all fields.');
  header("Location: /#contact?contact_error={$err}");
  exit;
}

// Optional but recommended: basic email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $err = urlencode('Please enter a valid email address.');
  header("Location: /#contact?contact_error={$err}");
  exit;
}

// Simulate success (no database/email required for assignment)
header('Location: ./thank-you.html');
exit;