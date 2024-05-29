<?php

$service = new \Rebilly\Sdk\Service($client);

$organizationForm = new \Rebilly\Sdk\Model\PatchOrganizationRequest();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

try {
    $organization = $service->organizations()->update('organizationId', $organizationForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
