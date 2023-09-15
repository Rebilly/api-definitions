<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$applicationInstances = $service->applicationInstances()->get('applicationId');
