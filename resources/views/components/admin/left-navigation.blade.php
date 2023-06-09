<!-- menu -->
<div class="menu-area">
<div class="closes"><i class="fa fa-times" aria-hidden="true"></i></div>

<!-- logo -->
<div class="logo">
<a href="{{ route('admin.dashboard') }}">
    <img class="small-logo" src="{{ asset('img/logo-s.svg') }} "alt="logo">
    <img class="big-logo" src="{{ asset('img/logo.svg') }} "alt="logo">
</a>
</div>
<!-- logo -->

<nav class="menu">
<ul>
    <li><a class="{{ $pageName == 'Dashboard'? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.5C7.03711 4.5 3 8.53711 3 13.5C3 15.6709 3.77637 17.6631 5.0625 19.2188L5.27344 19.5H18.7266L18.9375 19.2188C20.2236 17.6631 21 15.6709 21 13.5C21 8.53711 16.9629 4.5 12 4.5ZM12 6C16.1514 6 19.5 9.34863 19.5 13.5C19.5 15.1992 18.9053 16.7432 17.9531 18H6.04688C5.09473 16.7432 4.5 15.1992 4.5 13.5C4.5 9.34863 7.84863 6 12 6ZM12 6.75C11.5869 6.75 11.25 7.08691 11.25 7.5C11.25 7.91309 11.5869 8.25 12 8.25C12.4131 8.25 12.75 7.91309 12.75 7.5C12.75 7.08691 12.4131 6.75 12 6.75ZM9 7.54688C8.58691 7.54688 8.25 7.88379 8.25 8.29688C8.25 8.70996 8.58691 9.04688 9 9.04688C9.41309 9.04688 9.75 8.70996 9.75 8.29688C9.75 7.88379 9.41309 7.54688 9 7.54688ZM15 7.54688C14.5869 7.54688 14.25 7.88379 14.25 8.29688C14.25 8.70996 14.5869 9.04688 15 9.04688C15.4131 9.04688 15.75 8.70996 15.75 8.29688C15.75 7.88379 15.4131 7.54688 15 7.54688ZM6.79688 9.75C6.38379 9.75 6.04688 10.0869 6.04688 10.5C6.04688 10.9131 6.38379 11.25 6.79688 11.25C7.20996 11.25 7.54688 10.9131 7.54688 10.5C7.54688 10.0869 7.20996 9.75 6.79688 9.75ZM16.9922 9.77344L12.75 12.2109C12.5303 12.082 12.2725 12 12 12C11.1709 12 10.5 12.6709 10.5 13.5C10.5 14.3291 11.1709 15 12 15C12.8203 15 13.4883 14.3408 13.5 13.5234C13.5 13.5146 13.5 13.5088 13.5 13.5L17.7422 11.0859L16.9922 9.77344ZM6 12.75C5.58691 12.75 5.25 13.0869 5.25 13.5C5.25 13.9131 5.58691 14.25 6 14.25C6.41309 14.25 6.75 13.9131 6.75 13.5C6.75 13.0869 6.41309 12.75 6 12.75ZM18 12.75C17.5869 12.75 17.25 13.0869 17.25 13.5C17.25 13.9131 17.5869 14.25 18 14.25C18.4131 14.25 18.75 13.9131 18.75 13.5C18.75 13.0869 18.4131 12.75 18 12.75ZM6.79688 15.75C6.38379 15.75 6.04688 16.0869 6.04688 16.5C6.04688 16.9131 6.38379 17.25 6.79688 17.25C7.20996 17.25 7.54688 16.9131 7.54688 16.5C7.54688 16.0869 7.20996 15.75 6.79688 15.75ZM17.2031 15.75C16.79 15.75 16.4531 16.0869 16.4531 16.5C16.4531 16.9131 16.79 17.25 17.2031 17.25C17.6162 17.25 17.9531 16.9131 17.9531 16.5C17.9531 16.0869 17.6162 15.75 17.2031 15.75Z" fill="#2A4385"/>
            </svg> <span class="hide-item">Dashboard </span></a></li>
    
        <!-- sub-menu --></li>
    <li><a class="{{ $pageName == 'Account'? 'active' : '' }}" href="{{ route('admin.account', ['id' => 1]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.75C9.1084 3.75 6.75 6.1084 6.75 9C6.75 10.8076 7.67285 12.4131 9.07031 13.3594C6.39551 14.5078 4.5 17.1621 4.5 20.25H6C6 16.9277 8.67773 14.25 12 14.25C15.3223 14.25 18 16.9277 18 20.25H19.5C19.5 17.1621 17.6045 14.5078 14.9297 13.3594C16.3271 12.4131 17.25 10.8076 17.25 9C17.25 6.1084 14.8916 3.75 12 3.75ZM12 5.25C14.0801 5.25 15.75 6.91992 15.75 9C15.75 11.0801 14.0801 12.75 12 12.75C9.91992 12.75 8.25 11.0801 8.25 9C8.25 6.91992 9.91992 5.25 12 5.25Z" fill="#63729A"/>
            </svg> <span class="hide-item">Account </span></a></li>
    

 
    <li><a class="{{ $pageName == 'User'? 'active' : '' }}" href="{{ route('admin.user.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3V11.25H16.5V3H7.5ZM9 4.5H10.5V7.5L12 6L13.5 7.5V4.5H15V9.75H9V4.5ZM2.25 12.75V21H11.25V12.75H2.25ZM12.75 12.75V21H21.75V12.75H12.75ZM3.75 14.25H5.25V17.25L6.75 15.75L8.25 17.25V14.25H9.75V19.5H3.75V14.25ZM14.25 14.25H15.75V17.25L17.25 15.75L18.75 17.25V14.25H20.25V19.5H14.25V14.25Z" fill="#63729A"/>
            </svg> <span class="hide-item">Users </span></a></li>


            
<li><a class="{{ $pageName == 'Properties'? 'active' : '' }}" href="{{ route('admin.property.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3V11.25H16.5V3H7.5ZM9 4.5H10.5V7.5L12 6L13.5 7.5V4.5H15V9.75H9V4.5ZM2.25 12.75V21H11.25V12.75H2.25ZM12.75 12.75V21H21.75V12.75H12.75ZM3.75 14.25H5.25V17.25L6.75 15.75L8.25 17.25V14.25H9.75V19.5H3.75V14.25ZM14.25 14.25H15.75V17.25L17.25 15.75L18.75 17.25V14.25H20.25V19.5H14.25V14.25Z" fill="#63729A"/>
            </svg> <span class="hide-item">Properties </span></a></li>


            
<!--     <li><a class="{{ $pageName == 'user'? 'active' : '' }}" href="{{ route('admin.user.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3V11.25H16.5V3H7.5ZM9 4.5H10.5V7.5L12 6L13.5 7.5V4.5H15V9.75H9V4.5ZM2.25 12.75V21H11.25V12.75H2.25ZM12.75 12.75V21H21.75V12.75H12.75ZM3.75 14.25H5.25V17.25L6.75 15.75L8.25 17.25V14.25H9.75V19.5H3.75V14.25ZM14.25 14.25H15.75V17.25L17.25 15.75L18.75 17.25V14.25H20.25V19.5H14.25V14.25Z" fill="#63729A"/>
            </svg> <span class="hide-item">users </span></a></li> -->

   
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">                         
                <i class="fa fa-sign-out" style="margin-right:12px;margin-left:4px; font-size:18px"></i> Log Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf 
                </form>
                
            </li> 
</ul> 
</nav>
</div>
<!-- menu -->
