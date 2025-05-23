<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Home</title>
</head>
<body>
    <x-header></x-header>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <section class="swiper popular">
        <div class="swiper-wrapper swiper-wrapper-popular">
            @foreach ($filmesPopulares as $filmePopular)
                <div class="swiper-slide swiper-slide-popular">
                    <a href="">
                        <img src="https://image.tmdb.org/t/p/original{{ $filmePopular['backdrop_path'] }}" alt="{{ $filmePopular['title'] }}">
                    </a>
                    <div class="name-movie">
                        <p>{{$filmePopular['title']}}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination"></div>
    </section>

    <section class="swiper cartaz">
        <h1>Em cartaz nos cinemas:</h1>
        <div class="swiper-wrapper swiper-wrapper-cartaz">
            @foreach ($filmesEmCartaz as $emCartaz)
                <div class="swiper-slide swiper-slide-cartaz">
                    <a href="">
                        <img src="https://image.tmdb.org/t/p/original{{ $emCartaz['poster_path'] }}" alt="{{ $emCartaz['title'] }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
    </section>

    <section class="swiper series">
        <h1>Séries Populares:</h1>
        <div class="swiper-wrapper swiper-wrapper-series">
            @foreach ($seriesPopulares as $popularSeries)
                <div class="swiper-slide swiper-slide-series">
                    <a href="">
                        <img src="https://image.tmdb.org/t/p/original{{ $popularSeries['poster_path'] }}" alt="{{ $popularSeries['name'] }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>

    </section>


    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Inicialização do Swiper --}}
    <script>
        // ======================================//
        //         Swiper Filmes Populares       //
        // ======================================//
        const swiper = new Swiper('.popular', {
            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 1,
            loop: true,
            createElements: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                }
            }
        });

        // ======================= //
        // swiper filmes em cartaz //
        // ======================= //
        const swiper2 = new Swiper('.cartaz', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            centeredSlides: false,
            navigation: {
                nextEl: ".swiper-button-next",
            }
        });


        // ======================= //
        // swiper series populares //
        // ======================= //
        const swiperSerie = new Swiper('.series', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            centeredSlides: false,
            navigation: {
                nextEl: ".swiper-button-next",
            }
        });

    </script>

</body>
</html>
