<?php

$service = new \Rebilly\Sdk\Service($client);

$fileForm = new \Rebilly\Sdk\Model\FileCreateFromUrl();
$fileForm->setUrl('http://test.com/somefile.jpg');

try {
    $file = $service->files()->upload($fileForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
