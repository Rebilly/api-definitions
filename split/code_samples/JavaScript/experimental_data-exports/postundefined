// first prepare the details of the export
const data = {
    name: 'my-first-export',
    // only CSV is currently supported
    format: 'csv',
    // define filters, criteria, etc. 
    // to reduce the amount of values exported
    arguments: {},
    dateRange: {
        range: 'all'
    },
    // list email addresses that will receive
    //  a notification once the download is ready
    emailNotification: ['']
};

const queuedExport = await api.exports.queue({resource: 'transaction', data});
console.log(queuedExport.fields.status);