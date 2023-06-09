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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
<div class="dashboardcontentwrp">
  <!-- intlTelInput -->
<!-- timePicker -->


<?php $hidden_id = rand(10000,99999);?>
<input type="hidden" id="busniess_id" name="">
<div class="step-main-wraper">


</div>

<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" value="email" name="socialite_method" hidden>
 
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
  <div class="step-despensary-one-bussiness step1 totalSteps" style="display: block;">
   <div class="text-center">
              <a href="./Index.html"><img class="logo-01" style="    text-align: center;
          padding-top: 2rem;
          width: 200px;
      " src="{{asset('front/assets/Images/logo-01.png')}}"></a>
        <h3 class="login">Sign Up</h3>
    </div>
    <div class="row" >
      <!-- Tabs -->
      <div class="col-lg-12" >
       
            <div class="form-group">

              <label class="control-label ">First Name</label>
              <input type="text" class="form-control"  name="fname" id="fname" placeholder="First Name"/>
              <!-- <input type="hidden" id="type" name="type" value="1"> -->

            </div>

            <div class="form-group">
              <label class="control-label ">Last Name</label>
              <input type="text"  id="lname" name="lname" class=" form-control" placeholder="Last Name" >
                                                <!-- <input type="hidden" id="search-lat" name="lat" />
                                                <input type="hidden" id="search-lng" name="lng" />  -->
            </div>

            
      </div>
    </div>
  </div>
  <div class="step-despensary-two-bussiness step2 totalSteps">
       <div class="text-center">
              <a href="./Index.html"><img class="logo-01" style="    text-align: center;
          padding-top: 2rem;
          width: 200px;
      " src="{{asset('front/assets/Images/logo-01.png')}}"></a>
        <h3 class="login">Sign Up</h3>
    </div>
     <div class="row" style="margin-top:15px !important;">
      <div class="col-md-12">
       

       
        <div class="form-group">
        <!-- <span id="email-message"></span> -->
       
        <div id="email-message" class='alert alert-danger' style="display:none;padding:10px;margin-top:3%"> Email format !</div>

          <div id="b_wrong3" class='alert alert-danger' style="display:none;padding:10px;margin-top:3%">Incorrect Email format !</div>
                  <div id="wrong3" class='alert alert-danger' style="display:none;padding:10px;margin-top:3%">Incorrect Email format !</div>
                  <div id="email-exists"></div>
                   <!-- <div id="email-exists" class='alert alert-danger' style="display:none;padding:10px;margin-top:3%">Email has been taken !</div> -->
              <label class="control-label tab-text text-left" style="margin-left:-17px !important;" >Email</label>
              <input type="email" class="form-control bussiness_email"  name="email" id="email" placeholder="Enter your email address" />
              <span id="email-status"></span>
        </div> 
      </div>
    </div>
  </div>
 
  

    <div class="step-despensary-three-bussiness step3 totalSteps">
      <div class="text-center">
              <a href="./Index.html"><img class="logo-01" style="    text-align: center;
          padding-top: 2rem;
          width: 200px;
      " src="{{asset('front/assets/Images/logo-01.png')}}"></a>
        <h3 class="login">Sign Up</h3>
    </div>

    <div class="col-md-12">
          <div class="form-group" id="password_div">
                      <label> Password: </label><br>
                        <div class = "input-group">
                         
                          <input type="password" name="password" id="password"  id="id_password"  name="password" type="password" class="form-control" placeholder="Password" />
                          <span class = "input-group-addon" > <i class="fa fa-eye-slash"  id="togglePassword"></i></span>
                        </div>
                    
            </div> 
          </div>
        </div>





  <div class="step-despensary-four-bussiness step4 totalSteps">
           <div class="text-center">
              <a href="./Index.html"><img class="logo-01" style="    text-align: center;
          padding-top: 2rem;
          width: 200px;
      " src="{{asset('front/assets/Images/logo-01.png')}}"></a>
        <h3 class="login">Sign Up</h3>
    </div>

    <div class="row">
      <div class="col-md-12">
         <div class="form-group">

              <label class="control-label">How much amount do you have for investment?</label>
              <!-- <input type="hidden" id="type" name="type" value="1"> -->

              <div class = "input-group">
         <span class = "input-group-addon">$</span>
         <input type="number" class="form-control" name="investment" id="investment" placeholder="$ 100,000" required/>

      </div>

            </div>

            
      </div>
    </div>
  
  
  </div>
 
  


        <input type="hidden" id="step_no" value="1" />
        <div class="footer-dispansary-button footer-step-main-wrp">
          <button class="pull-left backbtn" id="prevBtn" onclick="nextPrev(-1)"  type="button" style="display:none;">Back</button>
          <button class="pull-right nextbtn green-btn" type="button" id="nextBtn"  id="submit-button"  onclick="nextPrev(1)">Next</button>
          <button class="pull-right nextbtn2"  type="submit" id="finishBtn" onclick="submitGroupForm()" style="display:none;">Finish</button>
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
 
</script>





<script>
$('.form-control').on('click',function(){
  $(this).removeClass('red-border');
});
$(document).on('change','#business_Cgender',function(){
  var gender = $('#business_Cgender').val();
  if(gender == 2){
    $('.gender-selector').addClass('othergender');
    $('.gender-selector').removeClass('col-md-6');
    $('.gender-div').show();
  }else{
    $('.gender-selector').addClass('col-md-6');
    $('.gender-selector').removeClass('othergender');
    $('.gender-div').hide();
    $('#other_gender').val('');
  }
});
$(document).on('input','.endtime',function(){
    // console.log('abc');
});
$(document).on('change','.is_cl1',function(){
  var $this = $(this);
  var day = $this.data('day');
  // console.log(day);
  if($this.val() == 'no'){
    $('#starttime-'+day).removeAttr('disabled');
    $('#endtime-'+day).removeAttr('disabled');
  }else{
    $('#starttime-'+day).attr('disabled',true);
    $('#endtime-'+day).attr('disabled',true);
  }
});
</script>
<?php /*if($this->session->userdata('id')){ ?>
<script>
  // alert('here');
  $('.step1').hide();
    $('.step2').hide();
      $('.step3').hide();
        $('.step4').hide();
  $('.step5').show();
  $('#stage-step_no').html(5);
  $('#step_no').val(5);
</script>
<?php }*/ ?>

<script>
$('.form-control').on('click',function(){
  $(this).removeClass('red-border');
});
$(document).on('change','#business_Cgender',function(){
  var gender = $('#business_Cgender').val();
  if(gender == 2){
    $('.gender-selector').addClass('col-md-3');
    $('.gender-selector').removeClass('col-md-6');
    $('.gender-div').show();
  }else{
    $('.gender-selector').addClass('col-md-6');
    $('.gender-selector').removeClass('col-md-3');
    $('.gender-div').hide();
    $('#other_gender').val('');
  }
});
$(document).on('input','.endtime',function(){
    // console.log('abc');
});
$(document).on('change','.is_cl1',function(){
  var $this = $(this);
  var day = $this.data('day');
  // console.log(day);
  if($this.val() == 'no'){
    $('#starttime-'+day).removeAttr('disabled');
    $('#endtime-'+day).removeAttr('disabled');
  }else{
    $('#starttime-'+day).attr('disabled',true);
    $('#endtime-'+day).attr('disabled',true);
  }
});
</script>


<script type="text/javascript">
$(document).ready(function(){
  $('#phone').mask('9999999999');
  $('#business_phone').mask('9999999999');
  $("#business_phone,#phone").intlTelInput({
    utilsScript: "{{asset('phone_input/js/utils.js')}}",
   
  });
  
  $("#business_phone").on("countrychange", function(e, countryData){
    $('#business_country_code').val(countryData.dialCode);
  });
  $("#phone").on("countrychange", function(e, countryData){
    $('#business_Ccountry_code1').val(countryData.dialCode);
  });
});
</script>
<script type="text/javascript">
$(document).on('click','.switch-field label',function(){
  $(this).parent().removeClass('red-border');
  // var $this = $(this);
  // var id = $this.attr('id');
  // var day = $this.data('day');
  // var type = $this.data('type');
  // $('#'+type+'-am-'+day+',#'+type+'-pm-'+day).prop('checked',false);
  // $('#'+type+'-am-'+day).prop('checked',true);
  // $this.addClass('active');
  // console.log(id);
});
$(document).on('change','.is_closed',function(){
    var $this = $(this);
    var val = $this.val();
    var day = $this.data('day');
  if(val == 'yes'){
    $('#start-hour-'+day+',#start-min-'+day+',#start-am-'+day+',#start-pm-'+day+',#end-hour-'+day+',#end-min-'+day+',.switch-start-'+day).attr('disabled',true);
  }else{
    $('#start-hour-'+day+',#start-min-'+day+',#start-am-'+day+',#start-pm-'+day+',#end-hour-'+day+',#end-min-'+day+',.switch-end-'+day).removeAttr('disabled');
  }
});
</script>
<script>
    var componentForm = {
    route: "short_name",
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    postal_code: 'short_name',
    country: 'long_name',
    lat:'short_name',
    lng:'short_name'
    };
    function initialize(start_lat = null, start_lng = null){
    var thisinput = document.getElementById('autocomplete-city');
    var options = {
    types: ['(cities)']
    };
    var autocompletesearch = new google.maps.places.Autocomplete(thisinput, options);
    autocompletesearch.addListener('place_changed', function(){
    var placesearch = autocompletesearch.getPlace();
    var latsearch = placesearch.geometry.location.lat();
    var lngsearch = placesearch.geometry.location.lng();
    // console.log(lat);
    // console.log(lng);
    $('#search-lat').val(latsearch);
    $('#search-lng').val(lngsearch);
    });
    var thisinput1 = document.getElementById('autocomplete-city1');
    var options = {
    types: ['(cities)']
    };
    var autocompletesearch1 = new google.maps.places.Autocomplete(thisinput1, options);
    autocompletesearch1.addListener('place_changed', function(){
    var placesearch1 = autocompletesearch1.getPlace();
    var latsearch1 = placesearch1.geometry.location.lat();
    var lngsearch1 = placesearch1.geometry.location.lng();
    // console.log(lat);
    // console.log(lng);
    $('#search-lat_top').val(latsearch1);
    $('#search-lng_top').val(lngsearch1);
    });
    if(start_lat != null && start_lng != null){
    var lat = start_lat;
    var lng = start_lng;
    }else{
    var lat = 41.029756;
    var lng = -102.200497;
    }
    var latlng = new google.maps.LatLng(lat, lng);
    var map = new google.maps.Map(document.getElementById('map'), {
    center: latlng,
    zoom: 10
    });
    var marker = new google.maps.Marker({
    map: map,
    position: latlng,
    draggable: true,
    anchorPoint: new google.maps.Point(0, -29)
    });
    // var input = document.getElementById('route');
    var input = document.getElementById('business_address');
    // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    var geocoder = new google.maps.Geocoder();
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
    var infowindow = new google.maps.InfoWindow();
    autocomplete.addListener('place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
    window.alert("Autocomplete's returned place contains no geometry");
    return;
    }
    
    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
    map.fitBounds(place.geometry.viewport);
    } else {
    map.setCenter(place.geometry.location);
    map.setZoom(17);
    }
    
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);
    
    // bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
    bindDataToForm(place,place.geometry.location.lat(),place.geometry.location.lng());
    // console.log(place.geometry.location);
    // infowindow.setContent(place.formatted_address);
    // infowindow.open(map, marker);
    
    });
    // this function will work on marker move event into map
    google.maps.event.addListener(marker, 'dragend', function() {
    geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    if (results[0]) {
    // console.log(results[0]);
    // bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
    bindDataToForm(results[0],marker.getPosition().lat(),marker.getPosition().lng());
    // infowindow.setContent(results[0].formatted_address);
    // infowindow.open(map, marker);
    }
    }
    });
    });
    }
function bindDataToForm(place,lat,lng){
  // console.log(place);
  // and then fill-in the corresponding field on the form.
  document.getElementById('local_lat').value = lat;
  document.getElementById('local_lng').value = lng;
  var street_number = '', route = '', locality = '', administrative_area_level_3 = '', administrative_area_level_2 = '', administrative_area_level_1 = '', country = '', postal_code = '';
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if(addressType == 'street_number'){
      street_number = place.address_components[i].long_name;
    }
    if(addressType == 'route'){
      route = place.address_components[i].long_name;
    }
    if(addressType == 'locality'){
      locality = place.address_components[i].long_name;
    }
    if(addressType == 'administrative_area_level_3'){
      administrative_area_level_3 = place.address_components[i].long_name;
    }
    if(addressType == 'administrative_area_level_2'){
      administrative_area_level_2 = place.address_components[i].long_name;
    }
    if(addressType == 'administrative_area_level_1'){
      administrative_area_level_1 = place.address_components[i].long_name;
    }
    if(addressType == 'country'){
      country = place.address_components[i].long_name;
    }
    if(addressType == 'postal_code'){
      postal_code = place.address_components[i].long_name;
    }
/** /
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      // console.log(addressType+' -:- '+val);
      document.getElementById(addressType).value = val;
    }else{
      $('#'+addressType).val('');
    }
/**/
  }
  $('#street_number').val(street_number+' '+route);
  var city = (locality != '')?locality:((administrative_area_level_3 != '')?administrative_area_level_3:administrative_area_level_2);
  $('#locality').val(city);
  $('#administrative_area_level_1').val(administrative_area_level_1);
  $('#country').val(country);
  $('#postal_code').val(postal_code);
}
</script>
<script>
    var category_array = [];
    var amenaties_array = [];
    var days =  new Array()
    // days[monday] = new Array();
    $("input[name='amentiescheckbox']").change(function() {
    var checked = $(this).data('id');
    
    if ($(this).is(':checked')) {
    amenaties_array.push(checked);
    } else {
    amenaties_array.splice($.inArray(checked, amenaties_array),1);
    }
    });
    $(document).on('click','#category-input',function(){
    $('.category-list-dropdown-wrapper').show();
    });
    $(document).on('click','.category-list-dropdown-wrapper ul li a',function(){
    var $this = $(this);
    var id = $this.data('id');
    var name = $this.data('name');
    var index = parseInt(category_array.indexOf(id));
    // console.log(category_array);
    // console.log(index);
    if(index < 0){
      var html = '<span class="button-checkbox checked-checkbox" style="margin-top:10px; display: inline-block;">\
        <button type="button" class="btn btn-primary active" data-color="primary" data-type="category" data-id="'+id+'"><i class="state-icon glyphicon glyphicon-remove"></i> '+name+'</button>\
        <input type="checkbox" class="hidden" checked />\
      </span>';
      $('.listing-two-despansary-wrp').append(html);
      $('#category-input').val('');
      $('.category-list-dropdown-wrapper ul li').show();
      category_array.push(id);
    }else{
    }
    $('.category-list-dropdown-wrapper').hide();
    });
    $(document).on('keyup','#category-input',function(){
    var search = $('#category-input').val();
    if(search.length > 0){
      $('.category-input-cross').show();
      $('.category-list-dropdown-wrapper ul li').each(function(){
        var $this = $(this);
        var category = $this.find('a').html();
        if(category.toLowerCase().search(search) < 0){
          $this.hide();
        }else{
          $this.show();
        }
      });
    }else{
      $('.category-input-cross').hide();
      $('.category-list-dropdown-wrapper ul li').show();
    }
    });
    $(document).on('click','.category-input-cross',function(){
    $('#category-input').val('');
    $('.category-list-dropdown-wrapper ul li').show();
    });
    /*category step*/
    $(document).on('click','.checked-checkbox button',function(){
    var $this = $(this);
    var id = $this.data('id');
    var type = $this.data('type');
    if(type == 'interest'){
      if(interest_array.splice( $.inArray(id, interest_array), 1 )){
        $this.remove();
      }
    }else{
      if(category_array.splice( $.inArray(id, category_array), 1 )){
        $this.remove();
      }
    }
    });
    function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
      $('.image-upload-wrap').hide();
      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();
      $('.image-title').html(input.files[0].name);
      };
      reader.readAsDataURL(input.files[0]);
    } else {
      removeUpload();
    }
    }
    function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
    });
    function nextPrev(step = null){
    var this_step = $('#step_no').val();
    // alert(this_step);
    var next_step = parseInt($('#step_no').val())+parseInt(step);
    var total_steps = $('.totalSteps').length;
    // alert(total_steps);
    if(next_step >= 1 && next_step <= total_steps){
      if(step == 1){
        if(this_step == 73){
          
           var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var month = $('#month').val();
    var day = $('#day').val();
    var year = $('#year').val();
           var investment = $('#investment').val();
          var code = $('#business_Ccountry_code1').val();
          var phone = $('#phone').val();
var vali=0;
     if(firstname == ''){
      $('#firstname').addClass('red-border');
      vali = 1;
      }
        if(lastname == ''){
      $('#lastname').addClass('red-border');
      vali = 1;
      }
      if(month == ''){
        vali = 1;
        $('#month').addClass('red-border');
      }
      if(day == ''){
        vali = 1;
        $('#day').addClass('red-border');
      }
        
      if(year == ''){
        vali = 1;
        $('#year').addClass('red-border');
      }
      if(investment == ''){
        vali = 1;
        $('#investment').addClass('red-border');
      }
      if(phone == ''){
        vali = 1;
        $('#phone').addClass('red-border');
      }
    
if (vali == 0){
  $("#loading").show();
$.ajax({
     url: "{{url('/generate_number')}}",
    type: 'POST', 
    data: {'_token':'{{csrf_token()}}','code':code,'phone':phone },
    
    success: function(response){
    if(response != 0){
      $('#randomnumber').val(response);
$('.step'+this_step).hide();
$('.step'+next_step).show();
$('#stage-step_no').html(next_step);
$('#step_no').val(next_step);
$('#hint_step_no').val('1');
// $('.hint_step').hide();
// $('.hint-step1').show();
$('.step'+this_step+'-hint_no').html('1');
$("#loading").hide();
}else{
  $("#loading").hide();
return false;
}
    }
    });
}else{
return false;
}
        }else if(validate(this_step) == 0){
          // alert('here');
          $('.step'+this_step).hide();
          $('.step'+next_step).show();
          $('#stage-step_no').html(next_step);
          $('#step_no').val(next_step);
          $('#hint_step_no').val('1');
          // $('.hint_step').hide();
          // $('.hint-step1').show();
          $('.step'+this_step+'-hint_no').html('1');
        }else{
          // alert('there');
          return false;
        }
      }else{
        $('.step'+this_step).hide();
        $('.step'+next_step).show();
        $('#stage-step_no').html(next_step);
        $('#step_no').val(next_step);
        $('#hint_step_no').val('1');
        $('.step'+this_step+'-hint_no').html('1');
      }
      var percentage = ((parseInt(next_step)/parseInt(total_steps))*parseInt(100));
      $('.steps-progress-bar span').css('width',percentage+'%');
    }
    if(next_step == 1){
      $('#prevBtn').hide();
    }else{
      $('#prevBtn').show();
    }
    if(next_step == total_steps){
      $('#nextBtn').hide();
      $('#finishBtn').show();
    }else{
      $('#nextBtn').show();
      $('#finishBtn').hide();
    }
    }
    function validate(stepno = null){
      var validate = 0;
      var first_name = $('#fname').val();
      var last_name = $('#lname').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var investment = $('#investment').val();
      var imageinput = $('#image-input').val();



     if(stepno == 1){
     if(first_name == ''){
        validate = 1;
        $('#fname').addClass('red-border');
      }
      if(last_name == ''){
        validate = 1;
        $('#lname').addClass('red-border');
      }
      return validate;
    }


     if(stepno == 2){
     if(email == ''){
         validate = 1;
         $('#email').addClass('red-border');
       //$("#wrong3").show();
       }
       if(!/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email) && email!=''){
             validate = 1;
          $("#wrong3").show(); 
         $('#email').addClass('red-border'); 
       }else{ 
          $("#wrong3").hide();   
      }
      $('#email').keyup(function() {
        $.ajax({
            url: '{{ route("check.email") }}',
            type: 'GET',
            data: {email: email},
            success: function(response) {
                if (response.exists) {
                    $('#email-exists').html('Email already exists.');
                } else {
                    $('#email-exists').html('');
                }
            }
        });
    });
      return validate;
    }






    if(stepno == 3){
    if(password == ''){
         validate = 1;
         $('#password').addClass('red-border');   
       }
       if($("#password").val().length < '8'){
         validate = 1;
         $('#password').addClass('red-border');
         $('#wrongequal').show();
       }else{
        $('#wrongequal').hide();



       }
 return validate; 
    }


    if(stepno == 4){
      if(investment == '1'){
        validate = 1;
        $('#investment').addClass('red-border');
      }
     return validate;
    }
    

   
   
    }

function submitGroupForm(){
  var days = [];
  var daysarray = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
  var totaldays = {};
  $.each(daysarray,function(key, day_name){
    totaldays[day_name] = {
      starttime: $('#start-hour-'+day_name).val()+':'+$('#start-min-'+day_name).val()+' '+$('.switch-start-'+day_name+':checked').val(),
      endtime: $('#end-hour-'+day_name).val()+':'+$('#end-min-'+day_name).val()+' '+$('.switch-end-'+day_name+':checked').val(),
      status: $('#status-'+day_name).val()
    };
  });
    // console.log(totaldays);
    days.push(totaldays);
  // return false;
 var type = $('#type').val();
var businessname = $('#business_name').val();
var address = $('#autocomplete1').val();
var lat = $('#search-lat').val();
var lng = $('#search-lng').val();
var businesstype = $('#business_type').val();
var licensetype = $('#license_type').val();
var licensenumber = $('#license_number').val();
var b_email = $('#email').val();
var businesscountrycode = $('#business_country_code').val();
var businessphone = $('#business_phone').val();
var website = $('#business_website').val();
var firstname = $('#firstname').val();
var lastname = $('#lastname').val();
var month = $('#month').val();
var day = $('#day').val();
var year = $('#year').val();
var countrycode = $('#business_Ccountry_code1').val();
var phone = $('#phone').val();
var gender = $('#gender').val();
var othergender = $('#other_gender').val();
var description = $('#descriptionBusiness').val();
var email = $('#Aemail').val();
var password = $('#password').val();
    var confrimPassword = $('#confrim_password').val();    
    var formdata = new FormData();
    jQuery.each($('#image-input')[0].files, function(i, file) {
    formdata.append('image', file);
    });
    
    
formdata.append("_token","{{csrf_token()}}");
    formdata.append('type',type);
    formdata.append('businessname',businessname);
    formdata.append('address',address);
    formdata.append('lat',lat);
    formdata.append('lng',lng);
    formdata.append('businesstype',businesstype);
    formdata.append('licensetype',licensetype);
    formdata.append('licensenumber',licensenumber);
    formdata.append('b_email',b_email);
    formdata.append('businesscountrycode',businesscountrycode);
    formdata.append('businessphone',businessphone);
    formdata.append('website',website);
 formdata.append('countrycode',countrycode);
    formdata.append('phone',phone);
    formdata.append('firstname',firstname);
    formdata.append('lastname',lastname);
    formdata.append('gender',gender);
formdata.append('day',day);
    formdata.append('month',month);
    formdata.append('year',year);
formdata.append('password',password);
formdata.append('description',description);




   

formdata.append('email',email);
formdata.append('othergender',othergender);




    
    // console.log(formdata);
    // return false;
    $('#finishBtn').attr('disabled',true);
    $('#loading').show();
    $.ajax({
     url: "{{url('/signup_process')}}",
    type: 'POST', 
    data: formdata,
    contentType: false,
    cache: false,
    processData:false,
    success: function(response){
    if(response != 0){
      location.assign('https://wanyou.plandstudios.com/seller-dashboard');
    var result = jQuery.parseJSON(response);
    // console.log();
    if(result.status == 'true'){
    // $('#loading').hide();
    // alert('kjsdakf');
     location.assign('https://wanyou.plandstudios.com/seller-dashboard');
    }else{
    $('#loading').hide();
    }
    }
    }
    });
    
    }
    $(document).on('keyup',"#business_name",function(){
    var search = $('#business_name').val();
    var search_loc = $('#autocomplete-city1').val();
    var search_lat_top = $('#search-lat_top').val();
    var search_lng_top = $('#search-lng_top').val();
    $("#search_google").html('<i class="fa fa-search" aria-hidden="true"></i>Search '+search+' In Google');
    // $('#b_id').val('0');
    c = search.length;
    // c++;
    
    if(c >= 4 && search != ''){
    $.ajax({
    url: "home/search_business",
    type:'post',
    data: {'search_key':search , 'search_key_loc':search_loc , 'search_key_lat':search_lat_top , 'search_key_lng':search_lng_top},
    success: function(response){
    if(response != 0){
    var result = jQuery.parseJSON(response);
    // console.log(result);
    if(result.count > 0){
    $(".busniess_listing").html(result.business);
    $(".busniess_listing").show();
    $(".field-form-group-dropdown").show();
    
    }else{
    $(".busniess_listing").hide();
    $(".field-form-group-dropdown").show();
    }
    }
    }
    });
    }
    //$('#b_name').hide();
    });
    // googlename
    /*
    $(document).on('keyup',"#google_name",function(){
    var search = $('#google_name').val();
    $("#search_google").html('<i class="fa fa-search" aria-hidden="true"></i>Search '+search+' In Google');
    // $('#b_id').val('0');
    c = search.length;
    // c++;
    
    if(c >= 4 && search != ''){
    $.ajax({
    url: "home/search_business_inGoogole",
    type:'post',
    data: {'search_key':search},
    success: function(response){
    if(response != 0){
    var result = jQuery.parseJSON(response);
    // console.log(result);
    if(result.count > 0){
    $(".google_busniess_listing").html(result.businessdata);
    $(".google_busniess_listing").show();
    $(".field-form-group-dropdown").show();
    
    }else{
    $(".google_busniess_listing").hide();
    $(".field-form-group-dropdown").show();
    }
    }
    }
    });
    }
    //$('#b_name').hide();
    });
    */
function getdetailBusiness(id){
  $('#loading').show();
  $.ajax({
    url: "home/detailBusiness",
    type:'post',
    data: {'id':id },
    success: function(response){
      if(response != 0){
        var result = jQuery.parseJSON(response);
        // console.log(result);
        // return false;
        if(result != ''){
          var logopath = "/business/"+result.business.logo;
          $("#page-image").attr("src",logopath);
          $("#imageupdate").val(result.business.logo);
          $("#business_name").val(result.business.name);
          $("#busniess_id").val(result.business.id);
          $("#email").val(result.business.email);
          $("#business_phone").val(result.business.phone);
          $("#business_Cfirstname").val(result.business.conatact_firstName);
          $("#business_Clastname").val(result.business.conatact_lastName);
          $("#business_Cemail").val(result.business.conatact_email);
          $("#business_Cphone").val(result.business.conatact_phone);
          $("#businessLicenseNumber").val(result.business.license_number);
          $("#licenseType").val(result.business.license_type);
          $("#route").val(result.business.street);
          $("#locality").val(result.business.city);
          $("#descriptionBusiness").val(result.business.description);
          $("#administrative_area_level_1").val(result.business.state);
          $("#postal_code").val(result.business.zipcode);
          $("#country").val(result.business.country);
          $("#local_lat").val(result.business.lat);
          $("#local_lng").val(result.business.lng);
          $("#bus_webiste").val(result.business.website);
          initialize(result.business.lat, result.business.lng)
          $(".field-form-group-dropdown").hide();
          category_array = [];
          amenaties_array = [];
          if(result.business.categories.length > 0){
            $.each(result.business.categories,function( key, value ) {
              // alert();
              $('.listing-two-despansary-wrp').append('<span class="button-checkbox checked-checkbox" style="margin-top:10px; display: inline-block;">\
                <button type="button" class="btn btn-primary active" data-color="primary" data-type="category" data-id="'+value.category_id+'"><i class="state-icon glyphicon glyphicon-check"></i>'+value.category_name+'</button>\
                <input type="checkbox" class="hidden" checked />\
              </span>');
            category_array.push(value.category_id);

            });
          }
          if(result.business.amenaties.length > 0){
            $('.amenitiescheckbox').prop('checked', false);
            $.each(result.business.amenaties,function( key, value ) {
              $('#box-'+value.category_id).prop('checked', true);
              amenaties_array.push(value.category_id);

            });
          }
          if(result.busniess_images.length > 0){
            $.each(result.busniess_images, function( key, value ) {
            var imagepath = "/business/"+value.image;
              $(".business_images").append(
              '<div class="col-md-1 image-div-'+value.id+'" style="margin-top:20px">'+
              '<div style="position:relative;background:url('+imagepath+') no-repeat center center; background-size:cover;">'+
              '<img style="width:100%" src="front/assets/images/blank.png" />'+
              '<a class="btn btn-danger delete-product-image" href="javascript:;" data-id="1"><i class="fa fa-times"></i></a>'+
              '</div>'+
              '</div>'
              );
            });
          }
          $('.business_hours').html(result.business_hours);
          /*if(result.business_hours.length > 0){
            $('#clock').html('');
            $.each(result.business_hours, function( key, value ) {
            $(".business_hours").append(
            '<tr><td>'+value.day+'<input type="hidden" value="'+value.day+'" class="form-control" name="day[]"></td>'+
            '<td style="width: 20%;">'+
            '<select class="form-control is_closed is_cl1" name="is_closed[]" id="offday-'+value.day+'">'+
            "<option  value='no' "+(value.closed ==  'no' ? 'selected' : "")+">Open</option>"+
            "<option value='yes' "+(value.closed == 'yes'? 'selected' : "")+">closed</option>"+
            '</select>'+
            '</td>'+
            '<td>'+
            '<input type="time" class="form-control clockpicker start11"  name="start-'+value.day+'" id="starttime-'+value.day+'" value="'+value.start_time+'" placeholder="start time" '+(value.closed ==  'yes' ? 'readonly' : "")+' >'+
            '</td>'+
            '<td>'+
            '<input  type="time" class="form-control clockpicker end11"  name="end-'+value.day+'" id="endtime-'+value.day+'" value="'+value.end_time+'" placeholder="End time" '+(value.closed ==  'yes' ? 'readonly' : "")+'>'+
            '</td>'+

            '</tr>'
            );
            // return false;
            });
          }*/
          $('#stateModal').modal('hide');
          $('#loading').hide();
        }
      }
    }
  });
}
  </script>
  <style>
  #page-image{
  cursor: pointer;
  }
  </style>
  <script>
  $(document).on('click',"#page-image",function() {
  $("#image-input").click();
  });
  // $(document).on('click',"#create_new",function() {
  // $(".field-form-group-dropdown").hide();
  // });
  function change_my_image(abc){
    var input = abc;
    if (input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function (e){
        // $('#page-image').attr('src', e.target.result);
        $('.business_logo').css('background', "url('"+e.target.result+"') no-repeat center center");
        $('.business_logo').css('background-size', "cover");
        $('#business_logo_error').html('');
      }
      reader.readAsDataURL(input.files[0]);
    }else{
      alert('Something went wrong with image uploading!');
    }
  }
  </script>
  <script type="text/javascript">
/*
  $(document).ready(function(){
  $('.clockpicker').clockpicker({
  donetext: 'Done',
  placement: 'top'
  }).find('input.endtime').change(function(){
  var day = $(this).data("day");
  var starttime = $('#starttime-'+day).val();
  var endtime = $('#endtime-'+day).val();
  if(starttime > endtime){
  $('#endtime-'+day).addClass('red-border');
  }
  });
  });
*/
$(document).on('click',"#search_google",function() {
  $('#stateModal').modal('show');
});
$(document).on('click',".create-new-tab",function() {
  $('#stateModal').modal('hide');
});
$(document).on('click',"#search_google_find",function() {
  $('.google-search-error-div').html('');
  var state = $('#autocomplete-city').val();
  var search = $('#google_name').val();
  var lat = $('#search-lat').val();
  var lng = $('#search-lng').val();
  if(search != '' && state != ''){
    $('#loading').show();
    $.ajax({
      url: "home/search_business_inGoogole",
      type:'post',
      data: {'search_key':search, 'state':state, 'lat' : lat, 'lng' : lng},
      success: function(response){
        if(response != 0){
          var result = jQuery.parseJSON(response);
          $('.google_busniess_listing').html(result.businessdata);
          $('.field-form-group-dropdown').show();
          $('#stateModal').modal('show');
          $('#loading').hide();

          /** /
          // console.log(result.relatedBusiness.results);
          if(result.relatedBusiness.results.length > 0){
          $('#loading').hide();
          $('#stateModal').modal('hide');
          $("#businessListing").modal('show');
          $.each(result.relatedBusiness.results, function( key, value ) {
          var logopath = value.icon;
          $('.businessListingApi').append(' <li class="col-md-12" style="margin: 2px 3px 15px 0px;">'+
          '<div class="dropdown-business-listing"> <a href="javascript:;" data-id="'+value.name+'">'+
          '<div class="dropdown-business-image" style="background:url('+logopath+') no-repeat center center; background-size:cover;"></div>'+
          '<h4> '+value.name+' <button style="float:right;" type="button" class="btn btn-primary businessGetGoogle active" data-color="primary" data-type="category" data-id="'+value.place_id+'" data-logo="'+value.icon+'" data-name="'+value.name+'" data-number="'+value.formatted_phone_number+'" data-lat="'+value.geometry.location.lat+'" data-lng="'+value.geometry.location.lat+'"><i class="state-icon glyphicon glyphicon-check"></i>Import</button</h4>'+
          '<div class="clearfix"></div>'+
          '</a>'+
          '</div>'+
          '</li>');
          });
          }else{
          $('#loading').hide();
          $("#businessListing").modal('show');
          $('.businessListingApi').html(' <li class="col-md-12" style="margin: 2px 3px 15px 0px;">'+
          '<div class="dropdown-business-listing">'+
          '<div class="dropdown-business-image" style="background:#f5f5f5"></div>'+
          '<h4> No Record Found In Google</h4>'+
          '</div>'+
          '</li>');
          }
          /**/
        }else{
          alert('Not found');
          $('#loading').hide();
        }
      }
    });
  }else{
    $('.google-search-error-div').html('Please provide a name and location!');
  }
});
$(document).on('click',".businessGetGoogle",function() {
var place_id = $(this).data('id');
// var Logo_link = $(this).data('logo');
// var businessName = $(this).data('name');
// var businessNumber = $(this).data('number'); 
// var lat = $(this).data('lat');
// var lng = $(this).data('lng');
// alert(place_id);
$('#loading').show();
$.ajax({
url: "home/download_business_inGoogole",
type:'post',
data: {
'place_id':place_id,
// 'Logo_link':Logo_link,
// 'businessName':businessName,
// 'lat':lat,
// 'lng':lng,

},
success: function(response){

if(response != 0){
var result = jQuery.parseJSON(response);
// console.log(result);
if(result.status == "true"){
$('#business_name').val(result.name);
$("#businessListing").modal('hide');
$(".field-form-group-dropdown").hide();
  getdetailBusiness(result.id);
$('#loading').hide();
}else{
}

}
}
});
});
function validURL(str) {
var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
'((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
'((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
'(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
'(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
'(\\#[-a-z\\d_]*)?$','i'); // fragment locator
return !!pattern.test(str);
}
function aboutcharcount(){
var about_me = $('#about_me').val();
$('.about_me_text').html('<b>Character count:</b> '+about_me.length+' words');
if(about_me.length > 300){
$('#about_me').val(about_me.substr(0, 300));
}
}
function countChar(val) {
var len = val.value.length;
if (len >= 300) {
val.value = val.value.substring(0, 500);
} else {
$('#charNum').text(300 - len);
}
};
</script>


</div>
<!--dshboardcontent-->
<div class="clearfix"></div>
<!-- FOOTER SECTION -->
<div id="loading" style="">
<div class="loading-img" style=""><img class="img-responsive" src="front/assets/images/cover-loading.gif" alt="weedlifestyles loading icon" /></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<!-- footer -->
<!-- Modal -->
<div id="notifyModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="row text-center"><img src="front/assets/images/logo_black.png" style="width: 150px; margin:0 auto;" alt="Wanyou logo" /></div>
        <div class="row text-center"><b style="font-size: 15px; color: #333; margin: 10px 0px; display: block;" class="notifyModal-heading">Welcome to Wanyou!</b></div>
        <div class="row text-center"><p class="notifyModal-text" style="padding: 0px 15px; text-align: center;"></p></div>
        <div class="row text-center" style="margin-top:20px;"><button type="button" class="btn btn-success green-btn" data-dismiss="modal">Close</button></div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
/**/
   $(document).ready(function(){        
   $('#myModalzzzzzzzz').modal('show');
    }); 
/**/
</script>
<script>

const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
// console.log(timezone); // Asia/Karachi
$.ajax({
    url : 'home/save_my_timzone',
    type : 'POST',
    data : { 'timezone' : timezone},
    // dataType:'json',
    success : function(response) {
        // alert('Data: '+ response);
    },
    error : function(request,error)
    {
        // alert("Request: "+JSON.stringify(request));
    }
});

</script>
<script type="text/javascript">
  $(document).ready(function(){
  $("input").keypress(function(e){
 var field = this;
 if($(field).hasClass("ignore_type_check")) {
   
 }else {
   var type = $(field).attr("type");
 if(type != "email" && type != "password" && type != "url") {
  var code = e.keyCode || e.which;
  if(code == 64) {
   return false;
  }
  /*if(code == 77 || code == 109) {
   var value = $(field).val();
   if(value.substr(value.length - 3) == ".co" || value.substr(value.length - 3) == ".CO") {
    return false;
   }
  }
  if(code == 79 || code == 111) {
   var value = $(field).val();
   if(value.substr(value.length - 2) == ".c" || value.substr(value.length - 2) == ".C") {
    return false;
   }
  }*/
 }
 }
  }).keyup(function(e){
 var field = this;
 if($(field).hasClass("ignore_type_check")) {
 }else {
 var type = $(field).attr("type");
 if(type != "email" && type != "password" && type != "url") {
  var field = this;
  var value = $(field).val();
value = value.replace(/([#0-9]\u20E3)|[\xA9\xAE\u203C\u2047-\u2049\u2122\u2139\u3030\u303D\u3297\u3299][\uFE00-\uFEFF]?|[\u2190-\u21FF][\uFE00-\uFEFF]?|[\u2300-\u23FF][\uFE00-\uFEFF]?|[\u2460-\u24FF][\uFE00-\uFEFF]?|[\u25A0-\u25FF][\uFE00-\uFEFF]?|[\u2600-\u27BF][\uFE00-\uFEFF]?|[\u2900-\u297F][\uFE00-\uFEFF]?|[\u2B00-\u2BF0][\uFE00-\uFEFF]?|(?:\uD83C[\uDC00-\uDFFF]|\uD83D[\uDC00-\uDEFF])[\uFE00-\uFEFF]?/g, '');
  $(field).val(value);
  var update = false;
  if(value.indexOf("@") >= 0) {
   var value = value.replace(/@/g, "");
   update = true;
  }
  if(value.indexOf(".com") >= 0) {
   value = value.replace(/.com/g, "");
   update = true;
  }
  if(value.indexOf(".co") >= 0) {
   value = value.replace(/.co/g, "");
   update = true;
  }
  if(value.indexOf("email") >= 0) {
   value = value.replace(/email/g, "");
   update = true;
  }
  if(value.indexOf("e-mail") >= 0) {
   value = value.replace(/e-mail/g, "");
   update = true;
  }
  if(value.indexOf(".net") >= 0) {
   value = value.replace(/.net/g, "");
   update = true;
  }
  if(value.indexOf("dot") >= 0) {
   value = value.replace(/dot/g, "");
   update = true;
  }
  if(update) {
   $(field).val(value);
  }
 }
  }
  });
$("textarea").keypress(function(e){
 var field = this;
 if($(field).hasClass("ignore_type_check")) {
 }else {
    var code = e.keyCode || e.which;
  if(code == 64) {
   return false;
  }
  /*if(code == 77 || code == 109) {
   var value = $(field).val();
   if(value.substr(value.length - 3) == ".co" || value.substr(value.length - 3) == ".CO") {
    return false;
   }
  }
  if(code == 79 || code == 111) {
   var value = $(field).val();
   if(value.substr(value.length - 2) == ".c" || value.substr(value.length - 2) == ".C") {
    return false;
   }
  } */
 }
 
  }).keyup(function(e){
 var field = this;
 if($(field).hasClass("ignore_type_check")) {
 }else {
  var value = $(field).val();
value = value.replace(/([#0-9]\u20E3)|[\xA9\xAE\u203C\u2047-\u2049\u2122\u2139\u3030\u303D\u3297\u3299][\uFE00-\uFEFF]?|[\u2190-\u21FF][\uFE00-\uFEFF]?|[\u2300-\u23FF][\uFE00-\uFEFF]?|[\u2460-\u24FF][\uFE00-\uFEFF]?|[\u25A0-\u25FF][\uFE00-\uFEFF]?|[\u2600-\u27BF][\uFE00-\uFEFF]?|[\u2900-\u297F][\uFE00-\uFEFF]?|[\u2B00-\u2BF0][\uFE00-\uFEFF]?|(?:\uD83C[\uDC00-\uDFFF]|\uD83D[\uDC00-\uDEFF])[\uFE00-\uFEFF]?/g, '');
  $(field).val(value);
  var update = false;
  if(value.indexOf("@") >= 0) {
   var value = value.replace(/@/g, "");
   update = true;
  }
  if(value.indexOf(".com") >= 0) {
   value = value.replace(/.com/g, "");
   update = true;
  }
  if(value.indexOf(".co") >= 0) {
   value = value.replace(/.co/g, "");
   update = true;
  }
  if(value.indexOf("email") >= 0) {
   value = value.replace(/email/g, "");
   update = true;
  }
  if(value.indexOf("e-mail") >= 0) {
   value = value.replace(/e-mail/g, "");
   update = true;
  }
  if(value.indexOf(".net") >= 0) {
   value = value.replace(/.net/g, "");
   update = true;
  }
  if(value.indexOf("dot") >= 0) {
   value = value.replace(/dot/g, "");
   update = true;
  }
  if(update) {
   $(field).val(value);
  }
  }
  });
});

</script>
<script type="text/javascript">
   function getMessage(){
     $("#loading").show();
       var code = $('#business_Ccountry_code1').val();
          var phone = $('#phone').val();
         // ajax 
          $.ajax({
     url: "{{url('/generate_number_two')}}",
    type: 'POST', 
    data: {'_token':'{{csrf_token()}}','code':code,'phone':phone },
    
    success: function(response){
    if(response != 0){
    $('#randomnumber').val(response); 
    $("#loading").hide();
}else{
  $("#loading").hide();
return false;
}
    }
    });
          // ajax
           var a=$("#re").hide();
           if(a){
            $("#countdown").show();
           var timer2 = "0:30";
var interval = setInterval(function() {


  var timer = timer2.split(':');
  //by parsing integer, I avoid all extra string processing
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  --seconds;
  minutes = (seconds < 0) ? --minutes : minutes;
  if (minutes < 0) clearInterval(interval);
  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  //minutes = (minutes < 10) ?  minutes : minutes;
  $('.countdown').html(minutes + ':' + seconds);
  timer2 = minutes + ':' + seconds;
}, 1000); 
           }
         
           setTimeout(function(){ $("#re").show();$("#countdown").hide()},30000);
     } 
     const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        }); 

        // prevent form submit
       
</script>
<script>

</script>
  </body>
</html>
