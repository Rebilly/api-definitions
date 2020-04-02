$layoutForm = new Rebilly\Entities\Layout();
$layoutItemForm = new Rebilly\Entities\LayoutItem();

$layoutItemForm->setPlanId('planId');
$layoutItemForm->setStarred(false);

$layoutForm->setName('TestLayout');
$layoutForm->setLayoutItems([
    $layoutItemForm,
]);

try {
    $layout = $client->layouts()->create($layoutForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
