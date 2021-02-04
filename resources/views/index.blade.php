<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas 11</title>
</head>

<body>
    <header class="sticky-top">
        <div class="atas bg-dark">
            <div class="container d-flex flex-row">
                <div class="d-flex kiri mr-auto p-2 pr-2 border-right">
                    <img class="mr-2" src="image/flag-en.png" alt="">
                    <img src="https://www.itb.ac.id//themes/itbnew3/images/flag-id.png" alt="">
                </div>
                <div class="d-flex kanan flex-row p-2 my-auto">
                    <a class="mr-4 my-auto" href="">Staf</a>
                    <a class="mr-4 my-auto" href="">Mahasiswa</a>
                    <a class="mr-4 my-auto" href="">Alumni</a>
                    <a class="mr-4 my-auto" href="">Mitra</a>
                    <a class="mr-4 my-auto" href="">Pengunjung</a>
                    <a class="mr-4 my-auto" href="">Pers</a>
                    <a class="mr-4 my-auto" href="">My ITB</a>
                    <a class="mr-4 my-auto p-1 text-white" style="border-radius: 5px; background: red;" href="">Covid
                        19</a>
                    <a class="mr-4 my-auto" href="">Kontak</a>
                    <a class="mr-4 my-auto" href="">Cari</a>
                    @auth
                        <a class="my-auto" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="mr-4 my-auto" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="my-auto" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
        <div class="bawah bg-primary">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="#"><img src="image/logo-itb.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-white" href="#">Tentang ITB <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Penerimaan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Penelitian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Pengabdian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Penghargaan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Multikampus</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="slide mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/slide-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/itb-multikampus.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="dua mb-5">
        <div class="container">
            @foreach ($talk as $item)

            <div class="row font-size-03">
                <div class="col-12 block-hidden-01">
                    <h2 class="font-size-08 font-02 font-weight-bold d-block d-sm-none">{{$item->judul}}</h2>
                </div>
                <div class="col-12 text-center mb-5">
                    <h2
                        class="font-size-08 font-02 font-weight-bold d-none d-md-block d-lg-block d-xl-block pb-3 text-center">
                        {{$item->judul}}</h2>
                </div>
                <div class="col-12 col-md-4">
                    <img class="w-100 mb-3" src="{{Storage::url($item->image)}}">
                </div>
                <div class="col-12 col-md-8 my-auto">
                    <p>{{$item->text}}
                    </p>
                </div>
                <div class="col-12 text-center">
                    <a href="https://www.itb.ac.id/kolom-rektor/sambutan-rektor/pada-itb-talks-4-refleksi-2020-ekspektasi-2021"
                        class="btn btn-outline-info block-more-03 mt-3">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
