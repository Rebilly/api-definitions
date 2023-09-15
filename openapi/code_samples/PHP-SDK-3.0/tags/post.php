<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$tagForm = new \Rebilly\Sdk\Model\Tag();
$tagForm->setName('tag-name')
$tagForm->setType(\Rebilly\Sdk\Model\Tag::TYPE_CUSTOMER);

try {
    $service->tags()->create($tagForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
