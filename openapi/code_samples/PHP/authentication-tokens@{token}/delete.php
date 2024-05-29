<?php

$service = new \Rebilly\Sdk\Service($client);

$service->customerAuthentication()->logout('token');
