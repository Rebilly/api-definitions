// define the values to update
const data = {
    name: 'Best checkout page'
};

const checkoutPage = await api.checkoutPages.update({id: 'my-second-id', data});