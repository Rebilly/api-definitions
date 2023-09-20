<?php

$service = new \Rebilly\Sdk\CoreService($client);
$attachment = $service->files()->getAttachment('attachmentId');
