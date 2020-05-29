const invoice = await api.invoices.get({id: 'foobar-001'});
console.log(invoice.fields.primaryAddress.firstName);


// alternatively, download as a PDF file
const pdf = await api.invoices.downloadPDF({id: 'foobar-001'});
// the invoice's data in arraybuffer format
console.log(pdf.data);