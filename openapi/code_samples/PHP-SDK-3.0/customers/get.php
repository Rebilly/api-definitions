<?php

$service = new \Rebilly\Sdk\CoreService($client);

$customersPaginator = $service->customers()->getAllPaginator(limit: 5);
foreach ($customersPaginator as $customerPage) {
    printf("Customers page %d/%d\n", $customersPaginator->key() + 1, $customersPaginator->count());
    foreach ($customerPage as $customer) {
        printf("Customer #%s: %s\n", $customer->getId(), $customer->getFirstName());
    }
}

// OR

$customers = $service->customers()->getAll(filter: 'firstName:John');
foreach ($customers as $customer) {
    printf("Customer #%s: %s\n", $customer->getId(), $customer->getFirstName());
}
