

@extends('layouts.main')


@section('container')



    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                
                    
                    <h1>{{ $posts->title }}</h1>
                    <p><a href="/posts?author={{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a href="/posts?category={{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
                    @if($posts->image)
                
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts->image) }}" class="img-fluid" alt="{{ $posts->category->name }}">
                    </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" class="img-fluid" alt="{{ $posts->category->name }}">

                    @endif

                    <article><p>{!! $posts->body !!}</p></article>

                
                <a href="/posts">Back to Blogs</a>

            </div>
        </div>
    </div>





    
@endsection
