@extends('website/layouts/app')
@section('content')
<main class="blog-details py-5 mt-5">
  <div class="container">
    <div class="row g-5">

      <!-- Blog Content -->
      <div class="col-lg-8">
        <article class="blog-article">
          <!-- Dynamic Blog Image -->
          <img src="{{ Storage::url($blog_detail->image) }}"
               alt="{{ $blog_detail->title }}"
               class="img-fluid rounded mb-4 shadow">

          <!-- Title -->
          <h1 class="article-title mb-3">{{ $blog_detail->title }}</h1>

          <!-- Meta Info -->
          <p class="article-meta mb-4 text-muted">
            {{ $blog_detail->posted_at }}
          </p>

          <!-- Blog Content -->
          <div class="article-content">
            {!! $blog_detail->long_content !!}
          </div>
        </article>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <aside class="sidebar p-4 bg-light rounded shadow-sm">
          <h3 class="sidebar-title mb-4">Related Posts</h3>
          <ul class="related-posts list-unstyled">
            @foreach($related_post as $related)
              <li class="d-flex mb-3 align-items-center">
                <!-- Related Post Image -->
                <a href="{{ url('blog/'.$related->id) }}" class="me-3">
                  <img src="{{ Storage::url($related->image) }}"
                       alt="{{ $related->title }}"
                       class="img-fluid rounded"
                       style="width: 80px; height: 60px; object-fit: cover;">
                </a>
                <!-- Related Post Text -->
                <div>
                  <a href="{{ url('blog/'.$related->id) }}" class="fw-bold text-dark d-block">
                    {{ \Illuminate\Support\Str::limit($related->title, 50) }}
                  </a>
                  <small class="text-muted">{{ $related->posted_at }}</small>
                </div>
              </li>
            @endforeach
          </ul>
        </aside>
      </div>

    </div>
  </div>
</main>
@endsection
