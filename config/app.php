<?php
declare(strict_types=1);

/** Shared paths for the PHP design samples. */
define('PROJECT_PATH', dirname(__DIR__));
define('ASSET_URL', '/assets');

function sample2_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    return '/Sample2/' . $path;
}
