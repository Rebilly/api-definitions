<?php

$service = new \Rebilly\Sdk\Service($client);
$service->blocklists()->delete('blocklistId');
