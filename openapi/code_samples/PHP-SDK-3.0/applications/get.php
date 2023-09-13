$service = new \Rebilly\Sdk\UsersService($client);

$applicationsPaginator = $service->applications()->getAllPaginator(filter: 'status:available', limit: 5);
foreach ($applicationsPaginator as $applicationPage) {
    printf("Applications page %d/%d\n", $applicationsPaginator->key() + 1, $applicationsPaginator->count());
    foreach ($applicationPage as $application) {
        printf("Application #%s (%s): %s\n", $application->getId(), $application->getStatus(), $application->getName());
    }
}

// OR

$applications = $service->applications()->getAll(filter: 'status:available');
foreach ($applications as $application) {
    printf("Application #%s (%s): %s\n", $application->getId(), $application->getStatus(), $application->getName());
}
