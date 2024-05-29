<?php

$service = new \Rebilly\Sdk\Service($client);
$file = $service->files()->get('fileId');
