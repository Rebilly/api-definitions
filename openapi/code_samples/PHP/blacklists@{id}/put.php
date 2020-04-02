$blacklistForm = new Rebilly\Entities\Blacklist();
$blacklistForm->setType($blacklistForm::TYPE_EMAIL);
$blacklistForm->setValue('test@test.com');
$blacklistForm->setExpiredTime('2025-01-01 05:00:00');

try {
    $blacklist = $client->blacklists()->create($blacklistForm, 'blacklistId');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
