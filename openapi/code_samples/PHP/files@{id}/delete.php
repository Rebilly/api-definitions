<?php

$service = new \Rebilly\Sdk\Service($client);
$service->files()->delete('fileId');
