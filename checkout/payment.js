let paymentDetails = JSON.parse(localStorage.getItem('paymentDetails')) || {}
console.log('from storage', paymentDetails)

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
    redirect_url: 'https://glaciers.titanic.com/handle-flutterwave-payment',
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
      logo: '../utilities/icons/logoImage.png',
    },
  })
}
