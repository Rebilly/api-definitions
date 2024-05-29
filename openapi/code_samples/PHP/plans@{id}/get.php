<?php

$service = new \Rebilly\Sdk\Service($client);
$plan = $service->plans()->get('planId');
