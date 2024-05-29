<?php

$service = new \Rebilly\Sdk\Service($client);

$transactionsPaginator = $service->transactions()->getAllPaginator(limit: 5, filter: 'result:approved');
foreach ($transactionsPaginator as $transactionsPage) {
    printf("Transactions page %d/%d\n", $transactionsPaginator->key() + 1, $transactionsPaginator->count());
    foreach ($transactionsPage as $transaction) {
        printf("Transaction #%s (%s): %s\n", $transaction->getId(), $transaction->getStatus(), $transaction->getDescription());
    }
}

// OR

$transactions = $service->transactions()->getAll(filter: 'result:approved');
foreach ($transactions as $transaction) {
    printf("Transaction #%s (%s): %s\n", $transaction->getId(), $transaction->getStatus(), $transaction->getDescription());
}
