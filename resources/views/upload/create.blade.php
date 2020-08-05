@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/basic.min.css">
	<div class="alert alert-warning">
		<blockquote>
			<p><b>keterangan !!!</b></p>
			<small><cite>- Upload Ini Disimpan Secara Otomatis</cite></small>
		</blockquote>
	</div>

	<div class="card card-body">
		<div class="dropzone">
			<div class="dz-message">
				<h3>Drag and Drop di sini untuk upload</h3>
			</div>
		</div>
		
	</div>
</div>
<div class="row">
	<div class="col-md-6"><h5>* NB : Pastikan Proses Upload Selesai</h5></div>
	<div class="col-md-6">
		<a href="{{route('upload.index')}}" onclick="confirm('Proses upload sudah selesai?')" class="btn btn-success float-right">Selesai</a>
	</div>
</div>


<input type="hidden" name="_token" value="{{csrf_token()}}">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
	
	Dropzone.autoDiscover = false;
	var file_upload = new Dropzone('.dropzone',{
		url : "{{route('kirim')}}",
		method : 'post',
		paramName : 'foto',
		acceptedFiles : 'image/*',
		dictInvalidFileType : 'File ini tidak diizinkan',
		maxFilesize : 1,
		dictFileTooBig : 'Upload Terlalu besar! max upload 1 Mb',
		addRemoveLinks : true
	});
	file_upload.on('sending',function(a,b,c){
		a.token = Math.random();
		c.append('token', a.token);
		c.append('_token', '{{csrf_token()}}');
		console.log(file_upload);
	});
	file_upload.on('removedfile',function(a){
		var token = a.token;
		
		$.ajax({
			dataType : 'json',
			type : 'post',
			url : '{{route("hapus")}}',
			data : {token : token,_token : '{{csrf_token()}}'},
			success:function(){
				console.log("Berhasil");
			}
		})
	});
</script>
@endsection