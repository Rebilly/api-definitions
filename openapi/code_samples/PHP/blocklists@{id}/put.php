<?php

$service = new \Rebilly\Sdk\Service($client);

$blocklistForm = new \Rebilly\Sdk\Model\Blocklist();
$blocklistForm->setType($blocklistForm::TYPE_EMAIL);
$blocklistForm->setValue('test@test.com');
$blocklistForm->setExpirationTime('2025-01-01 05:00:00');

try {
    $blocklist = $service->blocklists()->update('blocklistId', $blocklistForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
