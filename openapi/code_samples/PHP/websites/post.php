<?php

$service = new \Rebilly\Sdk\Service($client);

$websiteForm = new \Rebilly\Sdk\Model\Website();
$websiteForm->setName('TestWebsite');
$websiteForm->setUrl('http://testwebsite.com');
$websiteForm->setServicePhone('+0123456789');
$websiteForm->setServiceEmail('test@testwebsite.com');

try {
    $website = $service->websites()->create($websiteForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
