<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

/**
 * Test 3: Inline client, http2 without push
 *
 * Result: No warnings, no segfault on exit.
 */
$response = HttpClient::create()->request('GET', 'https://http2.golang.org/');

print strlen($response->getContent()) . PHP_EOL;
