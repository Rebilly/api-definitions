const lead = await api.customers.getLeadSource({id: 'my-second-id'});
console.log(lead.fields.affiliate);