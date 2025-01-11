<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        #card-element {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
        }

        #card-errors {
            color: red;
            margin-top: 10px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:disabled {
            background-color: #ccc;
        }
    </style>
</head>
<body>
   <div class="container">
    <h1>Make a Reservation</h1>

    <!-- Stripe Card Element -->
    <div id="card-element"></div>
    <div id="card-errors"></div>

    <!-- Hidden input to store payment method ID -->
    <input type="hidden" name="payment_method_id" id="payment-method-id">

    <button type="submit" id="submit-button" disabled>Authorize</button>
</div>

<script>
document.addEventListener("DOMContentLoaded", async () => {
    const stripe = Stripe("{{ env('STRIPE_PUBLIC') }}");
    const elements = stripe.elements();

    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const form = document.getElementById('booking-form'); // Use the main form ID
    const submitButton = document.getElementById('submit-button');
    const paymentMethodInput = document.getElementById('payment-method-id');
    const cardErrors = document.getElementById('card-errors');

    cardElement.on('change', function (event) {
        if (event.error) {
            cardErrors.textContent = event.error.message;
        } else {
            cardErrors.textContent = '';
        }

        // Enable or disable the submit button
        submitButton.disabled = event.empty || !!event.error;
    });

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Create the Payment Method
        submitButton.disabled = true;
        const { paymentMethod, error } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
        });

        if (error) {
            cardErrors.textContent = error.message;
            submitButton.disabled = false;
            return;
        }

        // Add the Payment Method ID to the form and submit
        paymentMethodInput.value = paymentMethod.id;
        form.submit();
    });
});
</script>
</body>
</html>
