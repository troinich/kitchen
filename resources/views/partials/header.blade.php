    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h2 class="display-4">The Kitchen.</h2>
            <p class="lead"> Satisfy your hunger</p>
        </div>
    </div>

<nav class="navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('blog.index') }}">The Kitchen</a>
        </div>
        <ul class="nav navbar-nav navbar-center">
            <li><a href="{{ url('/category/asian') }}">Asian</a></li>
            <li><a href="{{ url('/category/pasta') }}">Pasta</a></li>
            <li><a href="{{ url('/category/vego') }}">Vego</a></li>
            <li><a href="{{ url('/category/easy') }}">Easy</a></li>
            <li><a href="{{ url('/category/children') }}">For kids</a></li>
            <li><a href="{{ route('other.about') }}">Contact Us</a></li>
            </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(!Auth::check())

                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>

            @else
                <li><a href="{{ route('admin.index') }}">Admin</a></li>
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
        </ul>
    </div>
</nav>

