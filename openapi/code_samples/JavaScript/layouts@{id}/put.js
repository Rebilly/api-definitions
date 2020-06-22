// creating a layout
const data = {
    name: 'My plans layout',
    items: [
        {
            planId: 'foobar-0001', 
            starred: false
        },
        {
            planId: 'foobar-0002',
            // use the `starred` option to
            // mark a plan as being special, 
            // i.e. `our best plan`, or `most popular`
            // then use this feature in your integration 
            // to distinguish between `items`
            starred: true
        },
        {
            planId: 'foobar-0003', 
            starred: false
        }
    ]
};

// the ID is optional
const firstLayout = await api.layouts.create({data});

// or you can provide one
const secondLayout = await api.layouts.create({id: 'my-second-key', data});



// updating a layout
const data = {
    name: 'My better layout',
    items: [
        {
            planId: 'foobar-0002', 
            starred: true
        },
        {
            planId: 'foobar-0001',
            starred: false
        },
        {
            planId: 'foobar-0003', 
            starred: false
        }
    ]
};

const layout = await api.layouts.update({id: 'my-second-key', data});