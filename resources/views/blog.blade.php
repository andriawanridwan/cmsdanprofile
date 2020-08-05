<html>
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Rage Motor</title>
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
	    <link rel="stylesheet" href="{{asset('css/style1.css')}}">

	    <style>
	    	a{
	    		color: #8d8273;
	    		margin-top: -20px;
				font-size: 17px;
	    	}
	    	a:hover{
	    		color: #8d8273;
	    	}
	    </style>
		</head>
	<body>
	<div class="container">
		<div class="row">
			@forelse($post as $p)
			<div class="col-md-3">
				<div class="card mt-4" style="background-color: #282627">
					<img src="{{asset('image/'.$p->foto)}}" class="card-img-top" style="height: 200px;margin-top: -2">
					<div class="card-body">
						<a href="{{route('read',$p->slug)}}" class="float-left text-uppercase text-left">{{str_limit($p->title,35)}}</a>
						<p class="float-left">{{date('Y-m-d',strtotime($p->created_at))}}</p>
					</div>
				</div>
			</div>
			@empty
			<p>Tidak ada postingan</p>
			@endforelse
		</div>
	</div>
	<br><br>
	<footer>
        <span>Created By CBT RPL WIKRAMA BOGOR</span>
    </footer>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
	</body>
</html>