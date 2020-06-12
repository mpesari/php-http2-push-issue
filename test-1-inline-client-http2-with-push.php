<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

/**
 * Test 1: Inline client, http2 with push
 *
 * Result: Warnings & segfault on exit.
 */
$response = HttpClient::create()->request('GET', 'https://http2.golang.org/serverpush');

print strlen($response->getContent()) . PHP_EOL;
