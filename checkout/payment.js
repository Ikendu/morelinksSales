let paymentDetails = JSON.parse(localStorage.getItem('paymentDetails')) || {}
// console.log('from storage', paymentDetails)

// Payment Gateway

const tx_ref = 'TX-' + crypto.randomUUID()
// console.log(tx_ref)

function makePayment() {
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

// PAYMENT SUCCESS PAGE

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

// const response = await got.post('https://api.flutterwave.com/v3/payments', {
//   headers: {
//     Authorization: `Bearer ${process.env.FLW_SECRET_KEY}`,
//   },
//   json: {
//     // Your payload
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
