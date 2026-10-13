<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/app.php';

function h(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function asset_url(string $path): string
{
    return ASSET_URL . '/' . ltrim($path, '/');
}

function icon(string $name): string
{
    return '<svg class="ui-icon" aria-hidden="true"><use href="' . asset_url('icons/icons.svg') . '#' . h($name) . '"></use></svg>';
}
