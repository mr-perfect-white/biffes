@extends('layout.app')


@section('content')





<section class="register-section-page pt-5">
    <div class="tf-container w-1290 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-md-5  col-12">
                <div class="">
                    <div class="card-header text-center">
                        <img  class="w-80" src="{{asset('/frontend/images/logo/biffesnewlogo1.png')}}" alt="login-logo" srcset="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5  col-12">
                <div class="  login-form-box">
                    <!-- <div class="card-header text-center">
                        <img  class="w-50" src="{{asset('/images/logo/biffesnewlogo1.png')}}" alt="login-logo" srcset="">
                    </div> -->
                    <div class="card-body">
                        <div class="register-title">
                            <div class="card-header text-center">
                            <h4>BIFFES Register</h4>
                            </div>
                        </div>
                    <form>
                        <div class="input-box">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                        </div>
                        <div class="input-box">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="input-box">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="input-box">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="input-box form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <div class="submit-btn text-center">
                            <button type="submit" class="btn btn-primary login-biffes-btn">Login</button>
                        </div>
                    </form>

                      
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-2 col-md-2  col-12">

            </div> 
        </div>
    </div>
                
</section><!-- /.Section about --> 


@endsection