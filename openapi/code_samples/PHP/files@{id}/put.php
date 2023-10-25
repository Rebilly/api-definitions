<?php

$service = new \Rebilly\Sdk\CoreService($client);
$fileForm = new \Rebilly\Sdk\Model\File();
$fileForm->setDescription('This is a test file');

try {
    $file = $service->files()->update('fileId', $fileForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
