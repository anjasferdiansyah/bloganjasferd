{{-- @dd('posts') --}}
@extends('dashboard.layouts.main')


@section('container')
    

<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">      
                <h1 class="mb-3">{{ $posts->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span> Back to My Posts</a>
                <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $posts->slug }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span> Delete</button>
                    </form>
                <p><a href="/posts?author={{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a href="/posts?category={{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
                
                @if($posts->image)
                
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts->image) }}" class="img-fluid" alt="{{ $posts->category->name }}">
                </div>
                

                @else
                
                <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" class="img-fluid" alt="{{ $posts->category->name }}">

                @endif
                <article><p>{!! $posts->body !!}</p></article>

        </div>
    </div>
</div>

@endsection