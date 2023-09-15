<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$user = $service->users()->get('userId');
