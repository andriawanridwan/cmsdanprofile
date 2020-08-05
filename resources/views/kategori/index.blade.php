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
		<form action="{{route('kategori.store')}}" method="post" class="form-inline">
			@csrf
			<input type="text" class="form-control mr-2" name="kategori" placeholder="Kategori">
			<input type="submit" class="btn btn-primary" value="Simpan">
		</form>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center" width="10%">No</th>
                <th class="text-center">Kategori</th>
                <th class="text-center" width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kategori as $k)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$k->kategori}}</td>
                <td align="center">
                	<form action="{{route('kategori.destroy',$k->id)}}" method="post">
                		@csrf
                		@method('DELETE')
                		<input type="submit" class="btn btn-danger" value="Hapus">
                	</form>
                </td>
            </tr>
            @empty
                <td colspan="3">No Record</td>
            @endforelse
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