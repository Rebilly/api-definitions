$service = new Rebilly\Sdk\CoreService($client);

$attachmentsPaginator = $service->files()->getAllAttachmentsPaginator(limit: 5, filter: 'relatedType:customer');
foreach ($attachmentsPaginator as $attachmentPage) {
    printf("Attachments page %d/%d\n", $attachmentsPaginator->key() + 1, $attachmentsPaginator->count());
    foreach ($attachmentPage as $attachment) {
        printf("Attachment #%s (%s): %s\n", $attachment->getId(), $attachment->getRelatedType(), $attachment->getName());
    }
}

// OR

$attachments = $service->files()->getAllAttachments(filter: 'relatedType:customer');
foreach ($attachments as $attachment) {
    printf("Attachment #%s (%s): %s\n", $attachment->getId(), $attachment->getRelatedType(), $attachment->getName());
}
