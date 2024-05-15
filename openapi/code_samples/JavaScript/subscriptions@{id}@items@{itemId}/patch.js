const data = {
  quantityFilled: 4,
};

const subscription = await api.subscription.updateItem({
  id: "subscription-id",
  itemId: "item-id",
  data,
});
