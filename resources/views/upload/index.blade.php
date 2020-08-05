@extends('layouts.master')

@section('content')
	<div class="card card-header">
		<a href="{{route('upload.create')}}" class="btn btn-success"><i class="fas fa-upload"></i> Upload</a>
	</div>
	<div class="row">
		@forelse($upload as $u)
		<div class="col-md-3">
			<div class="card card-body">
				<img src="{{asset('image/upload/'.$u->foto)}}" style="height: 200px;" alt="">
				<form action="{{route('upload.destroy',$u->id)}}" method="post">
					@csrf
					@method('DELETE')
					<input type="submit" class="btn btn-danger form-control" value="Hapus">
				</form>
			</div>
		</div>
		@empty
		<h5>Tidak ada portofolio</h5>
		@endforelse
	</div>
	{{$upload->links()}}
@endsection