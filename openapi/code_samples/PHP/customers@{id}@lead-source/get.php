$customer = $client->customers()->load('myCustomerId');
$leadSource = $customer->getLeadSource();
