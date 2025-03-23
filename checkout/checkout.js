let cart = JSON.parse(localStorage.getItem('cart')) || []
console.log(cart)
function updateCheckoutPage() {
  let cartItemsContainer = document.getElementById('cart-items')
  let totalPrice = 0
  cartItemsContainer.innerHTML = ''

  cart.forEach((item, index) => {
    totalPrice += item.price * item.quantity
    cartItemsContainer.innerHTML += `
                    <div class="cart-item">
                        <img src="${item.image}" alt="${item.name}">
                        <div class="cart-item-info">
                            <span>${item.name} - $${item.price.toFixed(2)}</span>
                            <div>
                                <button onclick="updateProductQuantity(${index}, -1)">-</button>
                                <span>${item.quantity}</span>
                                <button onclick="updateProductQuantity(${index}, 1)">+</button>
                            </div>
                        </div>
                    </div>
                `
  })
  document.getElementById('total-price').innerText = totalPrice.toFixed(2)
}
