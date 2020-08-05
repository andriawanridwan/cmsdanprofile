<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rage Motor</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.green.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/smartphoto.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flex-gallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/photopile.css')}}">
    <style>
            .a{
                color: #8d8273;
                margin-top: -20px;
                font-size: 17px;
            }
            .a:hover{
                color: #8d8273;
            }
        </style>
</head>

<body>

    <header>
        <nav class="menu" style="z-index: 100">
            <ul class="menu">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#overview">About</a>
                </li>
                <li>
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="#features">Features</a>
                </li>
                <li>
                    <a href="#post">Post</a>
                </li>
                
            </ul>
            <a href="#" id="toggle-btn">Rage Motor</a>
        </nav>
    </header>

    <!-- Content -->
    <a name="home"></a>
    <div class="section-hero">
        <header class="v-header container">
            <div class="fullscreen-video-wrap">
              <video src="{{asset('video/motorcycle.mov')}}" autoplay="true" loop="true">
            </video>
            </div>
            <div class="header-overlay"></div>
            <div class="header-content text-md-center">
              <h1>Selamat Datang</h1>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
              <a class="btn">Find Out More</a>
            </div>
        </header>
        
    </div>

    <!-- Overview Section -->
    <!-- feature section -->
    <!-- Overview Section -->
    <a name="overview"></a>
    <div id="overview" class="section">
        <div class="container">
            <div class="overview-content">
                <div>
                    <h2>About</h2>
                    <p>Akulah Sang Prabu</p>
                </div>
                <div>
                    <img src="img/1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    
    <a name="portfolio"></a>
    <div id="subscribe" class="section">
        <div class="container">
            <h2>Portfolio</h2>
            <div style="margin-top:15%;"></div>
            <ul class="photopile">
            @foreach($upload as $u)
              <li>
                <a href="{{asset('image/upload/'.$u->foto)}}">
                  <img src="{{asset('image/upload/'.$u->foto)}}" width="133" height="100" />
                </a>
              </li>
            @endforeach
          </ul>
        </div>
    </div>

    <!-- feature section -->
    <a name="features"></a>
    <div id="features" class="section">
        <div class="container">
            <div class="features-content">
                <div>
                    <img src="img/2.PNG" alt="">
                </div>
                <div>
                    <h2>Features</h2>
                    <p>Jadi Jika anda ingin pergi ke pasar</p>
                    <h4>&#10148; Easy Notifikasi</h4>
                    <p>kjk</p>
                    <h4>&#10148; Easy Notifikasi</h4>
                    <p>kjk</p>
                    <h4>&#10148; Easy Notifikasi</h4>
                    <p>kjk</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Post section -->
    <a name="post"></a>
    <div id="about" class="section">
        <div class="container">
            <h2>Latest Post</h2><br>
            <div class="owl-carousel owl-theme">
                @forelse($post as $p)
          
                <div class="card mt-4" style="background-color: #282627">
                    <img src="{{asset('image/'.$p->foto)}}" class="card-img-top" style="height: 200px;margin-top: -2px;">
                    <div class="card-body">
                        <a href="{{route('read',$p->slug)}}" class="float-left text-uppercase text-left a">{{str_limit($p->title,35)}}</a>
                        <p class="float-left">{{date('Y-m-d',strtotime($p->created_at))}}</p>
                    </div>
                </div>
            @empty
            <p>Tidak ada postingan</p>
            @endforelse
            </div>
            <button onclick="window.location.href='/blog'">Lihat selengkapnya &gg;</button>
        </div>
    </div>

    <footer>
        <span>Created By CBT RPL WIKRAMA BOGOR</span>
    </footer>

    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery-smartphoto.min.js')}}"></script>
    <script src="{{asset('js/smartphoto.min.js')}}"></script>
    <script src="{{asset('js/flex-gallery.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="{{asset('js/photopile.js')}}"></script>
    <script>
    $(function(){
    $(".js-smartPhoto").SmartPhoto();
    PhotoPile().scatter();
    });
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });

    </script>
</body>

</html>