const params = {
    id: 'my-invoice-id', 
    transactionId: 'my-transaction-id',
    amount: 12,99 
};

const invoice = await api.invoices.applyTransaction(params);
