(() => {
  const page = document.querySelector('[data-checkout-page]');
  if (!page) return;

  const money = value => new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(value);
  const locationId = page.dataset.locationId || 'jacksonville';
  const storageKey = `5th-element:cart:v1:${locationId}`;
  const form = page.querySelector('[data-checkout-form]');
  const layout = page.querySelector('[data-checkout-layout]');
  const empty = page.querySelector('[data-checkout-empty]');
  const confirmation = page.querySelector('[data-checkout-confirmation]');
  const itemsNode = page.querySelector('[data-checkout-items]');
  const subtotalNode = page.querySelector('[data-checkout-subtotal]');
  const totalNode = page.querySelector('[data-checkout-total]');
  const validation = page.querySelector('[data-checkout-validation]');
  const deliveryFields = page.querySelector('[data-delivery-fields]');
  const cardFields = page.querySelector('[data-card-fields]');
  let items = [];

  const readItems = () => {
    try {
      const stored = JSON.parse(localStorage.getItem(storageKey) || '[]');
      return Array.isArray(stored) ? stored.filter(item => item && item.key && Number.isFinite(Number(item.price)) && Number(item.quantity) > 0).map(item => ({ ...item, price: Number(item.price), quantity: Math.min(999, Math.max(1, Math.floor(Number(item.quantity)))) })) : [];
    } catch (error) { return []; }
  };
  const saveItems = () => { try { localStorage.setItem(storageKey, JSON.stringify(items)); } catch (error) { /* Display remains available for this visit. */ } };
  const total = () => items.reduce((sum, item) => sum + item.price * item.quantity, 0);
  const text = (tag, value, className) => { const element = document.createElement(tag); element.textContent = value; if (className) element.className = className; return element; };

  function changeQuantity(key, next) {
    const item = items.find(entry => entry.key === key);
    if (!item) return;
    item.quantity = Math.floor(Number(next) || 0);
    if (item.quantity < 1) items = items.filter(entry => entry.key !== key);
    else item.quantity = Math.min(999, item.quantity);
    saveItems();
    render();
  }

  function render() {
    const hasItems = items.length > 0;
    layout.hidden = !hasItems;
    empty.hidden = hasItems;
    if (!hasItems) return;
    itemsNode.replaceChildren();
    items.forEach(item => {
      const row = document.createElement('article'); row.className = 'checkout-line-item';
      const copy = document.createElement('div');
      copy.append(text('h3', item.name), text('p', `${item.label || 'Per item'}${item.people ? ` · ${item.people}` : ''}`));
      const controls = document.createElement('div'); controls.className = 'checkout-quantity';
      const decrease = text('button', '−'); decrease.type = 'button'; decrease.setAttribute('aria-label', `Reduce ${item.name}`); decrease.addEventListener('click', () => changeQuantity(item.key, item.quantity - 1));
      const quantity = text('span', String(item.quantity)); quantity.setAttribute('aria-label', `${item.quantity} ${item.quantity === 1 ? 'item' : 'items'}`);
      const increase = text('button', '+'); increase.type = 'button'; increase.setAttribute('aria-label', `Increase ${item.name}`); increase.addEventListener('click', () => changeQuantity(item.key, item.quantity + 1));
      controls.append(decrease, quantity, increase);
      row.append(copy, controls, text('strong', money(item.price * item.quantity)));
      itemsNode.append(row);
    });
    subtotalNode.textContent = money(total());
    totalNode.textContent = money(total());
  }

  function setConditionalFields() {
    const delivery = form.elements.fulfilment.value === 'delivery';
    deliveryFields.hidden = !delivery;
    page.querySelectorAll('[data-delivery-required]').forEach(field => { field.required = delivery; });
    const card = form.elements.payment.value === 'card';
    cardFields.hidden = !card;
    page.querySelectorAll('[data-card-required]').forEach(field => { field.required = card; });
  }

  function validatePayment() {
    const cardNumber = form.querySelector('[data-card-number]');
    const expiry = form.querySelector('[data-card-expiry]');
    const cvc = form.querySelector('[data-card-cvc]');
    cardNumber.setCustomValidity(''); expiry.setCustomValidity(''); cvc.setCustomValidity('');
    if (form.elements.payment.value !== 'card') return true;
    const digits = cardNumber.value.replace(/\D/g, '');
    if (digits.length < 12 || digits.length > 19) cardNumber.setCustomValidity('Enter a valid card number.');
    if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiry.value.trim())) expiry.setCustomValidity('Use MM/YY format.');
    if (!/^\d{3,4}$/.test(cvc.value.trim())) cvc.setCustomValidity('Enter a 3 or 4 digit security code.');
    return cardNumber.checkValidity() && expiry.checkValidity() && cvc.checkValidity();
  }

  form.querySelectorAll('input[name="fulfilment"], input[name="payment"]').forEach(input => input.addEventListener('change', setConditionalFields));
  form.querySelector('[data-card-number]').addEventListener('input', event => { event.currentTarget.value = event.currentTarget.value.replace(/[^\d ]/g, '').replace(/(.{4})/g, '$1 ').trim(); });
  form.querySelector('[data-card-expiry]').addEventListener('input', event => { const digits = event.currentTarget.value.replace(/\D/g, '').slice(0, 4); event.currentTarget.value = digits.length > 2 ? `${digits.slice(0, 2)}/${digits.slice(2)}` : digits; });
  form.addEventListener('submit', event => {
    event.preventDefault(); validation.textContent = ''; validatePayment();
    if (!form.checkValidity()) { validation.textContent = 'Please complete the required fields before submitting your order.'; form.querySelector(':invalid')?.focus(); return; }
    if (!items.length) { render(); return; }
    const data = new FormData(form); const reference = `FE-${String(Date.now()).slice(-7)}`;
    const order = { reference, locationId, locationName: page.dataset.locationName, submittedAt: new Date().toISOString(), customer: { name: data.get('name'), email: data.get('email'), phone: data.get('phone') }, fulfilment: data.get('fulfilment'), payment: data.get('payment'), items: items.map(item => ({ key: item.key, name: item.name, label: item.label, people: item.people, price: item.price, quantity: item.quantity })), total: total() };
    try { localStorage.setItem('5th-element:last-order', JSON.stringify(order)); localStorage.removeItem(storageKey); } catch (error) { /* Confirmation remains visible without storage. */ }
    page.querySelector('[data-confirmation-name]').textContent = String(order.customer.name);
    page.querySelector('[data-confirmation-reference]').textContent = reference;
    const count = items.reduce((sum, item) => sum + item.quantity, 0);
    const details = page.querySelector('[data-confirmation-details]');
    details.replaceChildren(text('p', `${count} item${count === 1 ? '' : 's'} · ${money(order.total)}`), text('p', order.fulfilment === 'delivery' ? 'Delivery details have been included with your request.' : 'Your order is marked for restaurant pickup.'));
    layout.hidden = true; empty.hidden = true; confirmation.hidden = false; confirmation.focus();
  });

  items = readItems(); setConditionalFields(); render();
})();
