<?php
$service =  new \Rebilly\Sdk\ReportsService($client);

$dataExport = new \Rebilly\Sdk\Model\Customers([
    'name' => 'Daily customer export',
    'format' => 'csv',
    'fields' => [
        'firstName',
        'lastName',
        'email',
        'lifetimeRevenue/amount',
        'lastPaymentTime',
        'createdTime',
    ],
    'recurring' => [
        'instruction' => 'RRULE:FREQ=DAILY',
    ],
    'dateRange' => [
        'start' => 'yesterday',
        'end' => 'today',
    ],
    'emailNotification' => [
        'user@example.com',
    ],
]);

$service->dataExports()->queue($dataExport);
