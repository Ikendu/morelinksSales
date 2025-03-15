let btnPlus = document.getElementById('btnPlus')
btnPlus.addEventListener('click', () => {})
let numberOfGoods = 0

function addMore(id) {
  numberOfGoods += 1
  let count = document.getElementById(id)
  count.innerHTML = numberOfGoods

  console.log(numberOfGoods)
}

function removeGoods(id) {
  if (numberOfGoods > 0) {
    numberOfGoods -= 1
    let count = document.getElementById(id)
    count.innerHTML = numberOfGoods
  }
  console.log(numberOfGoods)
}
