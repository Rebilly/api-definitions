<?php

$service = new \Rebilly\Sdk\Service($client);

$customFieldForm = new \Rebilly\Sdk\Model\BooleanCustomField();
$customFieldForm->setDescription('testFieldDescription');

try {
    $customField = $service->customFields()->create('customers', 'testFieldName', $customFieldForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
