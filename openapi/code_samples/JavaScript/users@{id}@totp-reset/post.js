const profile = await api.users.resetTotp({id: 'my-second-key'});
console.log(profile.users.toptSecret);