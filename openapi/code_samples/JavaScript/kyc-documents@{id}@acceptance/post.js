const acceptedDocument = await api.kycDocuments.accept({id: 'my-second-id'});
console.log(acceptedDocument.fields.status);