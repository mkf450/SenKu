<!DOCTYPE html>
<html class="no-js" lang="en">

@include('partial.headtag')

<body>
    <!-- nav start -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background: rgba(0, 0, 0, 0.75);">
      <div class="container-fluid">
        <a class="navbar-brand py-1" href="index.html">
          <img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="135" height="42" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item pt-1 px-3"><a class="active nav-link" href="index.html">Home</a></li>
            <li class="nav-item pt-1 px-3"><a class="nav-link" href="#">Workout</a></li>
            <li class="nav-item pt-1 px-3"><a class="nav-link" href="#">Health</a></li>
            <li class="nav-item pt-1 px-3"><a class="btn login btn-primary nav-link" style="width: 150px; border-radius: 100px; color: #fff;" href="#">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
</body>
</html>
