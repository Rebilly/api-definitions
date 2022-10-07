$service = new Rebilly\Sdk\CoreService($client);
$invoice = $service->invoices()->abandon('invoiceId');
