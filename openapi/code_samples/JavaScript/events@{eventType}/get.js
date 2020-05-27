const eventDetails = await api.events.get({eventType: 'gateway-account-created'});
console.log(eventDetails.fields.rulesCount);