<html>
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Rage Motor</title>
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	    <link rel="stylesheet" href="{{asset('vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
	    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
	    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
		<link rel="stylesheet" href="{{asset('css/style2.css')}}">
		</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="card card-body mt-4" style="background-color: #282627">

					<!-- title -->
					<h3 class="text-uppercase text-left">{{$post->title}}</h3><br>
					
					<!-- info post -->
					<p class="text-left infopost">
						<i class="fas fa-calendar-plus"></i>{{date('Y-m-d',strtotime($post->created_at))}} | 
						<i class="fas fa-user"></i>{{ucwords($post->author)}} | 
						<i class="fas fa-tag "></i>{{$post->kategori->kategori}} | 
						<i class="fas fa-comments"></i>{{$post->comments->count()}} | 
						<i class="fas fa-eye"></i>0
					</p>
					
					<!-- Foto -->
					<img src="{{asset('image/'.$post->foto)}}" style="height: 500px;" alt="">
					
					<!-- Konten -->
					<p class="text-left">{{$post->content}}</p>
					<!-- <p>
						<i class="fa fa-instagram"></i>
						<i class="fa fa-whatsapp"></i>
					</p> -->
						<hr style="background-color: #8d8273">
					
					<!-- Komentar -->
					@forelse($post->comments as $comment)
					<div class="row">
						<div class="col-md-2">
							<img src="{{asset('image/default.png')}}" style="height:100px;">
						</div>
						<div class="col-md-10">
							<p class="text-left" style="font-size: 20px;">{{$comment->name}} <span class="float-right" style="font-size:14px;">{{date('d-m-Y',strtotime($comment->created_at) )}}</span></p>

							<p class="text-left">{{$comment->comment}}</p>
							
							<!-- Balas Komentar -->
							<a class="float-right" data-toggle="collapse" href="#collapseExample{{$comment->id}}">
							    {{$comment->comments->count()}} <i class="fas fa-comments"></i> | reply
							  </a>
							
							<div class="collapse mt-5" id="collapseExample{{$comment->id}}">
							  <hr style="background-color: #8d8273">
							  @forelse($comment->comments as $reply)
							  	<div class="row">
									<div class="col-md-2">
										<img src="{{asset('image/default.png')}}" style="height:70px;">
									</div>
									<div class="col-md-10">
										<p class="text-left" style="font-size: 20px;">{{$reply->name}} <span class="float-right" style="font-size:14px;">{{date('d-m-Y',strtotime($reply->created_at) )}}</span></p>
										<p class="text-left">{{$reply->comment}}</p>

									</div>
								</div><!-- row -->
								<hr style="background-color: #8d8273">
								@empty
								<p>No Reply</p>
								 <hr style="background-color: #8d8273">
								@endforelse
							 
							  <form action="{{route('addReply',$comment->id)}}" method="post">
								@csrf
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Nama">
								</div>	
								<div class="form-group">
									<textarea class="form-control" name="comment" id="" cols="30" rows="5" placeholder="Komentar"></textarea>
								</div>
								<div class="form-group">
									<input type="submit">
								</div>
							</form>

							</div><!-- Collapse -->

						</div><!-- col-md-10 -->
					</div><!-- row -->
					<hr style="background-color: #8d8273">
					@empty
					<p>No Comments</p>
					<hr style="background-color: #8d8273">
					@endforelse
						

					<!-- Form Komentar -->
					<p class="text-left">Tinggalkan Komentar anda Disini
					</p>

					<form action="{{route('addComment',$post->id)}}" method="post">
						@csrf
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Nama">
						</div>	
						<div class="form-group">
							<textarea class="form-control" name="comment" id="" cols="30" rows="5" placeholder="Komentar"></textarea>
						</div>
						<div class="form-group">
							<input type="submit">
						</div>
					</form>
					</div>
				</div><!-- col-md-9 -->
				<!-- <div class="col-md-3">
					<div class="card card-body">
						
					</div>
				</div> -->
			</div><!-- row -->
		</div>
	</body>
	<footer class="mt-4">
        <span>Created By CBT RPL WIKRAMA BOGOR</span>
    </footer>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- <script src="{{asset('js/script.js')}}"></script> -->

	</body>
</html>