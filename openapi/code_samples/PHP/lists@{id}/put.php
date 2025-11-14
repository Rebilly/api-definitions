<?php

$service = new \Rebilly\Sdk\Service($client);

$list = \Rebilly\Sdk\Model\ValueList::from()
    ->setDescription('testDescription')
    ->setValues(['value1', 'value2', 'value3']);

try {
    $list = $service->lists()->update('listId', $list);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
