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
  <section class="h-100 profile" style="background-color: #eee;">
    <div class="container py-5 h-100">

      <!-- nav start -->
      @include('partial.navbar')
      <!-- nav end -->

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black kartu" style="height: 60vh; background: transparent;">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-lg-6" style="background: #f4f4f4; height: 60vh">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center mt-5 mb-5">
                    <img src="{{ asset('assets/images/user.png') }}" style="width: 40%; height: 40%;" alt="logo">
                  </div>

                  <h5 class="text-center text-black">{{ $user->name }}</h5>
                  @if($user->premium == 'regular')
                  <p style="color: #909090" class="text-center pt-1 pb-3">Non-Paid Member</p>

                  <div class="text-center mb-5 col-lg-12">
                    <!-- <button class="btn btn-warning btn-block" type="submit" style="width: 50%; color: #fff; border-radius: 20px;">Get Premium</button> -->
                    <a class="btn btn-warning" style="width: 50%; color: #fff; border-radius: 20px;">Get Premium</a>
                  </div>
                  @else
                  <p style="color: #909090" class="text-center pt-1 pb-3">Premium Member</p>
                  @endif
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-lg-6 d-flex align-items-center" style=" background: #fff;">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4 card-body">

                  <div class="text-center">
                    <!-- <img src="{{ asset('assets/images/barbel.png') }}" style="width: 20%; height: 20%;" alt="logo"> -->
                  </div>

                  <form method="POST" action="{{ route('profileUpdate') }}">
                    @csrf
                    <!-- message -->
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Something it's wrong:
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                      {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                      {{ Session::get('error') }}
                    </div>
                    @endif
                    <!-- message -->

                    <div class="form-group">
                      <input type="text" value="{{ $user->name }}" id="name" class="form-control" name="name" placeholder="name" required>
                    </div>

                    <div class="form-group my-3">
                      <input type="text" value="{{ $user->email }}" id="email" class="form-control" name="email" placeholder="email" required>
                    </div>

                    <div class="row">
                      <div class="form-group mb-3 col-xs-6 col-sm-6 col-ls-6">
                        <input type="number" value="{{ $user->tinggi }}" id="tinggi" class="form-control" name="tinggi" placeholder="height(m)">
                      </div>
                      <div class="form-group mb-3 col-xs-6 col-sm-6 col-ls-6">
                        <input type="number" value="{{ $user->berat }}" id="berat" class="form-control" name="berat" placeholder="weight(kg)">
                      </div>
                    </div>

                    <div class="text-center mb-5 col-lg-12 pt-2 row">
                      <div class="col-xs-6 col-sm-6 col-lg-6">
                        <button class="btn btn-primary btn-block" type="submit" style="width: 90%; color: #fff; border-radius: 20px;">Edit</button>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-lg-6">
                        <!-- <button class="btn btn-danger btn-block mx-3" type="submit" style="width: 90%; color: #fff; border-radius: 20px;">Logout</button> -->
                        <a href="{{ route('signout') }}" class="btn btn-danger btn-block mx-3" style="width: 90%; color: #fff; border-radius: 20px;">Logout</a>
                      </div>
                    </div>

                  </form>
                  <!-- <h4 class="mb-4">We are more than just a company</h4> -->
                  <!-- <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                </div>
              </div>
            </div>
          </div>

          <div class="mt-5 row" style="background: #fff; border-radius: 20px;">
            <div class="col-xs-4 col-sm-6 col-lg-10 py-3">
              <a href="#" class="ps-3" style="text-decoration: none;">Reminder</a>
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
