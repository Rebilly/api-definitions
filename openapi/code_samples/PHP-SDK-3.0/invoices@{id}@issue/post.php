$service = new Rebilly\Sdk\CoreService($client);
$invoice = $service->invoices()->issue('invoiceId', new InvoiceIssue([
    'issuedTime' => '2025-01-01 05:00:00',
]));
