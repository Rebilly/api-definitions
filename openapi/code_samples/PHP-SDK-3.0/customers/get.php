$service = new Rebilly\Sdk\Service($client);
// all parameters are optional.
$customers = $service->customers()->getAll(['filter' => 'firstName:John']);