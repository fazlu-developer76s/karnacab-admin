@extends('website/layouts/app')
@section('content')

<section class="page-hero mt-5">
  <div class="container">
    <h1>{!! $customer_terms_bike->title ?? '' !!}</h1>
    <p>KarnaCab’s Bike Taxi Rider Terms are crafted to make every trip fast, safe, and dependable. We are committed to providing a convenient riding experience where passengers and riders share mutual respect and responsibility. These terms outline clear guidelines to ensure safety, fairness, and transparency at every stage of your journey. With KarnaCab Bike Taxi, you enjoy quick mobility backed by trust, accountability, and a commitment to hassle-free travel.</p>
  </div>
</section>

<main class="page-content container">
 {!! $customer_terms_bike->paragraph ?? '' !!}
</main>
@endsection
