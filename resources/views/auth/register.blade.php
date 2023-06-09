<style>
    #submit-button:hover{
        color: #fe0000 !important
    }
    .error {
  color: red;
  font-size: 0.8em;
}
</style>


<div class="modal fade log-reg" id="exampleModal1" tabindex="-1" aria-hidden="true" style=" overflow-y: scroll !important;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="post-tabs">

                            <div class="tab-content blog-full" id="postsTabContent">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="#" style="background-image: url({{asset('front/assets/images/Mobile-signup.png')}});"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="modal-header" style="border: none;"> 
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
                                        <hr class="log-reg-hr position-relative my-3 overflow-visible">


                                        <form method="post" action="{{route('register')}}" name="contactform1" id="contactform1"onsubmit="return validateForm()">
                                            @csrf
                                            <input type="text" value="email" name="socialite_method" hidden>

                                            <div class="form-group" style="line-height:1;">
                                                <input type="text" name="name" class="form-control" id="name"placeholder="User Name" required>
                                                <span id="nameError" class="error"></span><br>
                                            </div>
                                            <div class="form-group " style="line-height:1;">
                                                <input type="text" name="email" class="form-control" id="email"placeholder="Email Address" required style="margin-bottom:19px">
                                                <span id="email-error" style="display: none; margin-left:3px" class="error"></span>
                                            </div>
                                            <div class="form-group " style="line-height:1;">
                                                <input type="password" name="password" class="form-control"id="password" placeholder="Password" required>
                                                <span id="passwordError" class="error"></span><br>
                                            </div>
                                            <div class="form-group " style="line-height:1;">
                                                <input type="password" name="password" class="form-control"id="confirm_password" placeholder="Re-enter Password" required>
                                                <span id="confirmPasswordError" class="error"></span><br>
                                            </div>
                                            <div class="form-group " style="line-height:1;">
                                                <input type="number" name="investment" class="form-control"id="investment" placeholder="How much amount do you have for investment?" required>
                                                <span id="investmentError" class="error"></span><br>
                                            </div>

                                            
                                            <div class="form-group mb-2 d-flex">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I
                                                    have read and accept the Terms and Privacy Policy?</label>
                                            </div>
                                            <div class="comment-btn  text-center border-b">     
                                                <input type="submit" class="nir-btn-about w-100" id="submit1"
                                                    value="Register">
                                            </div>
                                            <p class="text-center mt-3" onclick="login()" >Already have an account? <a
                                                    class="theme" id="submit-button" >Login</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
<script>
$(document).ready(function() {
    $('#email').on('keyup', function() {
        var email = $(this).val();
        var submitButton = $('input[type="submit"]');

        $.ajax({
            url: '{{ route('check-email') }}',
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                email: email
            },
            success: function(response) {
                if (response.message === 'Email already exists') {
                    $('#email-error').text(response.message).show();
                    submitButton.prop('disabled', true);
                } else {
                    $('#email-error').hide();
                    submitButton.prop('disabled', false);
                }
            }
        });
    });
});

</script>




<script>
function validateForm() {
  var name = document.getElementById("name").value;  
  var email = document.getElementById("email").value;
  var password = document.getElementById("lpss1").value;
  var confirm_password = document.getElementById("confirm_password").value;
  var investment = document.getElementById("investment").value;

  // Validate name field
  if (name == "") {
        document.getElementById("nameError").innerHTML = "Please enter your name";
    return false;
  }

  // Validate email field
  if (email == "") {
    document.getElementById("emailError").innerHTML = "Please enter your email";
    return false;
  }

  // Validate email format
  var email_regex = /\S+@\S+\.\S+/;
  if (!email_regex.test(email)) {
    document.getElementById("emailError").innerHTML = "Invalid email format";
    return false;
  }

  // Validate password field
  if (password == "") {
    document.getElementById("passwordError").innerHTML = "Please enter your password";
    return false;
  }

  // Validate confirm password field
  if (confirm_password == "") {
    document.getElementById("confirmPasswordError").innerHTML = "Please enter your Confirm password ";
    return false;
  }

  // Validate password and confirm password match
  if (password != confirm_password) {
    document.getElementById("passwordError").innerHTML = "Passwords do not match";
    return false;
  }
  if (investment == "") {
    document.getElementById("investmentError").innerHTML = "Please enter your investment ";

    return false;
  }

  // Validation passed
  return true;
}
</script>


