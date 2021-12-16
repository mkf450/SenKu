<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  @include('partial.headtag')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
  <!-- favicon ico -->
  <link rel="stylesheet" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <!-- Local CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/health.css') }}">
  <!-- Title -->
  <title>{{ env('APP_NAME', 'SenKu') }}</title>
</head>
<body id="page-top">
  <!-- <section class="login" style=" background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/background.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100vh;">
  <div class="container"> -->

  <!-- login start -->
  <section class="h-100 health" style="background-color: #eee;">
    <div class="container py-5 h-100">

      <!-- nav start -->
      @include('partial.navbar')
      <!-- nav end -->

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xs-8 col-sm-8 col-lg-8 col-xl-8">
          <div class="card text-black mt-5" style="height: 80vh; background: transparent; border: 0;">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12 putih" style="background: #fff; height: 80vh">
                <div class="card-body p-md-5 mx-md-4">
                  <form action="{{ route('health') }}" method="get">
                    <div class="row">
                      <div class="col-xs-2 col-sm-2 col-lg-2">
                        <h4 class="text-left text-black">Trivia</h4>
                      </div>
                      <div class="col-xs-7 col-sm-7 col-lg-7 ps-5">
                        <input type="text" name="search" class="form-control px-2 py-2 search" placeholder="Masukan judul trivia" required/>
                      </div>
                      <div class="col-xs-3 col-sm-3 col-lg-3 ps-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                      <div class="mt-5 row">
                        @if($trivia->isNotEmpty())
                        @foreach ($trivia as $fakta)
                        <div class="col-xs-3 col-sm-3 col-lg-3 card me-5 mb-3" style="background: #efefef;">
                          @if ($fakta->tag == 'herbs')
                          <a href="https://www.ecooutdoor.com.au/garden-life/top-8-must-herbs-grow-home" style="text-decoration: none">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/herb.jpg') }}" alt="">
                          @elseif ($fakta->tag == 'lowFat')
                          <a href="https://www.healthline.com/nutrition/healthy-low-fat-foods" style="text-decoration: none">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/low-fat.jpg') }}" alt="">
                          @elseif ($fakta->tag == 'vitamin')
                          <a href="https://www.webmd.com/vitamins-and-supplements/vitamins-minerals-how-much-should-you-take" style="text-decoration: none">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/vitamin.jpg') }}" alt="">
                          @elseif ($fakta->tag == 'fruit')
                          <a href="https://medlineplus.gov/ency/article/002404.htm" style="text-decoration: none">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/fruit.jpg') }}" alt="">
                          @elseif ($fakta->tag == 'lowSugar')
                          <a href="https://www.hsph.harvard.edu/nutritionsource/carbohydrates/added-sugar-in-the-diet/#:~:text=The%20AHA%20suggests%20an%20added,comes%20from%20eating%20added%20sugar" style="text-decoration: none">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/sugar.jpg') }}" alt="">
                          @elseif ($fakta->tag == 'vegan')
                          <a href="https://www.dovemed.com/healthy-living/wellness-center/which-bell-color-healthiest/#:~:text=Bell%20Pepper%20Nutrition%3A&text=For%20example%2C%20yellow%20is%20in,comes%20in%20second%20with%20213%25" style="text-decoration: none">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/vegies.jpg') }}" alt="">
                          @else
                          <a href="#" style="text-decoration: none">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                          @endif
                          <h6 style="color: #121212; font-size: 12px;" class="mt-4">{{ $fakta->title }}</h6>
                          <p style="color: #121212; font-size: 10px;" class="mt-1">{{ Carbon\Carbon::createFromTimestamp($fakta->created_at)->format('d-m-Y') }} <span class="ms-5" style="color: #121212;">{{ ($fakta->tag) }}</span></p>
                          </a>
                        </div>
                        <!-- <div class="col-xs-3 col-sm-3 col-lg-3 card me-5" style="background: #efefef;">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                          <h6 style="color: #121212; font-size: 14px;" class="mt-4">8 Must have herbs</h6>
                          <p style="color: #121212; font-size: 12px;" class="mt-1">12 jan 2021 <span class="ms-4" style="color: #121212;">kategori</span></p>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-lg-3 card me-5" style="background: #efefef;">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                          <h6 style="color: #121212; font-size: 14px;" class="mt-4">8 Must have herbs</h6>
                          <p style="color: #121212; font-size: 12px;" class="mt-1">12 jan 2021 <span class="ms-4" style="color: #121212;">kategori</span></p>
                        </div> -->
                        @endforeach
                        @else
                        <div class="alert alert-danger">
                          <p class="alert-link card-text">There's no data in trivia. Please try again later!</p>
                        </div>
                        @endif
                      </div>
                      <!-- <div class="mt-3 row">
                        <div class="col-xs-3 col-sm-3 col-lg-3 card me-5" style="background: #efefef;">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                          <h6 style="color: #121212; font-size: 14px;" class="mt-4">8 Must have herbs</h6>
                          <p style="color: #121212; font-size: 12px;" class="mt-1">12 jan 2021 <span class="ms-4" style="color: #121212;">kategori</span></p>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-lg-3 card me-5" style="background: #efefef;">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                          <h6 style="color: #121212; font-size: 14px;" class="mt-4">8 Must have herbs</h6>
                          <p style="color: #121212; font-size: 12px;" class="mt-1">12 jan 2021 <span class="ms-4" style="color: #121212;">kategori</span></p>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-lg-3 card me-5" style="background: #efefef;">
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                          <h6 style="color: #121212; font-size: 14px;" class="mt-4">8 Must have herbs</h6>
                          <p style="color: #121212; font-size: 12px;" class="mt-1">12 jan 2021 <span class="ms-4" style="color: #121212;">kategori</span></p>
                        </div>
                      </div> -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-lg-3">
          <div class="card text-black mt-5" style="height: 80vh; background: transparent;">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12 hitam" style="background: #404040; height: 80vh">
                <div class="card-body p-md-3 mx-md-2">
                  <form action="{{ route('calc') }}" method="get">
                    <div class="row">
                      <h5 class="text-center text-white my-5">Calculator BMI</h5>
                      @guest
                      <p class="text-center">Silahkan login jika ingin menggunakan kalkulator</p>
                      @endguest
                      @auth
                      <div class="form-group mb-3">
                        <p class="text-left text-white mb-1">Tinggi : </p>
                        <input type="number" value="{{ $user->tinggi }}" id="tinggi" class="form-control" name="tinggi" placeholder="height(m)">
                      </div>
                      <div class="form-group mb-3">
                        <p class="text-left text-white mb-1">Berat : </p>
                        <input type="number" value="{{ $user->berat }}" id="berat" class="form-control" name="berat" placeholder="weight(kg)">
                      </div>
                      @if($user->tinggi != 0 || $user->berat != 0)
                      <div class="form-group mb-3">
                        <p class="text-left text-white mb-1">Hasil BMI : </p>
                        <input type="number" value="{{ $hasil=$user->berat/($user->tinggi * $user->tinggi) }}" id="hasil" class="form-control" name="hasil" placeholder="hasil">
                        @if($hasil > 17 && $hasil < 18.4)
                        <h5 class="text-center text-white mt-5">Underweight</h5>
                        @elseif($hasil >= 18.4 && $hasil < 24.9)
                        <h5 class="text-center text-white mt-5">Normal</h5>
                        @elseif($hasil >= 24.9)
                        <h5 class="text-center text-white mt-5">Overweight</h5>
                        @else
                        <h5 class="text-center text-white mt-5 d-none">Salah Input</h5>
                        @endif
                      </div>
                      @else
                      <p class="text-center text-white mt-3">Silahkan Input tinggi dan berat anda terlebih dahulu pada menu profile</p>
                      @endif
                      @endauth
                      <!-- <button class="btn btn-light btn-block mt-3" type="submit" style="color: #121212; border-radius: 20px;">Hitung</button> -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- login end -->

  <!-- footer start -->
  @include('partial.footer')
  <!-- footer end -->

  <!-- JavaScript Bundle with Popper -->
  @include('partial.scripts')

</body>
</html>
