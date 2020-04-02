$attachmentForm = new Rebilly\Entities\Attachment();
$attachmentForm->setFileId('fileId');
$attachmentForm->setRelatedType($attachmentForm::TYPE_CUSTOMER);
$attachmentForm->setRelatedId('customerId');

try {
    $attachment = $client->attachments()->update('attachmentId', $attachmentForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
