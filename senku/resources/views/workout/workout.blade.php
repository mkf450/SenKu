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
  <link rel="stylesheet" href="{{ asset('assets/css/workout.css') }}">
  <!-- Title -->
  <title>{{ env('APP_NAME', 'SenKu') }}</title>
</head>
<body id="page-top">

  <!-- workout start -->
  <section class="h-100 workout" style="background-color: #eee;">
    <div class="container py-5 h-100">

      <!-- nav start -->
      @include('partial.navbar')
      <!-- nav end -->

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
          <div class="card text-black mt-5" style="height: 100vh; background: transparent; border: 0;">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12 putih" style="background: #fff; height: 100vh">
                <div class="card-body p-md-5 mx-md-4">
                  <form action="{{ route('workout') }}" method="get">
                    <div class="row">
                      <div class="col-xs-2 col-sm-2 col-lg-2">
                        <h4 class="text-left text-black">Workout</h4>
                      </div>
                      <div class="col-xs-7 col-sm-7 col-lg-7 ps-5">
                        <input type="text" name="search" class="form-control px-2 py-2 search" placeholder="Masukan nama trainer, nama kelas, atau judul video" required/>
                      </div>
                      <div class="col-xs-3 col-sm-3 col-lg-3 ps-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                      <div class="mt-5 row">
                        <h6 class="text-left text-black mb-3">Trainers</h6>
                        @if($cari->isNotEmpty())
                        @foreach ($trainer as $pt)
                        <div class="col-xs-2 col-sm-2 col-lg-2 card me-3 mb-3" style="background: #efefef;">
                          @if ($pt->nama == 'Maria Sarapova')
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/maria.jpg') }}" alt="">
                          @elseif ($pt->nama == 'Michael Owen')
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/owen.jpg') }}" alt="">
                          @elseif ($pt->nama == 'James What')
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/james.jpg') }}" alt="">
                          @elseif ($pt->nama == 'Albert Edison')
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/albert.jpg') }}" alt="">
                          @elseif ($pt->nama == 'Diana Rose')
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/rose.jpg') }}" alt="">
                          @else
                          <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                          @endif
                          <h6 style="color: #121212; font-size: 12px;" class="mt-4">{{ $pt->nama }}</h6>
                          <p style="color: #121212; font-size: 10px;" class="mt-1">{{ $pt->phone_number }} <span class="ms-4" style="color: #121212;">{{ $pt->interest }}</span></p>
                        </div>
                        @endforeach
                        <div class="col-xs-6 col-sm-6 col-lg-6 row">
                          <h6 class="text-left text-black mt-4 mb-3">Class</h6>
                          @foreach ($kelas->take(2) as $class)
                          <div class="col-xs-4 col-sm-4 col-lg-4 card me-4 mb-3" style="background: #efefef;">
                            <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                            <h6 style="color: #121212; font-size: 12px;" class="mt-4">{{ $class->description }}</h6>
                            <p style="color: #121212; font-size: 10px;" class="mt-1">Every Sunday<span class="ms-4" style="color: #121212;">{{ $class->interest }}</span></p>
                            <!-- <p style="color: #121212; font-size: 10px;" class="mt-1">{{ Carbon\Carbon::createFromTimestamp($class->schedule_date)->format('l \of h:i:s A'); }}</p> -->
                          </div>
                          @endforeach
                        </div>
                        <div class="col-xs-6 col-sm-6 col-lg-6 row">
                          <h6 class="text-left text-black mt-4 mb-3">Video</h6>
                          @foreach ($video->take(2) as $yutub)
                          <div class="col-xs-4 col-sm-4 col-lg-4 card me-4 mb-3" style="background: #efefef;">
                            @if ($yutub->judul == 'Mixed Video')
                            <a href="https://www.youtube.com/watch?v=ke1VPBSUrM8" style="text-decoration: none">
                            @else
                            <a href="https://www.youtube.com/watch?v=5Ldq-mqmDW8&t=85s" style="text-decoration: none">
                            @endif
                            <img style="width: 80%; border-radius: 50%;" class="mt-3 ms-3" src="{{ asset('assets/images/image.png') }}" alt="">
                            <h6 style="color: #121212; font-size: 12px;" class="mt-4">{{ $yutub->judul }}</h6>
                            <p style="color: #121212; font-size: 10px;" class="mt-1">{{ Carbon\Carbon::createFromTimestamp($yutub->durasi)->toTimeString() }}</p>
                            </a>
                          </div>
                          @endforeach
                        </div>
                        @else
                        <div class="alert alert-danger">
                          <p class="alert-link card-text">There's no data in workout. Please try again later!</p>
                        </div>
                        @endif
                      </div>
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
  <!-- workout end -->

  <!-- footer start -->
  @include('partial.footer')
  <!-- footer end -->

  <!-- JavaScript Bundle with Popper -->
  @include('partial.scripts')

</body>
</html>
