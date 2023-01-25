// creating a list
const data = {
    name: 'My value list',
    values: [
        'foobar-0001', 'foobar-0002',  'foobar-0003',
        'foobar-0004', 'foobar-0005', 'foobar-0006'  
    ]
};

// the ID is optional
const firstList = await api.lists.create({data});

// or you can provide one
const secondList = await api.lists.create({id: 'my-second-key', data});



// updating a list
const data = {
    name: 'My better list',
    values: [
        'foobar-0004', 'foobar-0005', 'foobar-0006'  
    ]
};

const list = await api.lists.update({id: 'my-second-key', data});