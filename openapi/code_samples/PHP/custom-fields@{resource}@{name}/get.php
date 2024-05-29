<?php

$service = new \Rebilly\Sdk\Service($client);
$customField = $service->customFields()->get('customers', 'testFieldName');
