@extends('website/layouts/app')
@section('content')

<section class="page-hero mt-5">
  <div class="container">
    <h1>{!! $privacy_policy->title ?? '' !!}</h1>
    <p>At KarnaCab, your trust is our top priority. We are committed to safeguarding your personal information with the highest standards of security and transparency. This Privacy Policy explains how we collect, use, and protect your data to ensure a safe, reliable, and seamless riding experience. By choosing KarnaCab, you can be confident that your privacy is always respected and your information is handled responsibly.</p>
  </div>
</section>

<main class="page-content container">
 {!! $privacy_policy->paragraph ?? '' !!}
</main>
@endsection
