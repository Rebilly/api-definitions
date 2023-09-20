<?php

$service = new \Rebilly\Sdk\CoreService($client);
$plan = $service->plans()->get('planId');
