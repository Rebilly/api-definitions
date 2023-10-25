<?php

$service = new \Rebilly\Sdk\CoreService($client);

$tagsPaginator = $service->tags()->getAllPaginator(limit: 5);
foreach ($tagsPaginator as $tagPage) {
    printf("Tags page %d/%d\n", $tagsPaginator->key() + 1, $tagsPaginator->count());
    foreach ($tagPage as $tag) {
        printf("Tag #%s: %s\n", $tag->getId(), $tag->getName());
    }
}

// OR

$tags = $service->tags()->getAll();
foreach ($tags as $tag) {
    printf("Tag #%s: %s\n", $tag->getId(), $tag->getName());
}
