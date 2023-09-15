<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$website = $service->websites()->get('websiteId');
