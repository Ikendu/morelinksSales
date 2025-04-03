document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm')
  const responseMessage = document.getElementById('response')
  const submitButton = form.querySelector('button')

  form.addEventListener('submit', function (event) {
    event.preventDefault()

    const formData = new FormData(form)(
      // Send to email
      function () {
        // https://dashboard.emailjs.com/admin/account
        emailjs.init({
          publicKey: 'iPQWPyYdO6yD4VgQA',
        })
      }
    )()

    // these IDs from the previous steps
    emailjs.sendForm('template_3ln81ag', 'contact_us', formData).then(
      () => {
        console.log('SUCCESS!')
      },
      (error) => {
        console.log('FAILED...', error)
      }
    )

    // Add loading spinner
    submitButton.innerHTML = "<span class='spinner'></span> Sending..."
    submitButton.disabled = true

    fetch('contact.php', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data)
        responseMessage.textContent = data.message
        responseMessage.style.color = data.success ? 'green' : 'red'

        // Reset form and show success animation if successful
        if (data.success) {
          form.reset()
          responseMessage.classList.add('success-animation')
        }
      })
      .catch((error) => {
        console.log(error)
        responseMessage.textContent = 'Message not sent'
        responseMessage.style.color = 'red'
      })
      .finally(() => {
        submitButton.innerHTML = 'Send Message'
        submitButton.disabled = false
      })
  })
})

// back button arraow
function goBack() {
  if (window.history.length > 1) {
    window.history.back()
  } else {
    alert('No previous page in history.')
  }
}
