// creating a new product
const data = {
    name: 'my first product',
    description: 'made to be of the highest quality',
    taxCategoryId: '',
    requiresShipping: true,
    accountingCode: '100',
    customFields: []
};

// the ID is optional
const firstProduct = await api.products.create({data});

// or you can provide one
const secondProduct = await api.products.create({id: 'my-second-key', data});



// updating a product
const data = {
    name: 'my first product',
    description: 'made to be of the highest quality',
    taxCategoryId: '20010',
    requiresShipping: false,
    accountingCode: '77',
    customFields: []
};

const product = await api.products.update({id: 'my-second-key', data});