<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$timelineMessage = new \Rebilly\Sdk\Model\InvoiceTimeline([
    'message' => 'Automatic message',
]);

try {
    $timelineMessage = $service->invoices()->createTimelineComment('invoiceId', $timelineMessage);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
