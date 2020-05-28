// define the attachment
const data = {
    // previously uploaded file ID
    fileId: 'my-file-id',
    relatedType: 'customer',
    relatedId: 'my-customer-id',
    name: 'an attachment',
    description: `the customer's file`
};

const attachment = await api.files.attach({data});
console.log(attachment.fields.id);