$service = new \Rebilly\Sdk\CoreService($client);
$service->files()->detach('attachmentId');
