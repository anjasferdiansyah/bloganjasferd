
@extends('dashboard.layouts.main')


@section('container')
    
  @if(session()->has('success'))
  <div class="alert alert-primary d-flex align-items-center justify-content-between col-lg-8" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>My Posts</h1>
    </div>

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create New Post</a>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td><a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none text-light"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none text-light"><span data-feather="edit"></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash"></button>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection