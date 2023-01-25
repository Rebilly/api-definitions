const data = {
    type: 'document-expired',
    message: 'Document is expired'
}
const rejectedDocument = await api.kycDocuments.reject({id: 'my-second-id', data});
console.log(rejectedDocument.fields.rejectionReason.type);