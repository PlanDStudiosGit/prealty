<div class="sidebar">
            <div class="media d-block text-center user-profile">
                <img class="img-fluid" src="front/dashboard/images/user-solid.svg" alt="" style="width:80px"   >
                <div class="media-body text-center mt-0 color-primary mt-2">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                            <h6 class="mb-0 font-weight-bold">{{Auth::user()->name}}</h6>
                           
                        </a>
                        
                </div>
            </div>
            
            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu" style="margin-left: 10px;">
                <li class="active">                  
                    <ul>    
                    <li ><a href="{{url('/')}}" style="font-size: 17px;"><i class="fas fa-user-alt"></i> Home</a></li>
                    <li ><a href="{{url('/dashboard')}}" style="font-size: 17px;"><i class="fas fa-user-alt"></i> Dashboard</a></li>
                        <li ><a href="{{url('/profile')}}" style="font-size: 17px;  margin-top:10px"><i class="fas fa-user-alt"></i> My Profile</a></li>
                        <li ><a href="{{url('/reviewed_properties')}}" style="font-size: 17px; margin-top: 10px;"><i class="fa fa-home"></i>My Properties</a></li>
                        <li><a href="{{url('/search_property')}}" style="font-size: 17px; margin-top: 10px;"><i class="fa fa-search"></i> Search Properties</a></li>
                       
                            
                        <li><a href="{{ route('logout') }}" style="font-size: 17px; margin-top: 10px;"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">                         
                            <i class="fa fa-sign-out"></i> Log Out</a>  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf 
                            </form>
                         
                        </li>  
                    </ul>
                </li>
 
               

                
              
            </ul>
            <!-- END: Menu-->
        </div>