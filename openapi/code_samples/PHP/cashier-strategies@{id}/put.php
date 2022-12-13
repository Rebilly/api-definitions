$cashierStrategyForm = new Rebilly\Entities\Cashier\CashierStrategy();
$cashierStrategyForm->setName('testNameChange');
$cashierStrategyForm->setFilter('cashierRequest.currency:EUR')

try {
    $cashierStrategy = $client->cashierStrategies()->update('cashierStrategyId', $cashierStrategyForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
