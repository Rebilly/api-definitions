<?php
$service =  new \Rebilly\Sdk\CoreService($client);
$service->blocklists()->delete('blocklistId');
