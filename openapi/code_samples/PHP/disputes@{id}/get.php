<?php

$service = new \Rebilly\Sdk\Service($client);
$dispute = $service->disputes()->get('disputeId');
