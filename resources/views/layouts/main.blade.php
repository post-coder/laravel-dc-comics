<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

  @include('partials/header')

  

  <div>

    @yield('content')

  </div>

  <div class="links">
    <div class="link">
      <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
      Digital Comics
    </div>
        <div class="link">
      <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
      Merchandise
    </div>
        <div class="link">
      <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
      Shop Locator
    </div>
        <div class="link">
      <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
      Subscriptions
    </div>
        <div class="link">
      <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
      Power Visa
    </div>
  </div>

  @include('partials/footer')


</body>

</html>