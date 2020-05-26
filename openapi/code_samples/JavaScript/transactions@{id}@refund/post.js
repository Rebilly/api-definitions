// define the refund amount
const data = {
    amount: 12.99
};

const refund = await api.transactions.switch({id: 'my-transaction-id', data});
console.log(refund.fields.status);