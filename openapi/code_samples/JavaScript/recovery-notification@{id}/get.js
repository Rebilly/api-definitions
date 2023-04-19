const recoveryNotification = await api.recoveryNotifications.get({id: 'foobar-001'});
console.log(recoveryNotification.fields.title);
