<?php

$service = new \Rebilly\Sdk\Service($client);
$service->plans()->delete('planId');
