<?php

$service = new \Rebilly\Sdk\CoreService($client);

$blocklistsPaginator = $service->blocklists()->getAllPaginator(limit: 5, filter: 'value:testValue');
foreach ($blocklistsPaginator as $blocklistPage) {
    printf("Blocklists page %d/%d\n", $blocklistsPaginator->key() + 1, $blocklistsPaginator->count());
    foreach ($blocklistPage as $blocklist) {
        printf("Blocklist #%s (%s): %s\n", $blocklist->getId(), $blocklist->getType(), $blocklist->getValue());
    }
}

// OR

$blocklists = $service->blocklists()->getAll(filter: 'value:testValue');
foreach ($blocklists as $blocklist) {
    printf("Blocklist #%s (%s): %s\n", $blocklist->getId(), $blocklist->getType(), $blocklist->getValue());
}
