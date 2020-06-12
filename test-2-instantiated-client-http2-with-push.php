<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

/**
 * Test 2: Instantiate HttpClient, http2 with push
 *
 * Result: No warnings, no segfault on exit.
 */
$client = HttpClient::create();
$response = $client->request('GET', 'https://http2.golang.org/serverpush');

print strlen($response->getContent()) . PHP_EOL;
