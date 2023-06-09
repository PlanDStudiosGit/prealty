<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pulse Realty - SignUp</title>
  <link rel="icon" type="image/x-icon" href="{{asset('front/assets/Images/fav-icon.png')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{('front/assets/css/bootstrap.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./front/assets/css/css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/assets/js/js.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>
  .red-border{
    border: 1px solid red !important;
  }
.countdown{
  display: none;
  background-color: transparent;
  color: #242582 !important;
  margin-top: 5px;
  font-weight: bold;
}
  .resend{
      background: transparent !important;
      text-decoration: underline;
      color: #242582 !important;
      font-weight: bold;
      font-size: 15px;
      border: 1px solid transparent;
      padding: 12px; 
      margin-left: -15px;
     cursor: pointer;
    }
     .resend:hover{
      color: #242582 !important;
     }
.dashboardcontentwrp{min-height:560px;}
#loading{display:none;position:fixed;z-index:9999999;width:100%;height:100%;background:rgba(255,255,255,0.8);top:0;}
#loading .loading-img{position:fixed;z-index:9999;top:42%;left:47%;}
#loading .loading-img img{width:80px;}
@media screen and (max-width:768px){
  #loading .loading-img{left:40%;}
}
@media screen and (max-width:400px){
  #loading .loading-img{left:38%;}
}
.btn{
  outline: none !important;
}
.swal2-actions button {
    margin: 0px 5px;
  width: 120px;
}
.steps-logo-wrp{
  width: 350px;
}
.business-hours-table .business-hours-table-row{
  display: flex;
    padding: 0 5px 0 0;
    font-size: 22px;
}
.business-hours-table .select-dropdown{
  height: 32px !important;
  padding: 5px 5px !important;
  margin-right: 5px !important;
  margin-left: 5px !important;
}
.switch-field {
  display: flex;
}

.switch-field input {
  position: absolute !important;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  width: 1px;
  border: 0;
  overflow: hidden;
}

.switch-field label {
  background-color: #e4e4e4;
  color: rgba(0, 0, 0, 0.6);
  font-size: 14px;
  line-height: 1;
  text-align: center;
  padding: 8px 10px;
  margin-right: -1px;
  margin-bottom: 0px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  transition: all 0.1s ease-in-out;
}

.switch-field label:hover {
  cursor: pointer;
}
.switch-field label:first-of-type {
  border-radius: 4px 0 0 4px;
}

.switch-field label:last-of-type {
  border-radius: 0 4px 4px 0;
}

.switch-field input:checked + label {
  background-color: #242582 !important;
  box-shadow: none;
}
</style>
<style>
.social-header-wraper, .footer-wraper{
  display: none !important;
}
/*----STEPS----*/
.step-main-wraper {
overflow: hidden
}
.steps-header {
background: #fff;
padding: 10px 0;
border-bottom: 1px solid #ccc
}
.header-heading {
text-align: center;
}
.header-heading h1 {
font-size: 20px;
padding-top: 14px;
font-style: italic;
}
.header-back-button {
text-align: right;
padding-top: 14px
}
.header-back-button a {
font-size: 14px;
color: #000;
text-decoration: none;
}
.steps-progress-bar {
background: #e6e6e6;
height: 12px
}
.steps-progress-bar span {
display: block;
height: 12px;
width: 10%;
background: #242582 !important;
}
.progess-bar-outer-main h2 {
text-align: center;
font-size: 14px;
font-weight: normal;
color: #b0b0b0;
padding-top: 15px
}
.steps-content-area-wrp {
margin-bottom: 65px
}
.footer-step-main-wrp #nextBtn, .footer-step-main-wrp #finishBtn {
background-color: rgb(38, 117, 228) !important;
    font-size: 16px;
    color: #ffffff;
    border-radius: 10px !important;
    padding: 10px 30px !important;
    border:1px solid  rgb(38, 117, 228) !important;
    margin-bottom: 20px;

}
#prevBtn {
float: left;
    background-color: rgb(172, 172, 172) !important;
    font-size: 16px;
    color: #ffffff;
    border-radius: 10px !important;
    padding: 10px 30px !important;
}
#prevBtn:hover {
box-shadow: none !important;
}
.footer-step-main-wrp #nextBtn:hover {
background: #3ea61b;
box-shadow: none;
}
/*----STEPS----*/
.form-submit-button .form-submit-button {
    background-image: linear-gradient(to right, #76e053 , #242582 !important);
    border: none;
    color: #fff;
    height: 35px;
    border-radius: 30px;
    outline: none;
    padding: 0 20px;
    width: 100%;
    text-align: center;
}
.btn-google {
        color: #545454;
        background-color: #ffffff;
        box-shadow: 0 1px 2px 1px #ddd;
        width: 100%;
        border-radius: 30px;
        border: 1px solid  #afabac;
         border-radius: 2px;
        text-transform: capitalize;
        font-size: 15px;
        padding: 10px 19px;
        cursor: pointer;
        border-radius: 30px;
        }
        .btn-google:hover{
        background-color:#f9f8f8;
        }
        .btn-fb {
        color: white;
        background-color: #3B5998;
        box-shadow: 0 1px 2px 1px #ddd;
        width: 100%;
        border-radius: 30px;
        border: 1px solid #3B5998;
         border-radius: 2px;
        text-transform: capitalize;
        font-size: 15px;
        padding: 10px 19px;
        cursor: pointer;
        border-radius: 30px;
        }
        .btn-fb:hover{
            color: white !important;
        background-color:#3B5998;
        }
article{
  display: none;
}
article.on{
  display: block;
}

.new-big-footer-wraper{
  display: none !important;
}
.pac-container{
z-index: 1050 !important;
}
.category-list-dropdown-wrapper{
position: absolute;
top: 68px;
left: 0;
background: #fff;
width: 100%;
z-index: 1;
border: 1px solid #ccc;
max-height: 250px;
overflow: auto;
display: none;
}
.category-list-dropdown-wrapper ul{
list-style: none;
}
.category-list-dropdown-wrapper ul li a{
padding: 10px 15px;
display: block;
color: #333;
}
.category-list-dropdown-wrapper ul li a:hover{
background: #242582 !important;
color: #fff;
}
.category-input-cross{
position: absolute;
top: 18px;
color: #b7bcc7;
left: 16px;
font-size: 20px;
right: 10px;
left: auto;
cursor: pointer;
display:none;
}
.dispansay-business-main-wraper {
padding: 20px 0
}
.footer-wraper {
display: none;
}
.social-header-wraper {
box-shadow: none;
}
.dispansay-business-main-wraper h5 {
text-align: center;
font-size: 16px;
font-weight: normal;
color: #b0b0b0;
padding-top: 15px;
}
.step-despensary-one-bussiness {
padding: 20px;
}
.step-despensary-one-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom: 10px;
}
.step-despensary-one-bussiness h3 p {
margin-bottom: 15px;
font-size: 16px;
}
.footer-dispansary-button {
    padding-left: 0;
    margin: 20px ;

    text-align: right;
    list-style: none;
}
.float {
display: none;
}
.footer-dispansary-button {
}

.nextbtn3{
padding: 7px 45px;
background: #242582 !important;
border-radius: 30px;
text-align: center;
color: #fff;
font-size: 14px;
font-weight: 600;
text-decoration: none;
box-shadow: 0px 7px 13px -6px #d6d6d6;
outline: none;
font-family: Arial, serif !important;
border: none;
}
.nextbtn3:hover {
box-shadow: none;
}
.footer-dispansary-button .nextbtn2 {

padding: 7px 45px;
background: #242582 !important;
border-radius: 30px;
text-align: center;
color: white;
font-size: 14px;
font-weight: 600;
text-decoration: none;
box-shadow: 0px 7px 13px -6px #d6d6d6;
outline: none;
font-family: Arial, serif !important;
border: none;
}
.footer-dispansary-button .nextbtn2:hover {
box-shadow: none;
}

.hint-text-despansary {
background: #f6f7f8;
padding: 25px;
margin: 25px 0
}
.dispansay-business-main-wraper {
}
.dispansay-business-main-wraper .form-group {
}
.dispansay-business-main-wraper .form-group .form-control {
box-shadow: none;
outline: none;
border: 1px solid #ccc;
height: 45px !important;
padding-left: 20px;
}
.dispansay-business-main-wraper .form-group .form-control:focus{
border:1px solid #242582 !important;
}
.hint-text-despansary h4 {
font-size: 16px;
font-weight: 600;
margin-bottom: 10px;
}
.hint-text-despansary h4 img {
margin-top: -5px;
margin-right: 5px;
}
.claim-button {
text-align: right;
margin-top: 12px;
}
.claim-button a {
padding: 12px 35px;
background: #242582 !important;
border-radius: 0;
text-align: center;
color: #fff;
font-size: 14px;
font-weight: 600;
text-decoration: none;
box-shadow: 0px 7px 13px -6px #d6d6d6;
outline: none;
font-family: Arial, serif !important;
border: none;
}
.claim-button a:hover {
box-shadow: none;
}
.field-form-group-dropdown {
background: #fff;
padding: 25px;
box-shadow: 0px 16px 37px 1px #dedede;
}
.field-form-group-dropdown a {
color: #000;
font-size: 18px;
display: block;
padding: 5px;
}
.new-craete-button a:hover {
background: #242582 !important;
color: #fff;
}
.new-craete-button {
border-bottom: 1px solid #f5f5f5;
padding-bottom: 15px
}
.field-form-group-dropdown {
}
.field-form-group-dropdown ul {
list-style: none;
height: 195px;
overflow: auto;
margin-bottom: 14px
}
.field-form-group-dropdown ul li {
}
.field-form-group-dropdown ul li .dropdown-business-listing {
border-bottom: 1px solid #f5f5f5;
padding: 0px 0
}
.google_busniess_listing{
  overflow-y: auto;
    max-height: 300px;
    overflow-x: hidden;
}
.dropdown-business-listing:hover {
  background: #f5f5f5;
}

.google_busniess_listing ul li{
  display: block;
}
.dropdown-business-listing{
  display: flex;
    width: 100%;
    border-bottom: 1px solid #a1a1a1;
    padding: 10px 5px 10px 5px;
}
.dropdown-business-listing a {
  width: 70%;
    display: inline-block;
}
.dropdown-business-listing h4 {
  margin-top: 15px;
    font-size: 16px;
    line-height: 1.8rem;
}
.dropdown-business-listing a.green-btn{
  height: 31px;
    width: 150px;
    margin-top: 9px;
}
.dropdown-business-listing a .dropdown-business-image {
  height: 50px;
    width: 50px;
    background-size: cover !important;
    border-radius: 50%;
    float: left;
    margin-right: 15px;
    border: 1px solid #a1a1a1;
}
.search-bar-field a {
text-align: center;
border: 1px solid #ccc;
padding: 10px 0;
display: block;
text-align: center;
border-radius: 6px
}
.search-bar-field a i {
margin-right: 10px;
}
.step-despensary-two-bussiness{
padding: 20px;
}
.step-despensary-two-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom:20px;
}
.listing-two-despansary-wrp ul{
list-style:none;
margin-top:25px
}
.listing-two-despansary-wrp ul li .list-two-text{
background: #242582 !important;
padding: 12px 15px;
color: #fff;
margin-bottom: 15px;
}
.listing-two-despansary-wrp ul li a{
float:right;
color:#2b7d0f;
text-decoration:none;
}
.btn-primary.active, .btn-primary:active, .open>.dropdown-toggle.btn-primary {
background-color: #242582 !important !important;
border-color: #242582 !important !important;
outline:none;
padding: 7px 20px;
}
.listing-two-despansary-wrp span{
margin-right:8px;
}
.step-despensary-three-bussiness{
padding: 20px;
}
.step-despensary-three-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom: 20px;
}
.step-despensary-four-bussiness{
padding: 20px;
}
.step-despensary-four-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom: 20px;
}
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio]{
margin-left:0;
}
.radio-button-wrp label{
margin-right:25px;
font-weight:normal;
}
.radio-button-wrp input[type=checkbox], input[type=radio]{
margin-right: 7px;
width: 25px;
height: 25px;
position: relative;
top: 8px;
}
.radio-button-wrp p{
font-size:18px;
color:#000
}
.step-despensary-five-bussiness{
padding: 20px;
}
.step-despensary-five-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom:20px;
}
.step-despensary-six-bussiness{
padding: 20px;
}
.step-despensary-six-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom:20px;
}
.step-despensary-seven-bussiness{
padding: 20px;
}
.step-despensary-seven-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom:20px;
}
.step-despensary-eight-bussiness{
padding: 20px;
}
.step-despensary-eight-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom:20px;
}
.paymentoption-checkbox {
border:1px solid #ddd;
padding: 10px;
margin-bottom:25px
}
.paymentoption-checkbox .boxes {
margin-top: 2px;
}
.paymentoption-checkbox input[type="checkbox"] {
display: none;
}
.paymentoption-checkbox input[type="checkbox"] + label {
display: block;
position: relative;
padding-left: 30px;
margin-bottom: 20px;
font-family: 'Roboto', sans-serif;
color: #000;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
font-weight: 400
}
.paymentoption-checkbox input[type="checkbox"] + label:last-child {
margin-bottom: 0;
}
.paymentoption-checkbox input[type="checkbox"] + label:before {
content: '';
display: block;
width: 20px;
height: 20px;
border: 1px solid #445161;
position: absolute;
left: 0;
top: 0;
opacity: .6;
-webkit-transition: all .12s, border-color .08s;
transition: all .12s, border-color .08s;
}
.paymentoption-checkbox input[type="checkbox"]:checked + label:before {
width: 10px;
top: -5px;
left: 5px;
border-radius: 0;
opacity: 1;
border-top-color: transparent;
border-left-color: transparent;
-webkit-transform: rotate(45deg);
transform: rotate(45deg);
}
.file-upload {
background-color: #ffffff;
}
.file-upload-btn {
width: 100%;
margin: 0;
color: #fff;
background: #1FB264;
border: none;
padding: 10px;
border-radius: 4px;
border-bottom: 4px solid #15824B;
transition: all .2s ease;
outline: none;
text-transform: uppercase;
font-weight: 700;
}
.file-upload-btn:hover {
background: #1AA059;
color: #ffffff;
transition: all .2s ease;
cursor: pointer;
}
.file-upload-btn:active {
border: 0;
transition: all .2s ease;
}
.file-upload-content {
display: none;
text-align: center;
}
.file-upload-input {
position: absolute;
margin: 0;
padding: 0;
width: 100%;
height: 100%;
outline: none;
opacity: 0;
cursor: pointer;
}
.image-upload-wrap {
border:1px dashed #1FB264;
position: relative;
}
.image-dropping,
.image-upload-wrap:hover {
background-color: #f5f5f5;
}
.image-title-wrap {
padding: 0 15px 15px 15px;
color: #222;
}
.drag-text {
text-align: center;
}
.drag-text h3 {
font-weight: 100;
text-transform: uppercase;
color: #15824B;
padding: 60px 0;
}
.file-upload-image {
padding: 20px;
border: 1px dashed #ccc;
margin-bottom: 18px;
}
.remove-image {
width: 200px;
margin: 0;
color: #fff;
background: #242582 !important;
border: none;
padding: 10px;
transition: all .2s ease;
outline: none;
text-transform: uppercase;
font-weight: 700;
}
.remove-image:hover {
background: #000;
}
.remove-image:active {
border: 0;
transition: all .2s ease;
}
.step-despensary-nine-bussiness {
padding: 20px;
}
.step-despensary-nine-bussiness h3 {
font-size: 32px;
color: #000;
font-weight: bold;
margin-bottom:20px;
}
.drag-text h3{
font-weight:normal;
text-transform:none;
}
.totalSteps{
display: none;
}
.addressFromGoogle {
padding: 15px;
border: 1px solid #f1f1f1;
border-radius: 5px;
background: #f1f1f1;
margin-bottom: 15px;
}
.popover-title{
display: none;
}
.nav-tabs>li{
width: 33.3%;
}
.nav-tabs>li>a {
background: #333;
border-radius: 0;
text-align: center;
color: #fff;
font-size: 14px;
font-weight: 600;
text-decoration: none;
outline: none;
font-family: Arial, serif !important;
border: none;
}
.nav-tabs>li>a:hover{
background: #333;
border-radius: 0;
text-align: center;
color: #fff;
font-size: 14px;
font-weight: 600;
text-decoration: none;
outline: none; 
font-family: Arial, serif !important;
border: none;
}
.nav-tabs>li.active>a {
background: #242582 !important;
border-radius: 0;
text-align: center;
color: #fff;
font-size: 14px;
font-weight: 600;
text-decoration: none;
outline: none;
font-family: Arial, serif !important;
border: none;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
background: #242582 !important;
border-radius: 0;
text-align: center;
color: #fff;
font-size: 14px;
font-weight: 600;
text-decoration: none;
outline: none;
font-family: Arial, serif !important;
border: none;
}
#listyourbusiness{
display: none !important;
}
.dashboardcontentwrp .modal-header .close {
    opacity: 0.9 !important;
    color: #333 !important;
    margin-top: -10px;
    margin-right: 5px !important;
    font-size: 14px;
}
#loading{display:none;position:fixed;
        z-index:9999999;width:100%;
        height:100%;
        background:rgba(255,255,255,0.8);top:0;}
        #loading .loading-img{position:fixed;
        z-index:9999;top:42%;left:47%;}
        #loading .loading-img img{width:80px;}
        @media screen and (max-width:768px){
        #loading .loading-img{left:40%;}
        }
        @media screen and (max-width:400px){
        #loading .loading-img{left:38%;}
        }
</style>

<!--dshboardcontent-->
<div id="loading" style="">

            <div class="loading-img" style=""><img class="img-responsive" src="{{ asset('front/assets/images/cover-loading.gif')}}"/></div>
        </div>




<form action="{{route('social.investment')}}" method="post">
    @csrf

  <div class="dispansay-business-main-wraper" style="margin-bottom:80px;">
  <div class="container" style="    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 0px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgb(0 0 0 / 30%);
    box-shadow: 0 30px 60px 0 rgb(0 0 0 / 30%);">
 

       

 
  

    

 





      
           <div class="text-center">
                <a href="./Index.html"><img class="logo-01" style="    text-align: center;
                padding-top: 2rem;
                width: 200px;
                " src="{{asset('front/assets/Images/logo-01.png')}}"></a>
                <h3 class="login">Sign Up</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" style="margin:20px;">

                    <label class="control-label">How much amount do you have for investment?</label>
                    <!-- <input type="hidden" id="type" name="type" value="1"> -->
 
                        <div class = "input-group" >
                            <span class = "input-group-addon">$</span>
                            <input type="number" class="form-control" name="investment" id="investment" placeholder="$ 100,000" required/>
                            
                        </div>

                    </div>

                    
                </div>
            </div>
      
  


       
        <div class="footer-dispansary-button footer-step-main-wrp">

          <button class="pull-right nextbtn2"  type="submit" id="finishBtn" >Finish</button>
        </div>
      </div>
    </div>

  
</form>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="{{asset('phone_input/js/intlTelInput.js')}}"></script>
  
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJrN7v8LCpbElJMJ7HwtebSXbUhm4hdR0&libraries=places&callback=initialize" async defer></script>   -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJrN7v8LCpbElJMJ7HwtebSXbUhm4hdR0&libraries=places&callback=initAutocomplete"async defer></script>
{{--<script src="{{asset('social/cookies_consent.js')}}"></script>--}}



<script>
  var investment = $('#investment').val();

  if(investment == '1'){
        validate = 1;
        $('#investment').addClass('red-border');
      }
</script>


  </body>
</html>
