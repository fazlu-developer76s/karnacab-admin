@extends('website/layouts/app')
@section('content')

<main class="blog-main py-5 mt-5">
    <div class="container">
        <h1 class="blog-heading text-center mb-5">Our Latest Blogs</h1>

        <div class="row g-4">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ $blog->blog_link ?? '#' }}" class="blog-card d-block text-decoration-none">
                        <div class="blog-img">
                            <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded-top">
                        </div>
                        <div class="blog-body p-3">
                            <p class="blog-date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</p>
                            <h2 class="blog-title">{{ $blog->title }}</h2>
                            <p class="blog-excerpt">{!! \Illuminate\Support\Str::limit(strip_tags($blog->short_content), 100) !!}</p>
                            <a href="{{ $blog->blog_link ?? '#' }}"><span class="read-more">Read More →</span></a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
