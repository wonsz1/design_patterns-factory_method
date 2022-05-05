<?php

declare(strict_types=1);

use FactoryMethod\Client;
use FactoryMethod\FacebookCreator;
use FactoryMethod\TwitterCreator;

require_once __DIR__ . '/vendor/autoload.php';

$client = new Client();
$client->postSocial(new FacebookCreator('john_smith', '*****'));
$client->postSocial(new TwitterCreator('elon_musk@spacex.com', '****'));