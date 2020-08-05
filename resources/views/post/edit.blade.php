@extends('layouts.master')

@section('content')
	<div class="card">
		<div class="card-header">
			<h4><i class="fas fa-plus"></i>Edit Data Posting</h4>
		</div>
		<div class="card-body">
			<form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PATCH')
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" value="{{$post->title}}" class="form-control">
				</div>
				<div class="form-group">
					<select name="kategori" class="form-control" name="kategori">
						<option disabled selected>-- Pilih Kategori --</option>
						@forelse($kategori as $k)
						<option {{$k->id == $post->id ? 'selected' : ''}} value="{{$k->id}}">{{$k->kategori}}</option>
						@empty
						<option disabled="" >Tidak ada Kategori</option>
						@endforelse
					</select>
				</div>
				<div class="form-group">
					<label>Foto</label><br>
					<input type="file" name="foto">
					<!-- <img class="ml-4" src="{{asset('image/'.$post->foto)}}" alt="" style="height: 100px;"> -->
				</div>
				<div class="form-group">
					<label>Konten</label>
					<textarea name="konten" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Simpan">
				</div>
			</form>
		</div>
	</div>
@endsection