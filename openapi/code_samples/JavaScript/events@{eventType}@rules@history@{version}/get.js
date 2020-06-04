// get version #2 details for this event ID
const history = await api.events.getRulesVersionNumber({eventType: 'risk-score-changed', version: 2});
// the history exposes the version number and its `createdTime`
console.log(history.fields.createdTime);