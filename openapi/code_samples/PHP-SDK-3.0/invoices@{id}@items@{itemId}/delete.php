$service = new \Rebilly\Sdk\CoreService($client);
$service->invoices()->deleteInvoiceItem('invoiceId', 'invoiceItemId');
