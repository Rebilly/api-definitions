<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$service->applicationInstances()->delete('applicationId');
