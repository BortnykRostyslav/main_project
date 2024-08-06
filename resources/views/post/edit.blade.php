@extends('layouts.main')
@section('content')
    <div>
        <form action="{{{ route('post.update',$post->id) }}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            <br>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content" >{{ $post->content }}</textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="title" placeholder="Image" value="{{ $post->image }}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
            <div>
                <a href="{{ route('post.index') }}" class="btn btn-success mb-3">Back</a>
            </div>
        </form>
    </div>
@endsection
