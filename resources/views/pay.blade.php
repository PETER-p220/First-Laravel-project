<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>

    <h2>Pay with Stripe</h2>

    <form id="payment-form">
        <div>
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" required>
        </div>
        <button type="submit">Pay Now</button>
    </form>

    <div id="card-element"></div>
    <button id="pay-button" style="display: none;">Complete Payment</button>

    <script>
        const stripe = Stripe("{{ env('STRIPE_KEY') }}");
        let clientSecret;

        // Handle the form submission to create the PaymentIntent
        document.getElementById('payment-form').addEventListener('submit', async function(event) {
            event.preventDefault();

            const amount = document.getElementById('amount').value;

            const response = await fetch('/payment-intent', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ amount }),
            });

            const data = await response.json();

            if (data.clientSecret) {
                clientSecret = data.clientSecret;
                document.getElementById('pay-button').style.display = 'block';
            } else {
                alert('Error creating payment intent: ' + data.error);
            }
        });

        // Setup Stripe Elements
        const elements = stripe.elements();
        const card = elements.create('card');
        card.mount('#card-element');

        // Handle the payment submission
        document.getElementById('pay-button').addEventListener('click', async function(event) {
            event.preventDefault();

            const {error, paymentIntent} = await stripe.confirmCardPayment(clientSecret, {
                payment_method: {
                    card: card,
                },
            });

            if (error) {
                alert(error.message);
            } else if (paymentIntent.status === 'succeeded') {
                alert('Payment successful!');
            }
        });
    </script>

</body>
</html>
