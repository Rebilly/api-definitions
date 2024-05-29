<?php

$service = new \Rebilly\Sdk\Service($client);

$customerCredential = $service->customerAuthentication()->getCredential('credentialId');
