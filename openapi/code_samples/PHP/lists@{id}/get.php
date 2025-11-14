<?php

$service = new \Rebilly\Sdk\Service($client);
$list = $service->lists()->getLatestVersion('listId');
