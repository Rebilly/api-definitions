$service = new Rebilly\Sdk\CoreService($client);

$attachmentForm = new Rebilly\Sdk\Model\Attachment();
$attachmentForm->setFileId('fileId');
$attachmentForm->setRelatedType($attachmentForm::RELATED_TYPE_CUSTOMER);
$attachmentForm->setRelatedId('customerId');

$attachment = $service->files()->updateAttachment('attachmentId', $attachmentForm);
