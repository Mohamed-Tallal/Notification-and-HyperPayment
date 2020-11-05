@extends('layouts.app')

@section('content')
<div class="container">
<script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$res['id']}}"></script>
<form action="{{route('descripe',$offerId)}}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
</div>
@endsection
