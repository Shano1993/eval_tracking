<?php

namespace App\Controller;

abstract class AbstractController
{
    abstract public function index();

    public function render(string $temp, array $data = []): void
    {
        ob_start();
        require __DIR__ . '/../../View/' . $temp . '.html.php';
        $html = ob_get_clean();
        require __DIR__ . '/../../View/base.html.php';
    }

    public function location($location)
    {
        header('location: /index.php?' . $location);
    }

    public function getField(string $field, $default = null)
    {
        if (!isset($_POST[$field])) {
            return (null === $default) ? '' : $default;
        }
        return $_POST[$field];
    }

    public static function isFormSubmitted(): bool
    {
        return isset($_POST['save']);
    }

    public static function sanitizeString(string $param): string
    {
        return filter_var($param, FILTER_SANITIZE_STRING);
    }
}
