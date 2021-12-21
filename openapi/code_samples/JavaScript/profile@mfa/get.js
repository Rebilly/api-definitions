const mfa = await api.profile.getMfa();
console.log(mfa.fields.status, mfa.fields.type, mfa.fields.lastAuthTime);
