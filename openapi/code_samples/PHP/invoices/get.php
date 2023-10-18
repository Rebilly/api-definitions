<?php

$service = new \Rebilly\Sdk\CoreService($client);

$invoicesPaginator = $service->invoices()->getAllPaginator(filter: 'customerId:testCustomerId', limit: 5);
foreach ($invoicesPaginator as $invoicePage) {
    printf("Invoices page %d/%d\n", $invoicesPaginator->key() + 1, $invoicesPaginator->count());
    foreach ($invoicePage as $invoice) {
        printf("Invoice #%s (%s): %.2f\n", $invoice->getId(), $invoice->getStatus(), $invoice->getAmount());
    }
}

// OR

$invoices = $service->invoices()->getAll(filter: 'customerId:testCustomerId', limit: 100);
foreach ($invoices as $invoice) {
    printf("Invoice #%s (%s): %.2f\n", $invoice->getId(), $invoice->getStatus(), $invoice->getAmount());
}
