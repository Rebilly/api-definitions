<?php

$service = new \Rebilly\Sdk\Service($client);
$list = $service->lists()->getByVersion('listId', 1);
