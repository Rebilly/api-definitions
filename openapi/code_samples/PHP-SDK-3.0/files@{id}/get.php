$service = new Rebilly\Sdk\CoreService($client);
$file = $service->files()->get('fileId');
