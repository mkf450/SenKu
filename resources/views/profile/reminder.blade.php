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
  <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
  <!-- Title -->
  <title>{{ env('APP_NAME', 'SenKu') }}</title>
</head>
<body id="page-top">
  <!-- <section class="login" style=" background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/background.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100vh;">
  <div class="container"> -->

  <!-- login start -->
  <section class="h-100 reminder" style="background-color: #eee;">
    <div class="container py-5 h-100">

      <!-- nav start -->
      @include('partial.navbar')
      <!-- nav end -->

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-6 pe-5">
          <div class="card text-black" style="height: 70vh; background: transparent; border: 0;">
            <div class="row">
              @auth
              <div class="col-xs-12 col-sm-12 col-lg-12 putih" style="background: #fff; height: 70vh">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="row">
                    <div class="col-xs-9 col-sm-9 col-lg-9">
                      <h2 style="font-weight: 600" class="text-left text-black">Today</h2>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-lg-2 ps-2">
                      <div class="p-3" style="background: #f4f4f4; /* width: 50; */ border-radius: 20px">
                        <img style="width: 85%" class="ps-1" src="{{ asset('assets/images/sun.png') }}" alt="">
                      </div>
                      <!-- <button type="submit" class="btn btn-primary">Search</button> -->
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-6 mt-4 mb-4">
                      <h6 style="font-weight: 600" class="text-left text-black">Target <span style="color: #FF004F">250 calories</span></h6>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-6 mt-3 mb-4">
                      <a class="btn p-2 pe-3" style="color: #fff; border-radius: 20px; background: #00E4DB;"><i class="fas fa-redo-alt ps-3 pe-2" style="color: #fff;"></i>repeat for a week</a>
                    </div>
                    <hr style="border-top: 2px solid #c0c0c0;">
                    <form action="{{ route('health') }}" method="get">
                      <div class="row">
                        <!-- jumping jack -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="jumpingjacks" style="color: #121212" value="jumpingjacks">
                          <label for="jumpingjacks">Jumping jacks 50x (5 minutes)</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                        <!-- wall sit -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="wallsit" style="color: #121212" value="wallsit">
                          <label for="wallsit">Wall Sits 50x (5 minutes)</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                        <!-- pushup -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="pushup" style="color: #121212" value="pushup">
                          <label for="pushup">Push Up 100x (5 minutes)</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                        <!-- abdominalcurch -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="abdominalcurch" style="color: #121212" value="abdominalcurch">
                          <label for="abdominalcurch">Abdominal Curch 100x (5 minutes)</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                        <!-- plank -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="plank" style="color: #121212" value="plank">
                          <label for="plank">Plank (15 minutes)</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                        <!-- add new -->
                        <!-- <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="new" style="color: #121212" value="new">
                          <label for="new" style="color: #ccc">Click to Add More</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div> -->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              @endauth
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-6">
          <div class="text-black" style="height: 70vh; background: transparent;">
            <div class="row">
              @auth
              <h4 style="font-weight: 600" class="text-left text-black mt-4">Schedules</h4>
              <img class="mt-3" style="width: 75%" src="{{ asset('assets/images/graph.png') }}" alt="">
              <div class="col-xs-12 col-sm-12 col-lg-12 hitam mt-3" style="background: #fff; height: 35vh">
                <div class="card-body p-md-3 mx-md-2">
                  <div class="row">
                    <div class="col-xs-10 col-sm-10 col-lg-10 mt-3">
                      <h5 style="font-weight: 600" class="text-left text-black">Daily Needs</h5>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-lg-2 ps-2 mb-3">
                      <div class="p-3" style="background: #f4f4f4; width: 75%;  border-radius: 20px">
                        <img style="width: 85%" class="ps-1" src="{{ asset('assets/images/calendar.png') }}" alt="">
                      </div>
                    </div>
                    <!-- <hr style="border-top: 2px solid #c0c0c0;"> -->
                    <form action="{{ route('calc') }}" method="get">
                      <div class="row">
                        <!-- water -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="water" style="color: #121212" value="water">
                          <label for="water">2.7 - 3.7 liters of water</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                        <!-- calorie -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="calorie" style="color: #121212" value="calorie">
                          <label for="calorie">2.000 - 2.500 calorie</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                        <!-- sugar -->
                        <div class="col-xs-10 col-sm-10 col-lg-10 mt-4">
                          <input type="checkbox" name="sugar" style="color: #121212" value="sugar">
                          <label for="sugar">90 grams of sugar (milk, fruits, veggies)</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 mt-4">
                          <i class="fas fa-times" style="color : #eee"></i>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              @endauth
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
