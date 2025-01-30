@extends('components/layout')
@section('content')
<div
class="max-w-5xl mx-auto p-6 mt-10 bg-white shadow-lg rounded-lg"
x-data="{ openSection: null }"
>
<!-- Refund and Returns Policy -->
<div class="mt-10">
    <h2 class="text-2xl font-bold mb-4">Refund and Returns Policy</h2>
    <!-- Overview -->
    <div class="mb-6 text-gray-700">
      <h3 class="text-xl font-semibold mb-2">Overview</h3>
      <p class="mb-4">
        LIAISONEC FOOD AND BEVERAGES PRIVATE LIMITED believes in helping its
        customers as far as possible, and has therefore a liberal
        cancellation policy. Under this policy:
      </p>
      <p class="mb-4">
        In case of any Refunds approved by the LIAISONEC FOOD AND BEVERAGES
        PRIVATE LIMITED, it’ll take 3–5 days for the refund to be
        processed to the end customer.
      </p>
      <p class="mb-4">
        Cancellations will be considered only if the request is made within
        7 days of placing the order. However, the cancellation request may
        not be entertained if the orders have been communicated to the
        vendors/merchants and they have initiated the process of shipping
        them.
      </p>
      <p class="mb-4">
        LIAISONEC FOOD AND BEVERAGES PRIVATE LIMITED does not accept
        cancellation requests for perishable items like flowers, eatables,
        etc. However, refund/replacement can be made if the customer
        establishes that the quality of product delivered is not good.
      </p>
      <p class="mb-4">
        In case of receipt of damaged or defective items please report the
        same to our Customer Service team. The request will, however, be
        entertained once the merchant has checked and determined the same at
        his own end. This should be reported within 7 days of receipt of the
        products.
      </p>
    </div>
  </div>
</div>
@endsection