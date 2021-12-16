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
  <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
  <!-- Title -->
  <title>{{ env('APP_NAME', 'SenKu') }}</title>
</head>
<body id="page-top">
  <!-- <section class="login" style=" background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/background.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <div class="container"> -->

      <!-- register start -->
      <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">

          <!-- nav start -->
          @include('partial.navbar')
          <!-- nav end -->

          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-xs-10 col-sm-9 col-lg-6" style="background: #202020">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center mb-5">
                        <img src="{{ asset('assets/images/logo.png') }}" style="width: 70%; height: 70%;" alt="logo">
                      </div>

                      <form method="POST" action="{{ route('daftar') }}">

                        <!-- message -->
                        @csrf
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

                        <p>Please fill up the blanks</p>
                        <div class="form-outline mb-2">
                          <div>
                            <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Fullname" required/>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                          </div>

                          <input type="email" name="email" id="form2Example11" class="form-control my-2" placeholder="Email address" required/>
                          @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                          @endif

                          <div class="col-xs-6 col-sm-6 col-lg-6 pass-kiri">
                            <input type="password" name="password" id="form2Example22" class="form-control mb-2" placeholder="Password" required/>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                          </div>

                          <div class="col-xs-6 col-sm-6 col-lg-6 pass-kanan ps-2 mb-3">
                            <input type="password" name="password_confirmation" id="form2Example22" class="form-control mb-2" placeholder="Confirm Password" required/>
                            @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                          </div>
                          <!-- <label class="form-label" for="form2Example11">Username</label> -->
                          <!-- <label class="form-label" for="form2Example22">Password</label> -->
                        </div>

                        <!-- <div class="form-outline mb-2">
                        </div> -->

                        <div class="text-center pt-1 mb-5">
                          <button class="btn btn-primary btn-block" type="submit" style="width: 100%">Register</button>
                          <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Already have an account? <a href="{{ route('login') }}" style="text-decoration: none; color: #24a0ed">Login</a></p>
                          <!-- <button type="button" class="btn btn-outline-danger">Create new</button> -->
                        </div>

                      </form>

                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-3 col-lg-6 d-flex align-items-center" style=" background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/daftar.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <!-- <h4 class="mb-4" style="color: #fff">We are more than just a company</h4> -->
                      <!-- <img src="{{ asset('assets/img/daftar.jpg') }}" alt=""> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

    <!-- </div>
  </section> -->
  <!-- register end -->

  <!-- footer start -->
  @include('partial.footer')
  <!-- footer end -->

  <!-- JavaScript Bundle with Popper -->
  @include('partial.scripts')

</body>
</html>
