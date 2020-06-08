// first set the required properties for
// the new gateway account downtime schedule
const data = {
    startTime: '2018-08-02T15:13:23Z',
    endTime: '2018-08-02T15:13:23Z'
};

// the gateway ID is required
const secondKey = await api.gatewayAccounts.createDowntimeSchedule({id: 'my-second-id', data});