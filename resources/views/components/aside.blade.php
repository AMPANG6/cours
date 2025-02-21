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
                        <a href="{{url('user')}}"  class="sidebar-item {{ request()->routeIs('/user') ? "active" : null }}">Manage</a>
                    </li>
                    
                    <li>
                        <a href="component-badge.html">Locked</a>
                    </li>

                    <li>
                        <a href="component-badge.html">Mutation</a>
                    </li>

                    <li>
                        <a href="component-badge.html">Activity</a>
                    </li>
                    
                </ul>
                
            </li>
            
        
            
            <li class='sidebar-title'>Forms &amp; Tables</li>
            
        
            
            <li class="sidebar-item  has-sub">

                <a href="#" class='sidebar-link'>
                    <i data-feather="file-text" width="20"></i> 
                    <span>Form Elements</span>
                </a>

                
                <ul class="submenu ">
                    
                    <li>
                        <a href="form-element-input.html">Input</a>
                    </li>
                    
                    <li>
                        <a href="form-element-input-group.html">Input Group</a>
                    </li>
                    
                </ul>
                
            </li>
            
        
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>