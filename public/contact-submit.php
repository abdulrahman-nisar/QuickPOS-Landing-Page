<?php
declare(strict_types=1);

require __DIR__ . '/../src/business.php';

$processor = new ContactFormProcessor();
$processor->process();