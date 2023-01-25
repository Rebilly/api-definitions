// Create a comment
const firstComment = await api
    .invoices.createTimelineComment({id: 'my-invoice-id', data: {message: 'Your comment here'}});

// Using params object, mentions and references
const message = `Example of mentions @user@mydomain.com and references #invoice-subscription-id`;
const params = {
    id: 'my-invoice-id',
    data: {
        message,
    },
};
const secondComment = await api.invoices.createTimelineComment(params);