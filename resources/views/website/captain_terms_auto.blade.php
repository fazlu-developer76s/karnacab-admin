@extends('website/layouts/app')
@section('content')

<section class="page-hero mt-5">
  <div class="container">
    <h1>{!! $captain_terms_auto->title ?? '' !!}</h1>
    <p>KarnaCab’s Partner Terms for Auto Cabs are designed to build a fair, transparent, and rewarding partnership with our driver community. We are committed to empowering partners with clear guidelines that promote safety, accountability, and mutual respect. These terms ensure smooth operations, equitable earnings, and a trusted platform where drivers and passengers alike benefit. At KarnaCab, we believe in growing together by fostering partnerships built on integrity and reliability.</p>
  </div>
</section>

<main class="page-content container">
 {!! $captain_terms_auto->paragraph ?? '' !!}
</main>
@endsection
