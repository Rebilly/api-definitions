const data = {
  quantityFilled: 4,
};

const order = await api.order.updateItem({
  id: "order-id",
  itemId: "item-id",
  data,
});
