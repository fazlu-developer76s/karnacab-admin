@extends('website/layouts/app')
@section('content')

<section class="page-hero mt-5">
  <div class="container">
    <h1>{!! $captain_terms_bike->title ?? '' !!}</h1>
    <p>KarnaCab’s Partner Terms for Bike Taxi are built to create a strong, transparent, and rewarding relationship with our rider partners. We focus on providing clear guidelines that ensure safety, fairness, and accountability while supporting partners with opportunities for growth. These terms are designed to make every ride smooth, reliable, and mutually beneficial, helping partners earn with confidence and passengers travel with trust. At KarnaCab, we believe in partnerships that drive progress and success together.</p>
  </div>
</section>

<main class="page-content container">
 {!! $captain_terms_bike->paragraph ?? '' !!}
</main>
@endsection
