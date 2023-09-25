@extends('layouts.app')

@section('kuchbhi')



    <main>
        @if (session('message'))
        <div class="alert alert-danger" role="alert">
            {{ session('message') }}
          </div>
        @endif
    <!-- section -->
    <section class="my-lg-14 my-8">
      <div class="container">
        <!-- row -->
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
            <!-- img -->
            <img src="../assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid">
          </div>
          <!-- col -->
          <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
            <div class="mb-lg-9 mb-5">
              <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
              <p>Welcome back to FreshCart! Enter your email to get started.</p>
            </div>

            <form action="" method="POST">
                @csrf
              <div class="row g-3">
                <!-- row -->

                <div class="col-12">
                  <!-- input -->
                  <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="col-12">
                  <!-- input -->
                  <div class="password-field position-relative">
        <input type="password" id="fakePassword" name="password" placeholder="Enter Password" class="form-control" required >
        <span><i id="passwordToggler"class="bi bi-eye-slash"></i></span>
      </div>

                </div>
                <div class="d-flex justify-content-between">
                  <!-- form check -->
                  {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <!-- label --> <label class="form-check-label" for="flexCheckDefault">
                      Remember me
                    </label>
                  </div> --}}
                  {{-- <div> Forgot password? <a href="forgot-password.html">Reset It</a></div> --}}
                </div>
                <!-- btn -->
                <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
                <!-- link -->
                <div>Don’t have an account? <a href="/register"> Sign Up</a></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
