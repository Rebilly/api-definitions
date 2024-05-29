<?php

$service = new \Rebilly\Sdk\Service($client);

$service->customerAuthentication()->deleteCredential('credentialId');
