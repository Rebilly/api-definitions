<?php

$service = new \Rebilly\Sdk\ReportsService($client);

$service->dataExports()->delete('dataExportId');
