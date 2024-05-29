<?php

$service = new \Rebilly\Sdk\Service($client);
$blocklist = $service->blocklists()->get('blocklistId');
