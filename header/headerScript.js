let links = document.getElementsByClassName('link')

// Open Cart Temp area
function toggleCart() {
  document.getElementById('cart').classList.toggle('active')
}

// Close Cart Temp  area
function removeRemoveList() {
  document.getElementById('cart').classList.remove('active')
}

let cart = []

function updateProductQuantity(name, price, change, image) {
  let item = cart.find((i) => i.name === name)

  if (item) {
    item.quantity += change
    if (item.quantity <= 0) {
      cart = cart.filter((i) => i.name !== name)
    }
  } else if (change > 0) {
    cart.push({ name, price, quantity: 1, image })
  }
  document.getElementById(`quantity${name}`).innerText = item ? item.quantity : 1

  updateCart()
}

function addToCart(name, price, image) {
  let item = cart.find((i) => i.name === name)
  if (item) {
    item.quantity++
  } else {
    cart.push({ name, price, quantity: 1, image })
  }
  document.getElementById(`quantity${name}`).innerText = item ? item.quantity : 1
  updateCart()
}

function updateCart() {
  let cartItemsContainer = document.getElementById('cart-items')
  let cartCount = document.getElementById('cart-count')
  cartItemsContainer.innerHTML = ''
  let total = 0
  let totalQuantity = 0

  cart.forEach((item, index) => {
    total += item.price * item.quantity
    totalQuantity += item.quantity
    cartItemsContainer.innerHTML += `
        <div class="cart-item addMore">
            <img src='utilities/images/${item.image}' alt="${item.name}" />
            <div class="cart-item-details">
                <p>${item.name}</p> 
                <p class="item-price">$${item.price.toFixed(2)}</p> 
            </div>            
            <button onclick="updateProductQuantity('${item.name}', ${item.price}, 1)">+</button>
            <span>${item.quantity}</span>
            <button onclick="updateProductQuantity('${item.name}', ${item.price}, -1)">-</button>
        </div>`
  })

  cartCount.innerText = totalQuantity
  document.getElementById('total-price').innerText = total.toFixed(2)
}

function checkout() {
  localStorage.setItem('cart', JSON.stringify(cart))
  window.location.href = 'checkout.html'
}
