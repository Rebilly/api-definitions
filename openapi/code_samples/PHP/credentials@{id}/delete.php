<?php

$service = new \Rebilly\Sdk\CoreService($client);

$service->customerAuthentication()->deleteCredential('credentialId');
