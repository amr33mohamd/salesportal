@extends('layouts.app')
@section('title', 'Payment Methods')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
            </div>
            <div class="card">
                <form action="/payment_methods" method="post" id="payment-form">
                    @csrf
                    <div class="form-group">
                        <div class="card-header">
                            <label for="card-element">
                                Enter your credit card information
                            </label>
                        </div>
                        <div class="card-body">
                          <input class="form-control" id="card-holder-name" type="text">

                            <div  class="form-control" id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                            <input type="hidden"  name="plan" value="price_1IMEwCDdMtluCwdwDsZLxhvN" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-dark" type="submit">Pay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://js.stripe.com/v3/" ></script>
<script type="application/javascript">
// Create an instance of Elements.
let stripe = Stripe('{{ env("STRIPE_KEY") }}');

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');

const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');
const clientSecret = cardButton.dataset.secret;

// Handle form submission.
var form = document.getElementById('payment-form');

form.addEventListener('submit', async (event) => {
  event.preventDefault();

    const { setupIntent, error } = await stripe.confirmCardSetup(
        clientSecret, {
            payment_method: {
                card: cardElement,
                billing_details: { name: cardHolderName.value }
            }
        }
    );

    if (error) {
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      console.log(setupIntent.payment_method)
      stripeTokenHandler(setupIntent.payment_method);

    }
});


// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>
@endsection
@section('scripts')

@endsection
