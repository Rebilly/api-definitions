// define at least one rule
const data = {
    rules: [
        {
            name: 'The One Rule',
            status: 'active',
            final: true,
            criteria: {},
            actions: [
                {
                     name: 'blocklist',
                     status: 'active',
                     type: 'email',
                     ttl: 789
                },
                {
                     name: 'stop-subscriptions',
                     status: 'active'
                }
            ]
        }

    ]
};

const ruleset = await api.events.createRules({eventType: 'risk-score-changed', data});
console.log(ruleset.fields.version);



// updating rules

// define the ruleset to override the current values within
// the event
const updateData = {
    rules: [
        {
            name: 'The One Rule',
            status: 'active',
            final: true,
            criteria: {},
            actions: [
                {
                     name: 'blocklist',
                     status: 'active',
                     type: 'email',
                     ttl: 789
                },
                {
                     name: 'stop-subscriptions',
                     status: 'active'
                }
            ]
        }

    ]
};

const updatedRuleset = await api.events.updateRules({eventType: 'risk-score-changed', data: updateData});
// each time the event's ruleset is modified
// the version number is incremented
console.log(updatedRuleset.fields.version);
