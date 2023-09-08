$service = new Rebilly\Sdk\UsersService($client);
$service->websites()->delete('websiteId');
