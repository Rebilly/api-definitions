$service = new Rebilly\Sdk\UsersService($client);
$paymentInstrument = $service->paymentInstruments()->get('paymentInstrumentId');
