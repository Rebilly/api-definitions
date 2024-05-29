<?php

$service = new \Rebilly\Sdk\Service($client);

$service->dataExports()->delete('dataExportId');
