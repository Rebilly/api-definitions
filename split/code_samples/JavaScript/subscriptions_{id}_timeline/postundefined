// Create a comment
const firstComment = await api
    .subscriptions.createTimelineComment({id: 'my-subscription-id', data: {message: 'Your comment here'}});

// Using params object, mentions and references
const message = `Example of mentions @user@mydomain.com and references #subscriptions-subscription-id`;
const params = {
    id: 'my-subscription-id',
    data: {
        message,
    },
};
const secondComment = await api.subscriptions.createTimelineComment(params);