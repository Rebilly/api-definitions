<?php

$service = new \Rebilly\Sdk\Service($client);

$apiKeysPaginator = $service->apiKeys()->getAllPaginator(limit: 5);
foreach ($apiKeysPaginator as $apiKeysPage) {
    printf("ApiKeys page %d/%d\n", $apiKeysPaginator->key() + 1, $apiKeysPaginator->count());
    foreach ($apiKeysPage as $apiKey) {
        printf("ApiKey #%s: %s\n", $apiKey->getId(), $apiKey->getDescription());
    }
}

// OR

$apiKeys = $service->apiKeys()->getAll();
foreach ($apiKeys as $apiKey) {
    printf("ApiKey #%s: %s\n", $apiKey->getId(), $apiKey->getDescription());
}
