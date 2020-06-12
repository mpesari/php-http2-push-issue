<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

/**
 * Test 4: Instantiated client, http2 without push
 *
 * Result: No warnings, no segfault on exit.
 */
$client = HttpClient::create();
$response = $client->request('GET', 'https://http2.golang.org/');

print strlen($response->getContent()) . PHP_EOL;
