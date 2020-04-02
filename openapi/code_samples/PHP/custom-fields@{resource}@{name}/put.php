$customFieldForm = new Rebilly\Entities\CustomField();
$customFieldForm->setType($customFieldForm::TYPE_BOOLEAN);

try {
    $customField = $client->customFields()->update('customers', 'testFieldName', $customFieldForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
