$service = new Rebilly\Sdk\UsersService($client);
$service->paymentInstruments()->deactivate('paymentInstrumentId');
