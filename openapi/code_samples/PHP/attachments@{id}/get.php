<?php

$service = new \Rebilly\Sdk\Service($client);
$attachment = $service->files()->getAttachment('attachmentId');
