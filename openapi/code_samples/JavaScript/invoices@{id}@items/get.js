// get the top 20 invoice items for this ID
const invoiceItems = await api.invoices.getAllInvoiceItems({id: 'my-invoice-id', limit: 20});
invoiceItems.items.forEach(item => console.log(item.fields.description));