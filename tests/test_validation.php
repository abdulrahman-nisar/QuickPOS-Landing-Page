<?php
declare(strict_types=1);

require __DIR__ . '/../src/business.php';

/**
 * Simple test for ContactValidator, focusing on empty name field.
 */
class TestContactValidator
{
    private ContactValidator $validator;

    public function __construct()
    {
        $this->validator = new ContactValidator();
    }

    public function testEmptyName(): bool
    {
        // Backlog: POS-41 - Empty name validation
        // Test empty name
        $data = ['name' => '', 'email' => 'test@example.com', 'message' => 'Hello'];
        $this->validator->validate($data);
        $errors = $this->validator->getErrors();

        if (in_array('Name is required.', $errors)) {
            echo "PASS: Empty name validation works.\n";
            return true;
        } else {
            echo "FAIL: Empty name validation failed. Errors: " . implode(', ', $errors) . "\n";
            return false;
        }
    }

    public function testValidName(): bool
    {
        // Backlog: POS-41 - Valid name validation
        // Test valid name (to ensure it doesn't trigger error)
        $data = ['name' => 'John Doe', 'email' => 'test@example.com', 'message' => 'Hello'];
        $this->validator->validate($data);
        $errors = $this->validator->getErrors();

        if (!in_array('Name is required.', $errors)) {
            echo "PASS: Valid name does not trigger error.\n";
            return true;
        } else {
            echo "FAIL: Valid name triggered error.\n";
            return false;
        }
    }

    public function testEmptyMessage(): bool
    {
        // Backlog: POS-47 - Empty message validation
        // Test empty message
        $data = ['name' => 'John Doe', 'email' => 'test@example.com', 'message' => ''];
        $this->validator->validate($data);
        $errors = $this->validator->getErrors();

        if (in_array('Message is required.', $errors)) {
            echo "PASS: Empty message validation works.\n";
            return true;
        } else {
            echo "FAIL: Empty message validation failed. Errors: " . implode(', ', $errors) . "\n";
            return false;
        }
    }

    public function testValidMessage(): bool
    {
        // Backlog: POS-47 - Valid message validation
        // Test valid message (to ensure it doesn't trigger error)
        $data = ['name' => 'John Doe', 'email' => 'test@example.com', 'message' => 'Hello'];
        $this->validator->validate($data);
        $errors = $this->validator->getErrors();

        if (!in_array('Message is required.', $errors)) {
            echo "PASS: Valid message does not trigger error.\n";
            return true;
        } else {
            echo "FAIL: Valid message triggered error.\n";
            return false;
        }
    }

    public function testInvalidEmail(): bool
    {
        // Backlog: POS-44 - Invalid email validation
        // Test invalid email format
        $data = ['name' => 'John Doe', 'email' => 'not-an-email', 'message' => 'Hello'];
        $this->validator->validate($data);
        $errors = $this->validator->getErrors();

        if (in_array('Please enter a valid email address.', $errors)) {
            echo "PASS: Invalid email validation works.\n";
            return true;
        } else {
            echo "FAIL: Invalid email validation failed. Errors: " . implode(', ', $errors) . "\n";
            return false;
        }
    }

    public function testValidEmail(): bool
    {
        // Backlog: POS-44 - Valid email validation
        // Test valid email (to ensure it doesn't trigger error)
        $data = ['name' => 'John Doe', 'email' => 'test@example.com', 'message' => 'Hello'];
        $this->validator->validate($data);
        $errors = $this->validator->getErrors();

        if (!in_array('Please enter a valid email address.', $errors)) {
            echo "PASS: Valid email does not trigger error.\n";
            return true;
        } else {
            echo "FAIL: Valid email triggered error.\n";
            return false;
        }
    }

    public function testSuccessCase(): bool
    {
        // Backlog: POS-45 - Success case validation
        // Test a fully valid payload
        $data = ['name' => 'John Doe', 'email' => 'test@example.com', 'message' => 'Hello'];
        $isValid = $this->validator->validate($data);
        $errors = $this->validator->getErrors();

        if ($isValid && empty($errors)) {
            echo "PASS: Success case validation works.\n";
            return true;
        } else {
            echo "FAIL: Success case validation failed. Errors: " . implode(', ', $errors) . "\n";
            return false;
        }
    }

    public function testPageLoadAvailability(): bool
    {
        // Backlog: POS-46 - Page load response availability
        // Render the landing page and ensure it outputs expected content
        ob_start();
        include __DIR__ . '/../public/index.php';
        $output = ob_get_clean();

        if (!empty($output) && strpos($output, '<title>QuickPOS') !== false) {
            echo "PASS: Page load response is available.\n";
            return true;
        } else {
            echo "FAIL: Page load response is not available or missing title.\n";
            return false;
        }
    }

    public function runTests(): void
    {
        $results = [];
        $results[] = $this->testEmptyName();
        $results[] = $this->testValidName();
        $results[] = $this->testEmptyMessage();
        $results[] = $this->testValidMessage();
        $results[] = $this->testInvalidEmail();
        $results[] = $this->testValidEmail();
        $results[] = $this->testSuccessCase();
        $results[] = $this->testPageLoadAvailability();

        $passed = count(array_filter($results));
        $total = count($results);
        echo "\nTests passed: $passed/$total\n";
    }
}

// Run the tests
$test = new TestContactValidator();
$test->runTests();