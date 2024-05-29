<?php

$service = new \Rebilly\Sdk\Service($client);

$dataExport = $service->dataExports()->get('dataExportId');
