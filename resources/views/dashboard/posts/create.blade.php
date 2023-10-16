@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Create Posts</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" readonly>
        </div>
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <div class="form-group">
          <label for="category">Category</label>
          <select type="text" class="form-control" id="category_id" name="category_id" >
            @foreach ($categories as $category)
               @if(old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
               @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control" style="" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" class="" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', () => {
        fetch('/dashboard/posts/checkSlug?title=' + title.value).
        then(response => response.json()).
        then(res => slug.value = res.slug)
        console.log(data.slug);
    })

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })


    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const ofReader = new FileReader();
      ofReader.readAsDataURL(image.files[0]);

      ofReader.onload = function(ofREvent){
        imgPreview.src = ofREvent.target.result;
      }
    }


</script>

@endsection



