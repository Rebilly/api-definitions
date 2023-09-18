<?php

$service = new \Rebilly\Sdk\CoreService($client);

$invoiceReissue = new \Rebilly\Sdk\Model\InvoiceReissue([
    'dueTime' => '2025-01-01 05:00:00',
]);

try {
    $invoiceReissue = $service->invoices()->reissue('invoiceId', $invoiceReissue);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
