const checkoutPage = await api.checkoutPages.get({id: 'foobar-001'});
console.log(checkoutPage.fields.status);