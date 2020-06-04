// Create a comment
const firstComment = await api
    .gatewayAccounts.createTimelineComment({id: 'my-gateway-id', data: {message: 'Your comment here'}});

// Using params object, mentions and references
const message = `Example of mentions @user@mydomain.com and references #customers-customer-id`;
const params = {
    id: 'my-gateway-id',
    data: {
        message,
    },
};
const secondComment = await api.gatewayAccounts.createTimelineComment(params);