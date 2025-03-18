let links = document.getElementsByClassName('link')

function toggleCart() {
  document.getElementById('cart').classList.toggle('active')
}
function removeRemoveList() {
  document.getElementById('cart').classList.remove('active')
}

console.log('main.js is open')
let cart = []

function addToCart(name, price) {
  let item = cart.find((i) => i.name === name)
  if (item) {
    item.quantity++
  } else {
    cart.push({ name, price, quantity: 1 })
  }
  updateCart()
  console.log(cart)
}

function updateCart() {
  let cartItemsContainer = document.getElementById('cart-items')
  cartItemsContainer.innerHTML = ''
  let total = 0

  cart.forEach((item, index) => {
    total += item.price * item.quantity
    cartItemsContainer.innerHTML += `
                    <div class="cart-item">
                        <span>${item.name} - $${item.price.toFixed(2)}</span>
                        <button onclick="updateQuantity(${index}, -1)">-</button>
                        <span>${item.quantity}</span>
                        <button onclick="updateQuantity(${index}, 1)">+</button>
                    </div>
                `
  })

  document.getElementById('total-price').innerText = total.toFixed(2)
}
