<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$application = $service->applications()->get('applicationId');
