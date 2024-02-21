@extends('adminlte::page')

<title>Show Gallerys</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Show Gallerys</h1>
      </div>
    </div>
@stop

@section('content')


<form action="/admin/gallerys/{{ $gallery->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            <a href="/admin/gallerys" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/gallerys/{{ $gallery->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemoveNews({{ $gallery->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/gallerys/{{ $gallery->id }}" method="POST" id="gallery-form-{{ $gallery->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="news_id" value="{{ $gallery->id }}">
            </form><br><br>
           
      
            <div class="card mb-2">
              <img style="height: 350px" src="/uploads/gallery/{{ $gallery->image }}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $gallery->title }}</h5>
               
              </div>
            </div>
    
    </div>
  </div>
</form>
@stop

@section('css')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
@endsection

@push('js')
    <script>
      function handleRemoveNews(newsId) {
        if(confirm('Delete this gallery?') == true) {
          var form = document.getElementById('news-form-' + newsId);
          form.submit();
        }
      }
    </script>
@endpush

@section('js')
<script>
  CKEDITOR.replace( 'content' );
</script>
@endsection