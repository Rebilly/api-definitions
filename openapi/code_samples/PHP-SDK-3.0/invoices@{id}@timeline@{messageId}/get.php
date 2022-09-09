$service = new Rebilly\Sdk\CoreService($client);
$timelineMessage = $service->invoices()->getTimelineMessage('invoiceId', 'messageId');
