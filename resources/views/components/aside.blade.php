<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <img src="assets/images/logo.svg" alt="" srcset="">
</div>
<div class="sidebar-menu">
    <ul class="menu">
        
            
            <li class='sidebar-title'>Menu</li>   
            <li class="sidebar-item {{ request()->routeIs('/') ? "active" : null }}">

                <a href="{{url('/')}}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
            </li>
            
        
            
            <li class="sidebar-item  has-sub">

                <a href="#" class='sidebar-link'>
                    <i data-feather="user" width="20"></i> 
                    <span>User</span>
                </a>

                
                <ul class="submenu ">
                    
                    <li>
                        <a href="{{url('/user')}}"  class="sidebar-item {{ request()->routeIs('/user') ? "active" : null }}">Manage</a>
                    </li>
                    
                    <li>
                        <a href="{{url('/locked')}}">Locked</a>
                    </li>

                    <li>
                        <a href="{{url('/mutation')}}">Mutation</a>
                    </li>

                    <li>
                        <a href="{{url('/activation')}}">Activity</a>
                    </li>
                    
                </ul>
                
            </li>
            
        
            
            <li class='sidebar-title'>Conviguration &amp; Controls</li>
            
        
            
            <li class="sidebar-item  has-sub">

                <a href="#" class='sidebar-link'>
                    <i data-feather="file-text" width="20"></i> 
                    <span>Conviguration</span>
                </a>

                
                <ul class="submenu ">
                    
                    <li>
                        <a href="form-element-input.html">Website</a>
                    </li>
                    
                    <li>
                        <a href="form-element-input-group.html">Treams &amp; Privacy</a>
                    </li>
                    
                    <li>
                        <a href="form-element-input-group.html">Notification</a>
                    </li>
                    
                    <li>
                        <a href="form-element-input-group.html">Popup</a>
                    </li>
                    
                </ul>
                
            </li>

            <li class="sidebar-item {{ request()->routeIs('/') ? "active" : null }}">

                <a href="{{url('/')}}" class='sidebar-link'>
                    <i data-feather="wifi" width="20"></i> 
                    <span>Providers</span>
                </a>
            </li>
            
        
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>