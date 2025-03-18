let links = document.getElementsByClassName('link')

function toggleCart() {
  document.getElementById('cart').classList.toggle('active')
}
function removeRemoveList() {
  document.getElementById('cart').classList.remove('active')
  //   document.getElementById('removeList').classList.remove('active')
}
