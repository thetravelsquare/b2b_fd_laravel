<form action="{{ route('razorpay.payment.store', $df->id) }}" class="kt-form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
@csrf
<script src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="{{ env('RAZORPAY_KEY') }}"
            data-amount="{{ $total * 100 }}" 
            data-currency="INR"
            data-name="Fixed Departure"
            data-prefill.name="{{ Auth::user()->name }}"
            data-prefill.email="{{ Auth::user()->email }}"
            data-prefill.contact="{{ Auth::user()->phone }}"
            data-theme.color="#000"></script>
</form>