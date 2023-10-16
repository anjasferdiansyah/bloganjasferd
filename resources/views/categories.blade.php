@extends ('layouts.main')


@section ('container')


<h1>Post Categories</h1>

<div class="container">
    <div class="row justify-content-center mb-5">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-3">

                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center">
                      <h5 class="card-title" style="background: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            
                </div>
                @endforeach
        </div>
    </div>













@endsection