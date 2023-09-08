$service = new Rebilly\Sdk\CoreService($client);

$blocklistForm = new Rebilly\Sdk\Model\Blocklist();
$blocklistForm->setType($blocklistForm::TYPE_EMAIL);
$blocklistForm->setValue('test@test.com');
$blocklistForm->setExpirationTime('2025-01-01 05:00:00');

$blocklist = $service->blocklists()->update('blocklistId', $blocklistForm);
