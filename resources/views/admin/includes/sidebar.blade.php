<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
          
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{route('admin')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span>
                            <span class="nk-menu-text">Courses</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('categories_list')}}" class="nk-menu-link"><span class="nk-menu-text">Catagories</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/lms/courses.html" class="nk-menu-link"><span class="nk-menu-text">Course List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                            <span class="nk-menu-text"> Formateur </span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.addformateur')}}" class="nk-menu-link"><span class="nk-menu-text">Instructor List</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                            <span class="nk-menu-text"> student </span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.showstudent')}}" class="nk-menu-link"><span class="nk-menu-text">Instructor List</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li>  
                        
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          logout
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div></li>
                </ul>
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>