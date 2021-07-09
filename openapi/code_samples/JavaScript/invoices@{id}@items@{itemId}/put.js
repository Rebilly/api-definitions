// first set the properties for the new invoice item
const data = {
    type: 'debit',
    unitPrice: 5
};

const invoiceItem = await api.invoices.updateInvoiceItem({id: 'id', itemId: 'itemId', data});
