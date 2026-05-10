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

    public function runTests(): void
    {
        $results = [];
        $results[] = $this->testEmptyName();
        $results[] = $this->testValidName();

        $passed = count(array_filter($results));
        $total = count($results);
        echo "\nTests passed: $passed/$total\n";
    }
}

// Run the tests
$test = new TestContactValidator();
$test->runTests();