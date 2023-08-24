@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                
                @if (str_starts_with($post->image, 'http'))
                    <img src="{{$post -> image}}" class="card-img-top" alt="{{$post -> title}}">
                @else
                    <img src="{{asset('storage/' . $post -> image)}}" class="card-img-top" alt="{{$post -> title}}">
                @endif

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
                    <form  class="d-inline-block" action="{{ route('admin.posts.destroy', $post) }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
