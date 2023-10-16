{{-- @dd($blog_posts); --}}
@extends ('layouts.main')


@section ('container')


    <h1 class="mb-3 text-center">{{ $title }}</h1>


    <div class="row mb-3 justify-content-center">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
          @endif

          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Search Post ..." name="search" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ request('search') }}">
            <a type="submit" class="input-group-text bg-dark text-white" id="basic-addon2">Search</a>
          </div>
        </form>
      </div>
    </div>
  





    @if ($posts->count())


    <div class="card mb-3">
      @if ($posts[0]->image)
      <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/' . $posts[0]->image)}}" class="img-fluid" alt="{{ $posts[0]->category->name }}">
    </div>
      @else
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif

      <div class="card-body">
        <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p class="card-subtitle mb-2 text-muted">
          <small>
            By <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
      </div>
    </div>

    @else

    <p class="text-center fs-4">No post found</p>

    @endif

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2 text-white" style="background: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
            @if ($post->image)
              <img src="{{ asset('storage/' . $posts->image) }}" class="img-fluid" alt="{{ $posts->category->name }}">
            @else

            <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">

            @endif
            
            <div class="card-body">
              <small>
                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a> </h5>
              <p>By <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
              </small>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{ $posts->links() }}

    

    







@endsection