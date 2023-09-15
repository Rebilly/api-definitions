<?php

$service = new \Rebilly\Sdk\CoreService($client);

$customFieldForm = new \Rebilly\Sdk\Model\BooleanCustomField();
$customFieldForm->setType($customFieldForm::TYPE_BOOLEAN);

try {
    $customField = $service->customFields()->create('customers', 'testFieldName', $customFieldForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
