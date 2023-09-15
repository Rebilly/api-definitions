<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$applicationInstance = $service->applicationInstances()->get('applicationId');
