$cashierStrategyForm = new Rebilly\Entities\Cashier\CashierStrategy();
$cashierStrategyForm->setName('testName');
$cashierStrategyForm->setFilter('cashierRequest.currency:USD');

$cashierStrategyAmount = Rebilly\Entity\Cashier\CashierStrategyAmounts::createFromData([
    'calculator' => Rebilly\Entity\Cashier\CashierStrategyAmounts::CALCULATOR_PERCENT,
    'baseAmount' => 10,
    'increments' => [10, 20 ,30],
    'adjustBaseToLastDeposit' => false,
]); 

$cashierStrategyForm->setAmounts($cashierStrategyAmount);

$customAmount = Rebilly\Entities\Cashier\CustomAmount::createFromData([
    'minimum' => 5,
    'maximum' => 10,
    'multipleOf' => 1,
]);

$cashierStrategyForm->setCustomAmounts($cashierStrategyAmount);

try {
    $cashierStrategy = $client->cashierStrategies()->create($cashierStrategyForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
