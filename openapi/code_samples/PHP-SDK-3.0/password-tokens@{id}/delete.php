$service = new Rebilly\Sdk\Service($client);

$client->customerAuthentication()->deleteResetPasswordToken('tokenId');
