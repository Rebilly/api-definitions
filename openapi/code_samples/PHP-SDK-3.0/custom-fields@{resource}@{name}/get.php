<?php

$service = new \Rebilly\Sdk\CoreService($client);
$customField = $service->customFields()->get('customers', 'testFieldName');
