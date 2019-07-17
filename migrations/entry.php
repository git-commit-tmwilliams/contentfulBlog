<?php

$contentManagementKey = 'CFPAT-WbxTv_nmi9zZOxWJbqEPMH3phIIkxPh4s2Akj-caCjo';
$spaceID = 'mjer6n36yliy';
$environmentID = 'dev';

$client = new \Contentful\Management\Client($contentManagementKey);
$environment = $client->getEnvironmentProxy($spaceID, $environmentID);

$entries = $environment->getEntries();

?>