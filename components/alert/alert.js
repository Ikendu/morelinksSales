document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('customModal')
  const openBtn = document.getElementById('openModal')
  const closeBtn = document.querySelector('.close')

  //   openBtn.addEventListener('click', () => {
  //     modal.style.display = 'block' // Show modal
  //   })

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none' // Hide modal
  })

  // Close modal when clicking outside the content
  window.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.style.display = 'none'
    }
  })
})
