<?php

$service = new \Rebilly\Sdk\Service($client);

$listsPaginator = $service->lists()->getAllPaginator(limit: 5, filter: 'description:testDescription');
foreach ($listsPaginator as $listPage) {
    printf("Lists page %d/%d\n", $listsPaginator->key() + 1, $listsPaginator->count());
    foreach ($listPage as $list) {
        printf("List #%s (%s): %s\n", $list->getId(), $list->getDescription(), $list->getVersion());
    }
}

// OR

$lists = $service->lists()->getAll(filter: 'description:testDescription');
foreach ($lists as $list) {
    printf("List #%s (%s): %s\n", $list->getId(), $list->getDescription(), $list->getVersion());
}
