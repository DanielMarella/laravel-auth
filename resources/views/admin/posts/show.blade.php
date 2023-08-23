@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <img src="{{$post -> image}}" class="card-img-top" alt="{{$post -> title}}">
                <div class="card-body">
                    <h5 class="card-title">
                        ID: {{$post -> id}}
                    </h5>
                    <h5 class="card-title">
                        Title: {{$post -> title}}
                    </h5>
                    <h5 class="card-title">
                        Slug: {{$post -> slug}}
                    </h5>
                    <p class="card-text">
                        {{$post -> content}}
                    </p>
                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-sm btn-success">
                        Edit
                    </a>
                    <a href="" class="btn btn-sm btn-warning">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
