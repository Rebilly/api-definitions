const abandonedInvoice = await api.invoices.abandon({id: 'my-invoice-id'});
console.log(abandonedInvoice.fields.status);