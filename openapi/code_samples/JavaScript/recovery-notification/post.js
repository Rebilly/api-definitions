// first set the properties for the new recovery notification
const data = {
    title: 'First reminder',
    filter: 'transaction.amount:50..',
    timeDelta: 5,
    notification: {
        from: 'hello@merchant.com',
        subject: 'Recovery email',
        html: '<html>Your order is waiting</html>',
        text: 'Your order is waiting',
    }
};

// the ID is optional
const firstInvoice = await api.recoveryNotifications.create({data});

// or you can provide one
const secondInvoice = await api.recoveryNotifications.create({id: 'my-second-id', data});
