<?php

$service = new \Rebilly\Sdk\CoreService($client);

$filesPaginator = $service->files()->getAllPaginator(limit: 5, filter: 'name:TestFile');
foreach ($filesPaginator as $filesPage) {
    printf("Files page %d/%d\n", $filesPaginator->key() + 1, $filesPaginator->count());
    foreach ($filesPage as $file) {
        printf("File #%s: %s\n", $file->getId(), $file->getName());
    }
}

// OR

$files = $service->files()->getAll(filter: 'name:TestFile');
foreach ($files as $file) {
    printf("File #%s: %s\n", $file->getId(), $file->getName());
}
