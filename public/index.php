<?php
require '../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__. '/../');
$dotenv->load();

$dotenv->required(['PERMA_REDIRECT', 'APP_URL']);

if(getenv('PERMA_REDIRECT')) {
    header("HTTP/1.1 301 Moved Permanently");
} else {
    header("HTTP/1.1 302 Found");
}

header("Location: " . getenv('APP_URL'));
