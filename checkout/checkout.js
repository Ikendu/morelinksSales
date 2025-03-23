let cart = JSON.parse(localStorage.getItem('cart')) || []
console.log('from storage', cart)
function updateCheckoutPage() {
  let cartItemsContainer = document.getElementById('cart-items')
  let totalPrice = 0
  cartItemsContainer.innerHTML = ''

  cart.forEach((item, index) => {
    totalPrice += item.price * item.quantity
    cartItemsContainer.innerHTML += `
                    <div class="cart-item">
                        <img src="../utilities/images/${item.image}" alt="${item.name}">
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

// Updating the number of product using the plus and minus buttons
function updateProductQuantity(index, change) {
  if (cart[index]) {
    cart[index].quantity += change
    if (cart[index].quantity <= 0) {
      cart.splice(index, 1)
    }
  }
  localStorage.setItem('cart', JSON.stringify(cart))
  updateCheckoutPage()
}

// Processing the payment with javascript
function processPayment() {
  console.log('Processing payment')
  let firstname = document.getElementById('firstname').value
  let lastname = document.getElementById('lastname').value
  let phone = document.getElementById('phone').value
  let email = document.getElementById('email').value
  let address = document.getElementById('address').value
  let town = document.getElementById('town').value
  //   let paymentMethod = document.getElementById('payment-method').value

  if (!firstname || !lastname || !phone || !email || !address) {
    alert('Please fill in all required details.')
    return
  }

  //   alert(`Processing payment via ${paymentMethod}...`)
  localStorage.removeItem('cart')
  window.location.href = 'confirmation.html'
}

updateCheckoutPage()
