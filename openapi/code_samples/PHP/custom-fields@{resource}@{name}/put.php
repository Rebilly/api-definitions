$customFieldForm = new Rebilly\Entities\CustomField();
$customFieldForm->setType($customFieldForm::TYPE_BOOLEAN);

try {
    $customField = $client->customFields()->update('customers', 'testFieldName', $customFieldForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
