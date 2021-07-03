$application = new Rebilly\Entities\Application();
$application->setName('My application');
$application->setDescription('My application description');
$application->setLogoId('fileId');
$application->setPermissions(['GetTransactionCollection']);

try {
    $application = $client->applications()->create($application);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
