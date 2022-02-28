$attachmentForm = new Rebilly\Entities\Attachment();
$attachmentForm->setFileId('fileId');
$attachmentForm->setRelatedType($attachmentForm::TYPE_CUSTOMER);
$attachmentForm->setRelatedId('customerId');

try {
    $attachment = $client->attachments()->update('attachmentId', $attachmentForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
