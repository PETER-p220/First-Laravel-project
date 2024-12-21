
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include jQuery UI CSS and JS -->
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" rel="stylesheet">

<!-- Include the compiled app.js -->

<!-- Optionally, include the compiled CSS if needed -->
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
a:link{
    text-decoration: none;
    color: beige;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }

}
a:link{
    text-decoration: none;
}
#datepicker{
    background-color: wheat;
    height: 60px;
    width: 400px;
}
</style>
</head>
<body>

<h2 style="text-align:center;">Payment Page</h2>

<form action="{{route('payment')}}" method="POST">
    @csrf
  <div class="container">
    <label for="name"><b>Enrollment number</b></label>
    <input type="text" placeholder="Enrollment number" name="enrollment_no" required><br><br>

    <label for="paid_date"><b>Paid date</b></label><br><br>
    <input type="date" id="datepicker"placeholder="Paid date" name="paid_date" required><br><br>

    <label for="amount"><b>Amount</b></label>
    <input type="text" placeholder="Amount" name="amount" required><br><br>

    <button type="submit">Save</button>
</form>
<button id="pay-button" style="display:bock;">Complete Payment</button>

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
