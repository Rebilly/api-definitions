<?php

$service = new \Rebilly\Sdk\Service($client);
$service->lists()->delete('listId');
