<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <!-- Branding Image -->
            <a class="navbar-item" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Users
                </a>

                <div class="navbar-dropdown">
                    <a href="{{ route('users.create') }}" class="navbar-item">
                        Create
                    </a>
                </div>
            </div>
            <button class="button navbar-burger">
            <span></span>
            <span></span>
            <span></span>
            </button>
        </div>
        <div id="soc-menu" class="navbar-menu">
            <div class="navbar-start">
            </div>
            <div class="navbar-end">
                @guest
                    <a class="navbar-item" href="{{ route('login') }}">Login</a>
                    <a class="navbar-item" href="{{ route('register') }}">Register</a>
                @else
                    <a class="navbar-item" href="#">
                        Welcome, {{ Auth::user()->name }}
                    </a>
                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                @endguest                    
            </div>
        </div>
    </div>
</nav>