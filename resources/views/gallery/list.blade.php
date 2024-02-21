@extends('adminlte::page')

<title>Gallerys</title>
@section('title', 'Dashboard')

@section('content_header')

   
       
      
@stop

@section('content')
    <div class="card">
      <div class="card-header">
        <h3>Gallerys</h3>
        <a href="/admin/gallerys/create" class="btn btn-primary float-right">Add Gallerys</a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm table-bordered table-striped">
          <tr class="bg-info">
            <th>No</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
          </tr>

     
         

          @foreach ($datas as $item)
            <tr>
              <th>{{ ++$i }}</th>
              <th>{{ $item->title }}</th>
              <th>{{ $item->created_at }}</th>
              <th>{{ $item->updated_at }}</th>
              <th>
               
                <a href="/admin/gallerys/{{ $item->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="/admin/gallerys/{{ $item->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" onclick="handleRemoveNews({{ $item->id }})"><i class="fas fa-trash"></i></button>
                <form action="/admin/gallerys/{{ $item->id }}" method="POST" id="gallerys-form-{{ $item->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="gallerys_id" value="{{ $item->id }}">
                </form>
              </th>
            </tr>
          @endforeach          

        </table>
      </div>
    </div>
    
@stop

@push('js')
    <script>
      function handleRemoveNews(gallerysId) {
        if(confirm('Delete this Gallerys?') == true) {
          var form = document.getElementById('gallerys-form-' + gallerysId);
          form.submit();
        }
      }
    </script>
@endpush