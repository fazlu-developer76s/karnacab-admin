@extends('website/layouts/app')
@section('content')

<section class="page-hero mt-5">
  <div class="container">
    <h1>{!! $customer_terms_auto->title ?? '' !!}</h1>
    <p>At KarnaCab, we believe every ride should be safe, fair, and reliable. Our Rider Terms for Auto Cabs are designed to ensure a smooth experience for both passengers and drivers, built on trust, transparency, and respect. By clearly outlining rights, responsibilities, and service guidelines, we aim to create a hassle-free journey where safety, comfort, and accountability come first. With KarnaCab, you ride with confidence knowing your journey is guided by clear and fair principles.</p>
  </div>
</section>

<main class="page-content container">
 {!! $customer_terms_auto->paragraph ?? '' !!}
</main>
@endsection
