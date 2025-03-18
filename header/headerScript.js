let links = document.getElementsByClassName('link')

function toggleCart() {
  document.getElementById('cart').classList.toggle('active')
}
function removeRemoveList() {
  document.getElementById('cart').classList.remove('active')
}

console.log('main.js is open')
let cart = []

function addToCart(name, price, index) {
  let item = cart.find((i) => i.name === name)
  if (item) {
    item.quantity++
  } else {
    cart.push({ name, price, index, quantity: 1 })
  }
  updateCart()
  console.log(cart)
}

function updateCart() {
    let cartItemsContainer = document.getElementById('cart-items')
    let numberOfItem = document.getElementById
  cartItemsContainer.innerHTML = ''
  let total = 0

  cart.forEach((item) => {
    total += item.price * item.quantity
    cartItemsContainer.innerHTML += `
                    <div class="cart-item">
                        <span>${item.name} - $${item.price.toFixed(2)}</span>
                        <button onclick="updateQuantity(${item.index}, -1)">-</button>
                        <span>${item.quantity}</span>
                        <button onclick="updateQuantity(${item.index}, 1)">+</button>
                    </div>
                `
  })
  document.getElementById('total-price').innerText = total.toFixed(2)
}

function updateQuantity(index, change) {
  let item = cart.find((item) => item.index == index)
  if (item) {
    let arrayIndex = cart.indexOf(item)

    console.log(item, arrayIndex)

    if (cart[arrayIndex].quantity + change > 0) {
      cart[arrayIndex].quantity += change
    } else {
      cart.splice(arrayIndex, 1)
    }
    updateCart()
  }
}
