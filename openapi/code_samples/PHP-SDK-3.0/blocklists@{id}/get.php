$service = new \Rebilly\Sdk\CoreService($client);
$blocklist = $service->blocklists()->get('blocklistId');
