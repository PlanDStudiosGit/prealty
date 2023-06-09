<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets/images/favicon.png')}}">

    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('front/assets/css/plugin.css')}}" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Cabin:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

</head>

<body>
@if (session('error'))
    <script>
        swal({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            button: "OK",
        });
    </script>
@endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>
@if (session('success'))
    <script>
        // swal({
        //     title: "success",
        //     text: "{{ session('success') }}",
        //     icon: "success",
        //     button: "OK",
        // });
        


        Swal.fire({
      title: '{{ session('success') }}',
      text: 'Do you want to visit the dashboard?',
      icon: 'success',
      showCancelButton: true,
      confirmButtonText: 'Dashboard',
      cancelButtonText: 'No, thanks',
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to the dashboard or perform any desired action
        window.location.href = '{{url('/dashboard')}}';
      }
    });
    </script>
@endif
    @yield('content')

     
 


    <!-- <script src="{{asset('front/assets/js/jquery-3.5.1.min.js')}}"></script> -->
    <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/assets/js/plugin.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    <script src="{{asset('front/assets/js/custom-swiper1.js')}}"></script>
    <script src="{{asset('front/assets/js/custom-nav.js')}}"></script>
    <script>(function () { var js = "window['__CF$cv$params']={r:'7ac5b764ea844008',m:'V4tKXuDrCMRbQhsSDMBdWR2KVaH_l.Vkh5oRgDDvwPQ-1679564463-0-Ab27SMQPHv0f1/vfgGhe7TaIRTT9/CEDLkkuQBKaSiNxqiVg0zfrLC1oEIP308zhF33rMVxi+/emuSKzdqfMimL4A9kNI5fYqHvnNDBIxBPybbpy7PhYvE/sgdd+CtgUwsHLQ/v2G679iUprO8YdF9E=',s:[0x4a7a6f9b6f,0xeba8afbc19],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.nonce = ''; _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>

</html>
</body>

</html>