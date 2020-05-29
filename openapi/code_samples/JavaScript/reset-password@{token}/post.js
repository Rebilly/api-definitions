const token = '4f6cf35x2c4y483za0a9158621f77a21';

// define values to update
const data = {
    newPassword: 'newUserPassword123'
};

const user = await api.users.resetPassword({token, data});