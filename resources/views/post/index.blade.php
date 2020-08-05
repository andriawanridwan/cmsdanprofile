@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<div class="card">
	<div class="card-header">
		@if(session('Info'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">{{session('Info')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			
		@endif	
        <h4 class="float-left"><i class="fas fa-newspaper"></i> Data Postingan</h4>
        <a href="{{route('post.create')}}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Tambah Data</a>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center" width="5%">No</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Konten</th>
                <th class="text-center">Foto</th>
                <th class="text-center" width="10%">Info</th>
                <th class="text-center" width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $p)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->title}}</td>
                <td>{{str_limit($p->content,100)}}</td>
                <td align="center">
                    <img src="{{asset('image/'. $p->foto)}}" style="width: 50px;height: 50px;">
                </td>
                <td>
                    {{$p->comments->count()}} <i class="fas fa-comments"></i> | 
                    0 <i class="fas fa-eye"></i>
                </td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('post.edit',$p->id)}}" class="btn btn-success"><i class="fa fa-pencil-alt"></i></a>
                    </div>
                    <div class="btn-group">
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
	</div><!-- card-body -->
</div><!-- card -->

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('table').DataTable();
</script>
@endsection