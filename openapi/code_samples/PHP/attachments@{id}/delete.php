<?php

$service = new \Rebilly\Sdk\Service($client);
$service->files()->detach('attachmentId');
