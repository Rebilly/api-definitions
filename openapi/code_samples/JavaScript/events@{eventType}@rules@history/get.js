// get the latest 20 versions for this event ID
const history = await api.events.getRulesVersionNumber({eventType: 'risk-score-changed', limit: 20});
// each item exposes the version and `createdTime`
history.items.forEach(edit => console.log(edit.fields.version));