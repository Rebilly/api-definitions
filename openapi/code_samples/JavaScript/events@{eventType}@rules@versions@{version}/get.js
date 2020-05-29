// get version #2 for this event ID
const version = await api.events.getRulesVersionDetail({eventType: 'risk-score-changed', version: 2});
// the version exposes the ruleset 
console.log(version.fields.rules);