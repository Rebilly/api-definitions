$service = new Rebilly\Sdk\Service($client);

$tags = $service->tags()->getAll();
