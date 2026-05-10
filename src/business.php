<?php
declare(strict_types=1);

/**
 * ContactValidator class for validating contact form inputs.
 * Loosely coupled validation logic.
 */
class ContactValidator
{
    private array $errors = [];

    /**
     * Validate the entire contact form data.
     *
     * @param array $data Associative array with 'name', 'email', 'message' keys.
     * @return bool True if valid, false otherwise.
     */
    public function validate(array $data): bool
    {
        $this->errors = [];

        $this->validateName($data['name'] ?? '');
        $this->validateEmail($data['email'] ?? '');
        $this->validateMessage($data['message'] ?? '');

        return empty($this->errors);
    }

    /**
     * Validate the name field.
     *
     * @param string $name
     */
    public function validateName(string $name): void
    {
        $name = trim($name);
        if ($name === '') {
            $this->errors[] = 'Name is required.';
        }
    }

    /**
     * Validate the email field.
     *
     * @param string $email
     */
    public function validateEmail(string $email): void
    {
        $email = trim($email);
        if ($email === '') {
            $this->errors[] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'Please enter a valid email address.';
        }
    }

    /**
     * Validate the message field.
     *
     * @param string $message
     */
    public function validateMessage(string $message): void
    {
        $message = trim($message);
        if ($message === '') {
            $this->errors[] = 'Message is required.';
        }
    }

    /**
     * Get validation errors.
     *
     * @return array List of error messages.
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Get the first error message, or a default if none.
     *
     * @param string $default
     * @return string
     */
    public function getFirstError(string $default = 'Please fill in all fields.'): string
    {
        return $this->errors[0] ?? $default;
    }
}

/**
 * ContactFormProcessor class for handling contact form submission.
 */
class ContactFormProcessor
{
    private ContactValidator $validator;

    public function __construct()
    {
        $this->validator = new ContactValidator();
    }

    /**
     * Process the contact form submission.
     */
    public function process(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /#contact');
            exit;
        }

        $data = [
            'name' => $_POST['name'] ?? '',
            'email' => $_POST['email'] ?? '',
            'message' => $_POST['message'] ?? '',
        ];

        if (!$this->validator->validate($data)) {
            $err = urlencode($this->validator->getFirstError());
            header("Location: /#contact?contact_error={$err}");
            exit;
        }

        // Simulate success (no database/email required for assignment)
        header('Location: ./thank-you.html');
        exit;
    }
}