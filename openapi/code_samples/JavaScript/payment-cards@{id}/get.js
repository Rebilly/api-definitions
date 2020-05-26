const paymentCard = await api.paymentCards.get({id: 'foobar-001'});
console.log(paymentCard.fields.customerId);