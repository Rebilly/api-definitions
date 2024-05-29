<?php

$service = new \Rebilly\Sdk\Service($client);

$paymentInstrumentsPaginator = $service->paymentInstruments()->getAllPaginator(
    filter: 'status:active;method:payment-card',
    limit: 5
);
foreach ($paymentInstrumentsPaginator as $paymentInstrumentsPage) {
    printf("Payment instruments page %d/%d\n", $paymentInstrumentsPaginator->key() + 1, $paymentInstrumentsPaginator->count());
    foreach ($paymentInstrumentsPage as $paymentInstrument) {
        printf("Payment instrument #%s\n", $paymentInstrument->getId());
    }
}

// OR

$paymentInstruments = $service->paymentInstruments()->getAll(filter: 'status:active;method:payment-card');
foreach ($paymentInstruments as $paymentInstrument) {
    printf("Payment instrument #%s\n", $paymentInstrument->getId());
}
