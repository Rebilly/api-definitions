// Create a comment
const firstComment = await api
    .transactions.createTimelineComment({id: 'my-transaction-id', data: {message: 'Your comment here'}});

// Using params object, mentions and references
const message = `Example of mentions @user@mydomain.com and references #transactions-transaction-id`;
const params = {
    id: 'my-transaction-id',
    data: {
        message,
    },
};
const secondComment = await api.transactions.createTimelineComment(params);