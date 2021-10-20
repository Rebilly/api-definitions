$kycSettingsForm = new Rebilly\Entities\KycSettings();
$kycSettingsForm->setRequireDateOfBirth(true);

try {
    $kycSettings = $client->kycSettings()->update($kycSettingsForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
