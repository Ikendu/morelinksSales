document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm')
  const responseMessage = document.getElementById('response')
  const submitButton = form.querySelector('button')

  // Initialize EmailJS
  emailjs.init({ publicKey: 'iPQWPyYdO6yD4VgQA' })

  form.addEventListener('submit', function (event) {
    event.preventDefault()

    const formData = new FormData(form)
    const name = formData.get('name')
    const email = formData.get('email')
    const phone = formData.get('phone')
    const message = formData.get('message')

    // Add loading spinner
    submitButton.innerHTML = "<span class='spinner'></span> Sending..."
    submitButton.disabled = true

    // Send data to MySQL using PHP
    fetch('./contact/contact.php', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          // Send email using EmailJS
          return emailjs.send('service_biqugve', 'template_3ln81ag', {
            from_name: name,
            email: email,
            phone: phone,
            message: message,
          })
        } else {
          throw new Error('Database save failed')
        }
      })
      .then(() => {
        responseMessage.textContent = 'Message sent successfully!'
        responseMessage.style.color = 'green'
        form.reset()
        responseMessage.classList.add('success-animation')
      })
      .catch((error) => {
        console.error('Error:', error)
        responseMessage.textContent = 'Message not sent. Please try again.'
        responseMessage.style.color = 'red'
      })
      .finally(() => {
        submitButton.innerHTML = 'Send Message'
        submitButton.disabled = false
      })
  })
})

// Back button function
function goBack() {
  if (window.history.length > 1) {
    window.history.back()
  } else {
    alert('No previous page in history.')
  }
}
