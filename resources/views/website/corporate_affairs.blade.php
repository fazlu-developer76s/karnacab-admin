@extends('website/layouts/app')
@section('content')

<section class="page-hero mt-5">
  <div class="container">
    <h1>{!! $corporate_affairs->title ?? '' !!}</h1>
    <p>KarnaCab’s Corporate Affairs division is dedicated to building strong relationships with partners, stakeholders, and communities. We focus on driving growth with integrity, transparency, and responsibility while aligning our operations with the highest ethical standards. Through innovation and collaboration, we aim to create sustainable value, strengthen trust, and contribute positively to society as we continue to move people and businesses forward.</p>
  </div>
</section>

<main class="page-content container">
 {!! $corporate_affairs->paragraph ?? '' !!}
</main>
@endsection
