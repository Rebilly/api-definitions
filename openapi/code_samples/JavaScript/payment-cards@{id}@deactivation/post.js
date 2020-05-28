const paymentCard = await api.paymentCards.deactivate({id: 'my-second-key'});
console.log(paymentCard.fields.status);