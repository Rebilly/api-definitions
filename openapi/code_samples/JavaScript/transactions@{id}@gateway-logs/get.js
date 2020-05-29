const collection = await api.transactions.getGatewayLogs({id: 'my-transaction-id'});
collection.items.forEach(log => console.log(log.fields.url));