<?php

$service = new \Rebilly\Sdk\CoreService($client);

$customFieldsPaginator = $service->customFields()->getAllPaginator(resource: 'customers', limit: 5);
foreach ($customFieldsPaginator as $customFieldPage) {
    printf("Custom fields page %d/%d\n", $customFieldsPaginator->key() + 1, $customFieldsPaginator->count());
    foreach ($customFieldPage as $customField) {
        printf("Custom field #%s: %s\n", $customField->getName(), $customField->getDescription());
    }
}

// OR

$customFields = $service->customFields()->getAll('customers');
foreach ($customFields as $customField) {
    printf("Custom field #%s: %s\n", $customField->getName(), $customField->getDescription());
}
