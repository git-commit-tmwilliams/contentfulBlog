<?php

require_once __DIR__ . 'marleighwilliams/vendor/autoload.php';

use Contentful\Management\Client;

// Set Access Token
$accessToken = 'CFPAT-WbxTv_nmi9zZOxWJbqEPMH3phIIkxPh4s2Akj-caCjo';

$spaceId = 'mjer6n36yliy';

$environmentId = 'dev';

// new Client Object
$client = new Client($accessToken);

// Space proxy
$spaceProxy = $client->getSpaceProxy($spaceId);
$deliveryApiKeys = $spaceProxy->getDeliveryApiKeys();
$roles = $spaceProxy->getRoles();

// Environment proxy
$environmentProxy = $client->getEnvironmentProxy($spaceId, $environmentId);
$assets = $environmentProxy->getAssets();
$entries = $environmentProxy->getEntries();

?>