$service = new Rebilly\Sdk\CoreService($client);
$cancellation = $service->subscriptionCancellations()->get('cancellationId');
