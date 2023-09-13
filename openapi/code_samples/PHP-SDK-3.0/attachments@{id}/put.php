$service = new \Rebilly\Sdk\CoreService($client);

$attachmentForm = new \Rebilly\Sdk\Model\Attachment();
$attachmentForm->setFileId('fileId');
$attachmentForm->setRelatedType($attachmentForm::RELATED_TYPE_CUSTOMER);
$attachmentForm->setRelatedId('customerId');

try {
    $attachment = $service->files()->updateAttachment('attachmentId', $attachmentForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
