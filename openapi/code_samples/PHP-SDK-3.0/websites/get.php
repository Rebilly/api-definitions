<?php
$service =  new \Rebilly\Sdk\UsersService($client);

$websitesPaginator = $service->websites()->getAllPaginator(limit:  5, filter: 'name:TestWebsite');
foreach ($websitesPaginator as $websitesPage) {
    printf("Websites page %d/%d\n", $websitesPaginator->key() + 1, $websitesPaginator->count());
    foreach ($websitesPage as $website) {
        printf("Website #%s: %s\n", $website->getId(), $website->getName());
    }
}

// OR

$websites = $service->websites()->getAll(filter: 'name:TestWebsite');
foreach ($websites as $website) {
    printf("Website #%s: %s\n", $website->getId(), $website->getName());
}
