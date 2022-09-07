$service = new Rebilly\Sdk\CoreService($client);

$authenticationOptionsForm = new Rebilly\Sdk\Model\AuthenticationOptions();
// Regular expression below matches any password with 6+ length that contains alphabet symbols and/or numbers.
$authenticationOptionsForm->setPasswordPattern('/^[a-zA-Z0-9]{6,}$/');

try {
    $authenticationOptions = $service->customerAuthentication()->updateAuthOptions($authenticationOptionsForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
