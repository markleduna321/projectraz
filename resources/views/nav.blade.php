<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        @guest
                        <li class="nav-item active">
                          <a class="nav-link" href=""> <strong>Raz Pharmaceuticals</strong> <span class="sr-only">(current)</span></a>
                        </li>
                        

                        @else
                        <li class="nav-item active">
                          <a class="nav-link" href=""> <strong>Raz Pharmaceuticals</strong> <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- Admin/Staff access -->
                        @if(!empty(Auth::user()->getRoleNames()))
                        @foreach(Auth::user()->getRoleNames() as $v)
                        @if($v === 'Admin' or $v === 'Staff')

                            <li class="nav-item active">
                            <a class="nav-link" href="/products">Products</a>
                            </li>
                        
                        @else
                        @endif
                        @endforeach
                        @endif

                        <!-- admin access only -->
                        @if(!empty(Auth::user()->getRoleNames()))
                        @foreach(Auth::user()->getRoleNames() as $v)
                        @if($v === 'Admin')

                        <li class="nav-item active">
                          <a class="nav-link" href="/users"> Manage Users <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="/roles"> Manage Roles <span class="sr-only">(current)</span></a>
                        </li>

                        @else
                        @endif
                        @endforeach
                        @endif

                        <!-- Admin/Staff/User access -->
                        @if(!empty(Auth::user()->getRoleNames()))
                        @foreach(Auth::user()->getRoleNames() as $v)
                        @if($v === 'Admin' or $v === 'Staff' or $v === 'User')

                            <li class="nav-item active">
                            <a class="nav-link" href="/inventory"> Inventory </a>
                            </li>
                            <li class="nav-item active">
                            <a class="nav-link" href="/purchase">Purchase Order</a>
                            </li>
                            
                        @else
                        @endif
                        @endforeach
                        @endif

                        <!-- Admin/Staff/Investor access -->
                        @if(!empty(Auth::user()->getRoleNames()))
                        @foreach(Auth::user()->getRoleNames() as $v)
                        @if($v === 'Admin' or $v === 'Staff' or $v === 'Investor')

                            <li class="nav-item active">
                            <a class="nav-link" href="/reports">Reports</a>
                            </li>
                        
                        @else
                        @endif
                        @endforeach
                        @endif

                        <!-- Staff/User access -->
                        @if(!empty(Auth::user()->getRoleNames()))
                        @foreach(Auth::user()->getRoleNames() as $v)
                        @if($v === 'Staff' or $v === 'User')

                            <li class="nav-item active ">
                            <a class="nav-link" href="/account">Accounts</a>
                            </li>

                        @else
                        @endif
                        @endforeach
                        @endif
                          
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
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
            </div>
        </nav>