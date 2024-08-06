@extends('layouts.main')
@section('content')
    <div>
        <form action="{{{ route('post.store') }}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <br>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="title" placeholder="Image">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
