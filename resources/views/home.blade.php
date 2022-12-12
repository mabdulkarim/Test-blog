@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-2 mb-2">
      <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm fw-bold">CREATE POST</a>
    </div>
  </div>
  <div class="card">
    <div class="card-header">Blog Posts</div>
    <div class="card-body">
      <div class="row">
        @forelse ($posts as $post)
        <div class="col-md-3 mb-2">
          <div class="card" style="width: 18rem; height: 100%">
            <img src="{{ $post->image_path === null ? 'storage/image-placeholder.jpg' : asset('storage/'.$post->image_path) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->introduction }}</p>
            </div>
            <div class="col-md-2 ms-3 mb-2">
              <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read...</a>
            </div>
          </div>
        </div>
          @empty
            <h1>No posts.</h1>
          @endforelse
      </div>
      {{ $posts->links('pagination::bootstrap-5') }}
    </div>
  </div>
</div>
@endsection
