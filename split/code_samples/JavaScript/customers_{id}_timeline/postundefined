// Create a comment
const firstComment = await api
    .customers.createTimelineComment({id: 'my-customer-id', data: {message: 'Your comment here'}});

// Using params object, mentions and references
const message = `Example of mentions @user@mydomain.com and references #customers-customer-id`;
const params = {
    id: 'my-customer-id',
    data: {
        message,
    },
};
const secondComment = await api.customers.createTimelineComment(params);