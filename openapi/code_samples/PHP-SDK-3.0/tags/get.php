<?php

$service = new \Rebilly\Sdk\CoreService($client);

$tags = $service->tags()->getAll();
