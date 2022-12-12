@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Create Post</div>
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="title">Title</label>
                        <input type="title" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="introduction">Introduction</label>
                        <textarea class="form-control" id="introduction" name="introduction" rows="3">{{ old('introduction') }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="3">{{ old('body') }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection