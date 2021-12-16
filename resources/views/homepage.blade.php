<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  @include('partial.headtag')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
  <!-- favicon ico -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <!-- Local CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
  <!-- Title -->
  <title>{{ env('APP_NAME', 'SenKu') }}</title>
</head>
<body id="page-top">
  <section class="homepage" style=" background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/background.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <div class="container">

      <!-- nav start -->
      @include('partial.navbar')
      <!-- nav end -->

      <!-- home start -->
      <div class="row py-3">
        <div class="col-lg-12">
          <div class="tengah">
            <h2>Keep Our Family <br>on Healty Way</h2>
            <p class="pt-3 mb-5 lead">Record and remind your daily needs</p>
            <div class="tombol">
              <a class="main-btn rounded-one me-3" href="{{ route('register') }}" role="button">Sign up</a>
              <a class="main-btn rounded-two" role="button">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="arrow bounce pb-3">
        <a href="feature"><i class="fas fa-arrow-down"></i></a>
      </div> -->
    </div>
  </section>
  <!-- home end -->

  <!-- feature start -->
  <section class="feature mb-5" style=" background: #fff;">
    <div class="container">
      <div class="row py-3">
        <div class="title mb-5">
          <h2 style="line-height: 130%; letter-spacing: 0.72px;"><span style="font-weight:400">Let Us Help You Start</span><br/><b>Your Healthy Journey</b></h2>
        </div>
        <!-- ClassVideo -->
        <div class="col-lg-6 mb-5">
          <div class="ClassVideo">
            <div class="judul">
              <h5 class="pt-3 pe-3">Class and Video Workout</h5>
              <img src="{{ asset('assets/images/barbel-ikon.png') }}" alt="">
            </div>
            <p class="mt-2 mb-3" style="width: 80%"><span style="font-weight: 600; margin-right: 1px">For premium members only,</span> this workout helps you reach your fitness goals for every type of workout for any levels. You can either class by making your own schedule and choose your trainer or watch videos</p>
            <div class="tombol">
              <a class="btn btn-primary" style="border-radius: 5px" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!-- ClassVideo end -->
        <!-- DailyReminder -->
        <div class="col-lg-6 mb-5">
          <div class="ClassVideo">
            <div class="judul">
              <h5 class="pt-3 pe-3">Daily Reminder</h5>
              <img src="{{ asset('assets/images/kalender-ikon.png') }}" alt="">
            </div>
            <p class="mt-2 mb-3" style="width: 80%">Make sure your daily health needs are never forgotten. Organize, schedule, plan and analyze your workout easily with our best reminder feature. Free daily, weekly & monthly reminders with modern interface.</p>
            <div class="tombol">
              <a class="btn btn-primary" style="border-radius: 5px" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!-- DailyReminder end -->
        <!-- BMI Calculator -->
        <div class="col-lg-6 mb-5">
          <div class="ClassVideo">
            <div class="judul">
              <h5 class="pt-3 pe-3">BMI Calculator</h5>
              <img src="{{ asset('assets/images/timbangan-ikon.png') }}" alt="">
            </div>
            <p class="mt-2 mb-3" style="width: 80%">Measure your body fat based on height and weight that applies only to adult men and women. Use our BMI calculator to compute yours</p>
            <div class="tombol">
              <a class="btn btn-primary" style="border-radius: 5px" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!-- BMI Calculator end -->
        <!-- Health Trivia -->
        <div class="col-lg-6 mb-5">
          <div class="ClassVideo">
            <div class="judul">
              <h5 class="pt-3 pe-3">Health Trivia</h5>
              <img src="{{ asset('assets/images/trivia-ikon.png') }}" alt="">
            </div>
            <p class="mt-2 mb-3" style="width: 80%">Find any health information to help you make choices for disease prevention and good health. Get tips on veggies, low fat, less sugar, friuts, and vitamins</p>
            <div class="tombol">
              <a class="btn btn-primary" style="border-radius: 5px" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!-- Health Trivia end -->
      </div>
    </div>
  </section>
  <!-- feature end -->

  <!-- sample-exercise-video start -->
  <section class="sampleVideo my-5" style=" background: #f1f1f1;">
    <div class="container">
      <div class="row py-3">
        <div class="col-lg-6">
          <div class="bg-video" style="background-image: url(https://unsplash.imgix.net/photo-1425036458755-dc303a604201?fit=crop&fm=jpg&q=75&w=1000);">
            <div class="bt-play"></div>
          </div>
          <div class="video-container">
            <iframe width="600" height="315" src="https://www.youtube.com/embed/fLLScgWQcHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="title mb-5 mt-5 ps-5">
            <h4 class="mb-3"><b>Sample Exercise Video</b></h4>
            <p>It helps you reach your fitness goals with expertly designed workouts from our Trainers. This workout is perfect for training at home, in the gym or on the road, with everything from bodyweight-only to full-equipment workouts for everyone at all fitness levels.</p>
            <div class="tombol">
              <a class="btn btn-primary" style="border-radius: 5px" href="#">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- sample-exercise-video end -->

  <!-- Testimony -->
  <section class="testi my-5" style="background: #fff;">
    <div class="container">
      <div class="row py-3">
        <div class="title mt-5 mb-5">
          <h2 style="line-height: 130%; letter-spacing: 0.72px; text-align: center;"><b>Our Testimony</b></h2>
          <p style="text-align: center;" class="mt-5">Love the class I'm currently doing! I feel like I know what I'm doing at the gym in the weight-room now, gives me confidence!</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-6">
          <img src="{{ asset('assets/images/jane-doe.png') }}" alt="">
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-6">
          <h5 class="mt-4">Jane Doe</h5>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimony end -->

  <!-- Frequently Asked Question -->
  <section class="faq" style="background: #dfdfdf;">
    <div class="container">
      <div class="row my-5">
        <h2 style="line-height: 130%; letter-spacing: 0.72px; text-align: center;"><b>Frequently Asked Question</b></h2>
        <p style="text-align: center;" class="mt-1">Answer for most commonly asked questions</p>
      </div>
      <div class="col-lg-12">
        <button class="accordion pertama w-100">What's the upgraded feature on premium account?</button>
        <div class="panel pt-3 pb-1">
          <p>The upgraded feature is on the how much video will the be played from their original duration and class workout</p>
        </div>
        <button class="accordion w-100">How to set a reminder?</button>
        <div class="panel pt-3 pb-1">
          <p>You can go to your profile menu and then set your reminder</p>
        </div>
        <button class="accordion w-100">How to become premium member?</button>
        <div class="panel terakhir pt-3 pb-1">
          <p>You can go to your profile menu and then be the premium member</p>
        </div>
      </div>
    </section>
    <!-- Frequently Asked Question END -->

    <!-- Signup -->
    <section class="daftar" style="background: linear-gradient( rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.5) ), url('assets/images/daftar.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
      <div class="container">
        <div class="row mt-5 tengah">
          <div class="col-xs-6 col-sm-6 col-lg-6 centered">
            <h4 style="line-height: 130%; letter-spacing: 0.72px; color: #fff">Free for trial, discover the benefits</h4>
          </div>
          <div class="col-xs-6 col-sm-6 col-lg-6 centered">
            <a class="btn btn-primary" style="border-radius: 5px" href="{{ route('register') }}">Sign up</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Signup end  -->

    <!-- footer start -->
    @include('partial.footer')
    <!-- footer end -->

    <!-- JavaScript Bundle with Popper -->
    @include('partial.scripts')

  </body>
  </html>
