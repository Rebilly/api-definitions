$blocklistForm = new Rebilly\Entities\Blocklist();
$blocklistForm->setType($blocklistForm::TYPE_EMAIL);
$blocklistForm->setValue('test@test.com');
$blocklistForm->setExpiredTime('2025-01-01 05:00:00');

try {
    $blocklist = $client->blocklists()->create($blocklistForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
