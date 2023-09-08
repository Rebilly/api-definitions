$service = new Rebilly\Sdk\CoreService($client);

$customFieldForm = new Rebilly\Sdk\Model\BooleanCustomField();
$customFieldForm->setType($customFieldForm::TYPE_BOOLEAN);

$customField = $service->customFields()->create('customers', 'testFieldName', $customFieldForm);
