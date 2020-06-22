const request = await api.subscriptions
    .deleteTimelineMessage({id: 'foobar-001', messageId: 'message-202'});

// the request does not return any fields but
// you can confirm the success using the status code
console.log(request.response.status); // 204