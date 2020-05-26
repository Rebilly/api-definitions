const voidedInvoice = await api.invoices.void({id: 'my-invoice-id'});
console.log(voidedInvoice.fields.status);