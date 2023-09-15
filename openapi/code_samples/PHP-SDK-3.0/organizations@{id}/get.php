<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$organization = $service->organizations()->get('organizationId');
