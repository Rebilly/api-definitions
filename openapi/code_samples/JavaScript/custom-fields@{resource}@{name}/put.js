// creating a custom field
const data = {
    name: 'Date of Birth',
    type: 'date',
    description: `The customer's date of birth`
};

// define the entire payload
const params = {resource: 'customers', name: 'dob', data};

// create the custom field
const customField = await api.customFields.create(params);

// or update the custom field
const customField = await api.customFields.update(params);
console.log(customField.fields.name);
