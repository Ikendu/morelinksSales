let paymentDetails = JSON.parse(localStorage.getItem('paymentDetails')) || {}
// console.log('from storage', paymentDetails)

// Payment Gateway

const tx_ref = 'TX-' + crypto.randomUUID()
// console.log(tx_ref)

function payWithFlutterwave() {
  FlutterwaveCheckout({
    public_key: 'FLWPUBK-a09964ac1c0ca25120455572e7ab34a5-X',
    tx_ref: tx_ref,
    amount: paymentDetails.totalPrice,
    currency: 'NGN',
    payment_options: 'card, mobilemoneyghana, ussd',
    redirect_url: 'http://localhost/morelinks/checkout/paymentsuccess.html',
    // meta: {
    //   consumer_id: 23,
    //   consumer_mac: '92a3-912ba-1192a',
    // },
    customer: {
      email: paymentDetails.email,
      phone_number: paymentDetails.phone,
      name: paymentDetails.fullname,
    },
    customizations: {
      title: 'More-Link Furniture',
      description: 'Payment for furniture sales',
      logo: 'https://moredeco.com.ng/assets/logoImage-zKlY47wv.png',
    },
    onclose: function (incomplete) {
      if (incomplete === true) {
        alert('Payment was not completed')
        //   Send details to database for record and follow-up
      }
    },
  })
}

// PAYMENT SUCCESS PAGE FOR FLUTTERWAVE

// Get transaction_id from URL parameters
const urlParams = new URLSearchParams(window.location.search)
// console.log('Url Params', urlParams)
const transaction_id = urlParams.get('transaction_id')
const paystatus = urlParams.get('status')
const ref = urlParams.get('tx_ref')

if (!transaction_id) {
  document.getElementById('status').innerText = 'Transaction Not Found!'
  document.getElementById('message').classList.add('failed')
  document.getElementById('message').innerText = 'Invalid transaction reference.'
} else if (transaction_id && paystatus === 'successful') {
  document.getElementById('payinfo').style.display = 'block'
  document.getElementById('table').style.display = 'block'
  document.getElementById('print').style.display = 'block'
  document.getElementById('payment-id').innerText = ref
  document.getElementById('payment-status').innerText = paystatus
  document.getElementById('transaction-id').innerText = transaction_id
  document.getElementById('amount').innerText = paymentDetails.totalPrice
  document.getElementById('customer-name').innerText = paymentDetails.fullname
  document.getElementById('customer-email').innerText = paymentDetails.email
  document.getElementById('customer-phone').innerText = paymentDetails.phone

  document.getElementById('status').innerText = 'Payment Successful'
  document.getElementById('status').classList.add('success')

  document.getElementById('lastMessage').innerText = 'You will get an email comfirming your payment'
} else {
  document.getElementById('status').innerText = 'Payment Failed!'
  document.getElementById('status').classList.add('failed')
  document.getElementById('message').innerText = 'Your payment was not successful.'
}

// PAY WITH PAYSTACK
function payWithPaystack() {
  let handler = PaystackPop.setup({
    key: 'pk_live_f7fa402646cf244bc85c0c0ef6214d6845eb9ce0',
    email: paymentDetails.email,
    amount: paymentDetails.totalPrice * 100, // Convert to kobo
    name: paymentDetails.fullname,
    currency: 'NGN',
    callback: function (response) {
      alert('Payment successful! Transaction ID: ' + response.reference)
      saveOrder('paystack', response.reference)
    },
    onClose: function () {
      alert('Transaction was not completed')
    },
  })
  handler.openIframe()
}

function saveOrder(paymentMethod, transactionId) {
  let orderData = {
    user_id: 1, // Replace with the actual logged-in user ID
    payment_method: paymentMethod,
    transaction_id: transactionId,
    cart: cart,
  }

  fetch('checkout.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(orderData),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === 'success') {
        localStorage.removeItem('cart')
        alert('Order saved successfully!')
        window.location.href = 'thank_you.html'
      } else {
        alert('Order failed! ' + data.message)
      }
    })
    .catch((error) => console.error('Error:', error))
}

// const response = await got.post('https://api.flutterwave.com/v3/payments', {
//   headers: {
//     Authorization: `Bearer ${process.env.FLW_SECRET_KEY}`,
//   },
//   json: {
// Your payload
//   },
// })

// else {
// Call your backend to verify the transaction
//   fetch(`https://your-backend.com/verify-payment?transaction_id=${transaction_id}`)
//     .then((response) => response.json())
//     .then((data) => {
//       if (data.status === 'success') {
//         document.getElementById('status').innerText = 'Payment Successful!'
//         document.getElementById('status').classList.add('success')
//         document.getElementById('message').innerText = `Transaction ID: ${transaction_id}`
//       } else {
//         document.getElementById('status').innerText = 'Payment Failed!'
//         document.getElementById('status').classList.add('failed')
//         document.getElementById('message').innerText = 'Your payment was not successful.'
//       }
//     })
//     .catch((error) => {
//       document.getElementById('status').innerText = 'Error!'
//       document.getElementById('status').classList.add('failed')
//       document.getElementById('message').innerText = 'Could not verify payment.'
//     })
// }

// function handleFlutterwavePayment(response) {
//   if (response.status === 'successful') {
//     localStorage.removeItem('paymentDetails')
//     localStorage.removeItem('cart')
//     window.location.href = 'payment-success.html'
//   }
// }
