
@extends('dashboard.layouts.main')


@section('container')
    
  @if(session()->has('success'))
  <div class="alert alert-primary d-flex align-items-center justify-content-between col-lg-6" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Post Categories</h1>
    </div>

    <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create New Category</a>

    <div class="table-responsive col-lg-6">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td><a href="/dashboard/categories/{{ $category->name }}" class="badge bg-info text-decoration-none text-light"><span data-feather="eye"></span></a>
                <a href="/dashboard/categories/{{ $category->name }}/edit" class="badge bg-warning text-decoration-none text-light"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->name }}" class="d-inline" method="post">
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