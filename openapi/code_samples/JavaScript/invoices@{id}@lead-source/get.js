const lead = await api.invoices.getLeadSource({id: 'my-second-id'});
console.log(lead.fields.affiliate);