<div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="post-tabs">
                    
                        <div class="tab-content blog-full" id="postsTabContent">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="#" style="background-image: url({{asset('front/assets/images/4059668.jpg')}});"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="modal-header" style="border: none;">
                                            <h4>Login</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="log-reg-button d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-fb m-h4">
                                                <i class="fab fa-facebook"></i> Login with Facebook
                                            </button>
                                            <button type="submit" class="btn btn-google m-h4" onclick="location.href='{{route('register.google')}}'">
                                                <i class="fab fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                        <form action="{{route('login')}}" method="POST" name="contactform" id="contactform">
                                            @csrf
                                            <div class="form-group mb-2">
                                            <!-- <input type="text" name="user_name" class="form-control" id="fname"placeholder="User Name or Email Address"> -->

                                            <input id="email Username"  type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email/Username" >
                                            @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            
                                            </div>
                                            <div class="form-group mb-2">
                                                
                                            <input id="id_password password Myinput"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"> 
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            
                                            </div>
                                            <div class="form-group mb-2">
                                                
                                                <label class="custom-control-label mb-0" for="exampleCheck1"><input type="checkbox" class="custom-control-input" id="exampleCheck" name="remember_me"> Remember
                                                    me</label>
                                                <a class="float-end" href="#">Lost your password?</a>
                                            </div>
                                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                <input type="submit" class="nir-btn-about w-100" id="submit" value="Login">
                                            </div>
                                            <p class="text-center" onclick="register()">Don't have an account? <a href="#" class="theme"  >Register</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





