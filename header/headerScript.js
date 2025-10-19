let links = document.getElementsByClassName('link')

// Open Cart Temp area
function toggleCart() {
  document.getElementById('cart').classList.toggle('active')
  document.getElementById('cart-overlay').classList.toggle('active')
}

// Close Cart Temp  area
function removeRemoveList() {
  document.getElementById('cart').classList.remove('active')
  document.getElementById('cart-overlay').classList.remove('active')
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

  // Change the button color
  let id = document.getElementById(name)
  id.style.backgroundColor = '#ebeef1'
  id.style.color = 'gray'
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

  document.getElementById('total-price2').innerText = totalPrice.toFixed(2)
}

function checkout() {
  localStorage.setItem('cart', JSON.stringify(cart))
  if (cart.length === 0) {
    alert('Please add items to cart')
  } else {
    window.location.href = 'checkout/checkout.html'
  }
}

// Text this on mobile device after hosting
// For the search input and icon
document.addEventListener('DOMContentLoaded', function () {
  const searchContainer = document.querySelector('.search')
  const searchIcon = document.querySelector('.search span')
  const searchInput = document.querySelector('.search input')
  const search = document.getElementById('search')

  function isMobile() {
    return window.innerWidth <= 768 // Detect mobile devices
  }

  searchIcon.addEventListener('click', function () {
    if (isMobile()) {
      searchContainer.classList.toggle('active')
      search.style.position = 'absolute'

      if (searchContainer.classList.contains('active')) {
        searchInput.focus()
      }
    }
  })

  // Close search input when clicking outside (on mobile)
  document.addEventListener('click', function (event) {
    if (isMobile() && !searchContainer.contains(event.target)) {
      searchContainer.classList.remove('active')
    }
  })

  // Ensure input is always visible on desktop after resizing
  window.addEventListener('resize', function () {
    if (!isMobile()) {
      searchContainer.classList.add('active')
    } else {
      searchContainer.classList.remove('active')
    }
  })

  // Ensure correct state on page load
  if (!isMobile()) {
    searchContainer.classList.add('active')
  }
})

// For Mobile Navbar Implementation
const menuToggle = document.querySelector('.menu-toggle')
const navbar = document.getElementById('mobilenav')
const overlay = document.getElementById('overlay')

// Function to toggle navbar
menuToggle.addEventListener('click', () => {
  navbar.classList.toggle('open')
  overlay.classList.toggle('active')
})

// Close navbar when clicking outside
overlay.addEventListener('click', () => {
  navbar.classList.remove('open')
  overlay.classList.remove('active')
})

// Close navbar if any link is clicked (optional)
document.querySelectorAll('.mobilenav a').forEach((link) => {
  link.addEventListener('click', () => {
    navbar.classList.remove('open')
    overlay.classList.remove('active')
  })
})
