const document = await api.kycDocuments.get({id: 'foobar-001'});
console.log(document.fields.documentType);