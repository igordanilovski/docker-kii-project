<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-script-type" content="text/javascript; charset=utf-8"/>
    <meta http-equiv="content-style-type" content="text/css; charset=utf-8"/>
    <meta http-equiv="content-language" content="en"/>

    <title>Homepage</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
<div class="container">
    <nav>
        <div class="d-flex">
            <img src="{{ asset('storage/icons/logo.svg') }}" class="nav-logo" alt="">
            <div class="nav-links">
                <a href="/places">Почетна</a>
            </div>
        </div>
        <div class="right">
            
        </div>
    </nav>

    <div class="page-content">
        <div class="left-bar">
            <div class="content">
                <h4 class="h4-heading">Типови на локали</h4>
                <a href="/places/">
                    <p class="side-bar-text" id="all-tab">Сите ({{$totalNumber}})</p>
                </a>
                <a href="/places?type=restaurant">
                    <p class="side-bar-text" id="restaurant-tab">Ресторани ({{$restaurantsNumber}})</p>
                </a>
                <a href="/places?type=cafe">
                    <p class="side-bar-text" id="cafe-tab">Кафичи ({{$cafeNumber}})</p>
                </a>
                <a href="/places?type=bar">
                    <p class="side-bar-text" id="bar-tab">Барови ({{$barNumber}})</p>
                </a>
                <a href="/places?type=pub">
                    <p class="side-bar-text" id="pub-tab">Пабови ({{$pubNumber}})</p>
                </a>
                <a href="/places?type=nightclub">
                    <p class="side-bar-text" id="nightclub-tab">Ноќни клубови ({{$clubNumber}})</p>
                </a>
                <a href="/places?type=cinema">
                    <p class="side-bar-text" id="cinema-tab">Кина ({{$cinemaNumber}})</p>
                </a>
            </div>
        </div>
        <div class="right-bar">
            <div class="search-box mb-4">
                <form action="" method="GET">
                    <input type="text" name="searchTerm" id="searchTerm" placeholder="Пребарувај по име">
                    <button type="submit" id="submitButton">Пребарај</button>
                </form>
            </div>
            <h4 class="h4-heading mb-3">Резултати од пребарувањето</h4>
            <div class="flexbox">
                @foreach ($records as $record)
                    <div class="item">
                        <div class="content-box">
                            <h5 class="item-heading" title="{{$record['name']}}">
                                {{$record["name"]}}
                            </h5>
                            <div class="item-text">
                                <img src="{{ asset('storage/icons/location.svg') }}" alt="">
                                <p>Скопје</p>
                            </div>
                            <div class="item-text">
                                <img src="{{ asset('storage/icons/category.svg') }}" alt="">
                                @if($record["amenity"] == "restaurant")
                                    <p>Ресторан</p>
                                @elseif($record["amenity"] == "bar")
                                    <p>Бар</p>
                                @elseif($record["amenity"] == "pub")
                                    <p>Паб</p>
                                @elseif($record["amenity"] == "cafe")
                                    <p>Кафич</p>
                                @elseif($record["amenity"] == "nightclub")
                                    <p>Ноќен клуб</p>
                                @elseif($record["amenity"] == "cinema")
                                    <p>Кино</p>
                                @endif
                            </div>

                            <div class="link">
                                <a href="/places/{{$record["id"]}}">
                                    <p>Види Повеќе</p>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
