module.exports = SortOrder

function SortOrder(items, {property = null, direction = 'asc', ignoreCase = false}, {baseLocation}) {
  const isInOrder = direction === 'asc'
    ? (previous, current) => previous <= current
    : (previous, current) => previous >= current;
  
  const errors = [];
  let previousValue = resolveValue(items[0], property, ignoreCase);
  for (let i = 1; i < items.length; ++i) {
    let currentValue = resolveValue(items[i], property, ignoreCase);
    if (!isInOrder(previousValue, currentValue)) {
      const location = baseLocation.child(i);
      errors.push({
        message: `Values must be in an ${direction === 'asc' ? 'ascending' : 'descending'} order`,
        location: property !== null ? location.child(property) : location,
      });
    }
    previousValue = currentValue;
  }

  return errors;
}

function resolveValue(item, property, ignoreCase) {
  const value = property !== null ? item[property] : item;

  return ignoreCase ? value.toLowerCase() : value;
}