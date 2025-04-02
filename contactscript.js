document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm')
  const responseMessage = document.getElementById('response')
  const submitButton = form.querySelector('button')

  form.addEventListener('submit', function (event) {
    event.preventDefault()

    const formData = new FormData(form)

    // Add loading spinner
    submitButton.innerHTML = "<span class='spinner'></span> Sending..."
    submitButton.disabled = true

    fetch('contact.php', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        responseMessage.textContent = data.message
        responseMessage.style.color = data.success ? 'green' : 'red'

        // Reset form and show success animation if successful
        if (data.success) {
          form.reset()
          responseMessage.classList.add('success-animation')
        }
      })
      .catch((error) => {
        responseMessage.textContent = 'An error occurred. Please try again later.'
        responseMessage.style.color = 'red'
      })
      .finally(() => {
        submitButton.innerHTML = 'Send Message'
        submitButton.disabled = false
      })
  })
})
