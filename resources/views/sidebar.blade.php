<!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"> Raz Pharmaceuticals </div>
        <div class="list-group list-group-flush">
            <a href="/users" class="list-group-item list-group-item-action bg-light">Manage Users</a>
            <a href="/roles" class="list-group-item list-group-item-action bg-light">Manage Roles</a>
            <a href="/products" class="list-group-item list-group-item-action bg-light">Products</a>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Menu</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                
                            </li>
                            
                        @else
                            <li class="">
                                <a href="/home" class="dropdown-item">
                                    {{ Auth::user()->name }} 
                                </a>
                            </li>
|
                            <li>
                                <div class="" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>
