<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$transactionRefund = new \Rebilly\Sdk\Model\TransactionRefund();
$transactionRefund->setAmount(1.99);

$transaction = $service->transactions()->refund('transactionId', $transactionRefund);
