const dispute = await api.disputes.get({id: 'foobar-001'});
console.log(dispute.fields.firstName);